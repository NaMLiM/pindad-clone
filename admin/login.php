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
        <div class="container-fluid d-flex h-100 bg-cont">
            <div class="cont justify-content-center align-self-center p-4">
                <img src="img/logo_gray.png" class="img-fluid" alt="">
                <form class="form-group" action="system/login-proses.php" method="POST">
                  <input type="text" class="form-control my-3" name="username" id="" aria-describedby="helpId" placeholder="Username" required>
                  <input type="password" class="form-control my-3" name="password" id="" aria-describedby="helpId" placeholder="Password" required>

                  <input type="submit" value="Login" name="submit" class="form-control btn-primary">
                </form>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7b59756246.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
    </body>
</html>