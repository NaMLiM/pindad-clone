<?php
    session_start();
    if(!$_SESSION["nama_admin"]){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Write News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/write-news.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="dashboard.php">
                <i class="fas fa-arrow-circle-left"></i>
                Back
            </a>
            <input type="text" placeholder="Judul" name="filename" class="judul" size="100">
            <select name="kategori" class="kategori">
                <option value="press-release">Siaran Press</option>
                <option value="pindad-in-news">Pindad Dalam Berita</option>
                <option value="procurement-info">Informasi Pengadaan</option>
                <option value="informasi-serta-merta">Informasi Serta Merta</option>
                <option value="new-innovation">Inovasi Baru</option>
            </select>
            <input type="file" name="thumbnail" class="thumbnail" value="Thumbnail">
            <input type="button" value="Submit" name="submit" class="submit">
        </nav>
    </header>
    <textarea class="editor">
    <?php
        if(isset($_GET['news'])){
            include($_GET["news"]);
        }
    ?>
    </textarea>
    <!-- JS library -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7b59756246.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/3oaj8v7pg3vxf0ezdpkje5mb6zhi9uyicn04nqok4vxmdazx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $(function(){
            tinymce.init({
                selector: '.editor',
                images_upload_url: 'system/upload-images.php',
                height: '100%',
                automatic_uploads: true,
                plugins: 'code image',
                toolbar: '',
                toolbar_mode: 'floating',
                paste_data_images: true,
                images_upload_handler: function (blobInfo, success, failure) {
                    var xhr, formData;
                    xhr = new XMLHttpRequest();
                    xhr.withCredentials = false;
                    xhr.open('POST', 'system/upload-images.php');
                    xhr.onload = function() {
                    var json;

                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }
                    json = JSON.parse(xhr.responseText);
                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }
                    success(json.location);
                    };
                    formData = new FormData();
                    if( typeof(blobInfo.blob().name) !== undefined )
                        fileName = blobInfo.blob().name;
                    else
                        fileName = blobInfo.filename();
                    formData.append('file', blobInfo.blob(), fileName);
                    xhr.send(formData);
                }
            })
        });
        $(".submit").click(function(){
            tinymce.triggerSave();
            var title = $(".judul").val();
            var category = $(".kategori").val();
            var news = tinymce.activeEditor.getContent();
            var thumbnail = $(news).find('img').attr('src');;
            var dataTosend= {
                judul: title,
                kategori: category,
                thumbnail,
                berita: news
            };
            $.ajax({
                type: 'POST',
                url: 'system/news-save.php',
                encode: true,
                data: dataTosend
            })
            .done(function(){
                alert("Berita Berhasil Dipublish");
                alert(thumbnail);
                document.location="dashboard.php";
            })
      });
    </script>
</body>
</html>