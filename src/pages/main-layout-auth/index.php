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
    <link rel="stylesheet" href="main-layout-auth.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="kotak1">
            <div class="switch">
                
                <a href="?page=login" class="link-login">Login</a>
                <a href="?page=registrasi" class="link-registrasi">Registrasi</a>
            </div>
        </div>
        <div class="kotak2">
            <?php
                @$page = $_GET['page'];
                if (!empty($page)) {
                    switch ($page) {
                        case 'login':
                            include '../login/login.php';
                            break;
                        case 'registrasi':
                            include '../registrasi/registrasi.php';
                            break;
                        
                        default:
                            include '../login/login.php';
                            break;
                    }
                }else {
                    include '../registrasi/registrasi.php';
                }
                


            ?>
        </div>

    </div>
    <script src="script.js"></script>
</body>
</html>