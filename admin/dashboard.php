<?php
    include ("system/connection.php");
    session_start();

    if(!$_SESSION["nama_admin"]){
        header("location:login.php");
    }

    if(!$_GET["page"]){
        header("location:dashboard.php?page=berita");
    }
    else{
        $page = $_GET["page"];
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard - <?php echo $_SESSION["nama_admin"]; ?></title>
</head>
<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-md-2 sidebar">
                <div class="user text-center">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <div class="user-info text-center">
                        <p><?php echo $_SESSION["nama_admin"]; ?></p>
                        <a href="system/logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
                <div class="page">
                    <h2 class="text-light ml-3">Page</h2>
                    <div class="list-group w-100">
                        <a href="dashboard.php?page=berita" class="list-group-item rounded-0 <?php if($page=='berita'){echo 'active';} ?>">Berita</a>
                        <a href="dashboard.php?page=produk" class="list-group-item rounded-0 <?php if($page=='produk'){echo 'active';} ?>">Produk</a>
                    </div>   
                </div>
                <div class="action mt-4">
                    <input type="search" placeholder="Search" name="search" class="search ml-3">
                    <div class="list-group w-100">
                        <a href="#" class="list-group-item rounded-0 active">View</a>
                        <a href="#" class="list-group-item rounded-0 ">Create</a>
                    </div>   
                </div>
            </div>
            <div class="col-md-10 content">
                <?php include("page/".$page.".php"); ?>
            </div>
        </div>
    </div>

    <!-- <div class="pop">
        <div id="pop-up">
            <form class="form-group">
                <label for="id">ID</label>
                <input type="text"
                class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID" readonly>
                <label for="judul_berita">Judul Berita</label>
                <input type="text"
                  class="form-control" name="judul_berita" id="judul_berita" aria-describedby="helpId" placeholder="Judul">
                <label for="tanggal_berita">Tanggal</label>
                <input type="text" class="form-control" name="tanggal_berita" id="tanggal_berita" aria-describedby="helpId" placeholder="Tanggal">
                <label for="isi_berita">Isi Berita</label>
                <input type="text" class="form-control" name="isi_berita" id="isi_berita" aria-describedby="helpId" placeholder="Isi Berita">
                <label for="gambar_berita">Gambar</label>
                <input type="text" class="form-control" name="gambar_berita" id="gambar_berita" aria-describedby="helpId" placeholder="Gambar">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori" aria-describedby="helpId" placeholder="Kategori">
            </form>
        </div>
    </div> -->
    
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form class="form-group">
                        <label for="id">ID</label>
                        <input type="text"
                        class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID" readonly>
                        <label for="judul_berita">Judul Berita</label>
                        <input type="text"
                          class="form-control" name="judul_berita" id="judul_berita" aria-describedby="helpId" placeholder="Judul">
                        <label for="tanggal_berita">Tanggal</label>
                        <input type="text" class="form-control" name="tanggal_berita" id="tanggal_berita" aria-describedby="helpId" placeholder="Tanggal">
                        <label for="isi_berita">Isi Berita</label>
                        <input type="text" class="form-control" name="isi_berita" id="isi_berita" aria-describedby="helpId" placeholder="Isi Berita">
                        <label for="gambar_berita">Gambar</label>
                        <input type="text" class="form-control" name="gambar_berita" id="gambar_berita" aria-describedby="helpId" placeholder="Gambar">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" name="kategori" id="kategori" aria-describedby="helpId" placeholder="Kategori">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript Lib -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7b59756246.js" crossorigin="anonymous"></script>
    <script>
        var table = document.getElementById("tabel");
        var rows = table.rows;
        for (var i = 1; i < rows.length; i++) {
            rows[i].onclick = (function (e) {
                // var rowid = (this.cells[0].innerHTML);
                // var j = 0;
                // var td = e.target;
                // while( (td = td.previousElementSibling) != null ) 
                //     j++;
                // alert(rows[0].cells[j].innerHTML);
                // alert(this.cells[0].innerHTML+", "+this.cells[1].innerHTML+", "+this.cells[2].innerHTML+", ");
                $("#id").val(this.cells[0].innerHTML);
                $("#judul_berita").val(this.cells[1].innerHTML);
                $("#tanggal_berita").val(this.cells[2].innerHTML);
                $("#isi_berita").val(this.cells[3].innerHTML);
                $("#gambar_berita").val(this.cells[4].innerHTML);
                $("#kategori").val(this.cells[5].innerHTML);
            });
        }
    </script>
</body>
</html>