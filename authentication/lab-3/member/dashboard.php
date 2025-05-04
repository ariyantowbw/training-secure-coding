<?php include "../../../connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Coding | Authentication</title>
    <link rel="stylesheet" href="<?php echo $host;?>/admin/assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="verication.js"></script>
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
<body onload="checkVerification()">

<div class="container">
    <aside class="sidebar">
        <p>Halaman Dashboard</p>

    </aside>

    <div class="main-content">
        <div class="filter">
            <a href="<?php echo $host;?>/authentication/" ><button type="button" class="btn btn-outline-primary">Back</button></a>
        </div>

        <div class="login-container">
           Pada studi kasus ini peretas dapat mengakses halaman admin tanpa melalui proses otentikasi yang valid
        </div>
    </div>
</div>

</body>
</html>
