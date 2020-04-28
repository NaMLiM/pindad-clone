<?php
    include "system/connection.php";
    session_start();

    if(!$_SESSION["nama_admin"]){
        header("location:login.php");
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
                    <h2 class="text-light">Page</h2>
                    <div class="list-group w-100">
                        <a href="#" class="list-group-item rounded-0 active">Berita</a>
                        <a href="#" class="list-group-item rounded-0 ">Produk</a>
                    </div>   
                </div>
                <div class="action mt-4">
                    <input type="search" placeholder="Search" name="search" class="search">
                    <div class="list-group w-100">
                        <a href="#" class="list-group-item rounded-0 active">View</a>
                        <a href="#" class="list-group-item rounded-0 ">Create</a>
                    </div>   
                </div>
            </div>
            <div class="col-md-10 content">
                <table class="table">
                    <th style="background-color: orange; text-align: center;">Berita</th>
                    <tr><td>Test</td></tr>
                    <tr><td>Test</td></tr>
                    <tr><td>Test</td></tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Javascript Lib -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7b59756246.js" crossorigin="anonymous"></script>
    <script>
        $(".page-btn").click(function(){
            $(".page-btn").toggleClass("active");
        });
    </script>
</body>
</html>