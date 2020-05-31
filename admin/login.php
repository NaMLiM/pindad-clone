<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PT. Pindad (Persero) - Home</title>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/login.css">
        <!--JQuery and Bootstrap lib-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="btns-login">
                    <button class="btn-login on">login</button><br>
                    <button class="btn-login">hubungi developer</button>
                </div>
                <h1 class="mb-0 welcome">Welcome to</h1>
                <h1 class="font-weight-bold text-white">pindadAdmin</h1>
                <p class="text-white">pindadAdmin adalah halaman untuk mengatur dan mengelola database pada halaman pindad.com</p>
                <a href="#" class="btn btn-success rounded-pill">visit pindad.com</a>
            </div>
            <div class="col-md-4 col-sm-12" id="content">
                
            </div>
        </div>
    </div>

    <div id="content-login" style="display: none;">
        <img src="img/logo.svg" alt="">
        <h1 class="text-primary text-left">login</h1>
        <form class="form-row justify-content-center" action="system/login-proses.php" method="POST">
            <input type="text" name="username" class="form-control my-2" placeholder="username">
            <input type="password" name="password" class="form-control my-2 " placeholder="password">
            <input type="submit" value="login" class="form-control btn btn-primary my-2">
        </form>
    </div>
    <div id="content-hubungi" style="display: none;">
        <img src="img/logo.svg" alt="">
        <h1 class="text-primary text-left">keluhan</h1>
        <form class="form-row justify-content-center" action="system/login-proses.php" method="POST">
            <input type="text" name="nama" class="form-control my-2" placeholder="nama">
            <input type="email" name="email" class="form-control my-2" placeholder="email">
            <input type="tel" name="notlp" class="form-control my-2" placeholder="telepon">
            <textarea name="pesan" class="form-control my-2" placeholder="pesan" style="height: 8rem; resize: none;"></textarea>
            <input type="submit" value="kirim" class="form-control btn btn-primary my-2">
        </form>
    </div>

    
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7b59756246.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>

        <script>
        $(document).ready(function () {
            $("#content").html($("#content-login").html());

            $(".btn-login").click(function (e) { 
                if(!$(this).hasClass("on")){
                    $(".btn-login").toggleClass("on");
                    if($("#content").html() == $("#content-login").html()){
                        $("#content").html($("#content-hubungi").html());
                    }
                    else{
                        $("#content").html($("#content-login").html());
                    }
                }
                e.preventDefault();
            });
        });


    </script>
    </body>
</html>