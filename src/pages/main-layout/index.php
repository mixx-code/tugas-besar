<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/brands.css">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/solid.css">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/regular.css">
    <link rel="stylesheet" href="main-layout.css">
    <link rel="shortcut icon" href="../../../assets/icon/otaku.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- <div class="kotak1">
            <div class="switch">
                
                <a href="?page=home" class="link-login">home</a>
                <a href="?page=registrasi" class="link-registrasi">Registrasi</a>
            </div>
        </div> -->
        <nav>
            <div class="drop-down">
                <i class="fa-solid fa-bars fa-xl drop-btn"></i>
                <i class="fa-solid fa-x fa-xl x-btn"></i>
                <div class="drop-down-content">
                    <a href="#">link 1</a>
                    <a href="#">link 2</a>
                    <a href="#">link 3</a>
                </div>
            </div>
        </nav>
        <div class="kotak2">
            <?php
                @$page = $_GET['page'];
                if (!empty($page)) {
                    switch ($page) {
                        case 'home':
                            include '../home/home.php';
                            break;
                        default:
                            include '../home/home.php';
                            break;
                    }
                }else {
                    include '../home/home.php';
                }
                


            ?>
        </div>

    </div>
    <script src="script.js"></script>
</body>
</html>