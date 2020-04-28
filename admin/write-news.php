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
            <input type="button" value="Submit" name="submit" class="submit">
        </nav>
    </header>
    <textarea class="editor">
    </textarea>
    <!-- JS library -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7b59756246.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/3oaj8v7pg3vxf0ezdpkje5mb6zhi9uyicn04nqok4vxmdazx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $(function(){
            tinymce.init({
                selector: '.editor',
                plugins: '',
                toolbar: '',
                toolbar_mode: 'floating',
            })
        });
        $(".submit").click(function(){
        var judul = $(".judul").val();
        var kategori = $(".kategori").val();
        var berita = tinymce.activeEditor.getContent();
        var dataTosend='judul='+judul+'&kategori='+kategori+'&berita='+berita;
        $.ajax({
          type: 'POST',
          url: 'system/news-save.php',
          data: dataTosend
        })
        .done(function(){
          alert("Berita Berhasil Dipublish");
		      document.location("user.php");
        })
      });
    </script>
</body>
</html>