<link rel="stylesheet" href="css/template-1.css">
<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>PINDAD DALAM BERITA</b></dt></h1>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8" id="beritas">
            <script>
                var select_berita = "select * from berita where kategori='pindad-in-news' ORDER BY tanggal DESC";
                function ajax(x){
                    $("#beritas").load("page/ajax-berita.php", {query:select_berita, hal:x}, function (response, status, request) {
                        this; // dom element
                    });
                }
            </script>
        </div>

        <div class="col-md-4">
            <div class="pb-5">
                <h5><dt><b>RUANG PUBLIK</b></dt></h5>
                <ul class="fa-ul list-aside my-3">
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=news">BERITA</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=press-release">SIARAN PERS</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=pindad-in-news">PINDAD DALAM BERITA</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=majalah">MAJALAH</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=catalog-and-brochures">KATALOG DAN BROSUR</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=gallery">GALLERY</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=video">VIDEO</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    var elemt = document.getElementsByClassName("hide");
    for(var i=0; i < elemt.length; i++){
        elemt[i].innerHTML = elemt[i].getElementsByTagName("p")[0].innerHTML;
    }
</script>