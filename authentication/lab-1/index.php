<?php 
require '../../connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Coding</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" rel="stylesheet" type="text/css">
    <style>
        button {
            background-color: #006699 !important;
            color: white !important;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>

</head>

<body>

    <div class="container">
        <aside class="sidebar">
            <p>Pada studi kasus berikut dimana peretas dapat melakukan
                serangan brute force atau credential stuffing pada halaman login</p>

        </aside>

        <div class="main-content">
            <div class="filter">
                <a href="<?php echo $host; ?>/authentication/"><button type="button" class="btn btn-outline-primary">Back</button></a>
            </div>

            <div class="login-container">
                <?php

                if (isset($_SESSION['error_message'])) {
                    echo "<div style='color: red;margin-top: 10px'>" . $_SESSION['error_message'] . "</div > ";
                    unset($_SESSION['error_message']);
                }
                ?>
                <h2>Login</h2>
                <form action="<?php echo $host; ?>/authentication/lab-1/actLogin.php" method="POST">
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block" id="tes_btn">Login</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>