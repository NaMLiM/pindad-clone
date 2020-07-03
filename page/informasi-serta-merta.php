<link rel="stylesheet" href="css/template-1.css">
<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>INFORMASI SERTA MERTA</b></dt></h1>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8" id="beritas">
            <script>
                var select_berita = "select * from berita where kategori='informasi-serta-merta' ORDER BY tanggal DESC";
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
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=regulasi-keterbukaan-informasi-publik">REGULASI KETERBUKAAN INFORMASI PUBLIK</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=informasi-berkala">INFORMASI BERKALA </a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=informasi-serta-merta">INFORMASI SERTA MERTA</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=informasi-setiap-saat">INFORMASI SETIAP SAAT</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=prosedur-permohonan-informasi">PROSEDUR PERMOHONAN INFORMASI</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=prosedur-pengajuan-keberatan">PROSEDUR PENGAJUAN KEBERATAN</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=prosedur-penyelesaian-sengketa-informasi">PROSEDUR PENYELESAIAN SENGKETA INFORMASI</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=laporan-layanan-informasi-publik">LAPORAN LAYANAN INFORMASI PUBLIK</a></li>
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