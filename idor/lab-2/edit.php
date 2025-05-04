<?php
include 'getData.php';
?>
<html>

<head>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="../../assets/js/bootstrap.js"></script>
</head>

<body>
<div class="container">
    <aside class="sidebar">
        <b>Update profile</b>
        <p>Pada studi kasus berikut penyerang dapat mengubah password dari akun pengguna lain</p>

    </aside>

    <div class="main-content">
        <div class="filter">
            <span>Profile</span>
        </div>

        <div>

            <form action="update.php?id=<?php echo $userID;?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" value="<?php echo $email; ?>"disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button> | <a href="<?php echo $host; ?>/idor/lab-2"><button type="button" class="btn btn-outline-primary">Back</button></a>
            </form>

        </div>


    </div>
</div>
</body>

</html>