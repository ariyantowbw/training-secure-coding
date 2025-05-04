<?php include 'getData.php'; ?>
<html>

<head>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="../../assets/js/bootstrap.js"></script>
</head>

<body>
<div class="container">
    <aside class="sidebar">

        <b>Profile</b>
        <p>Pada studi kasus berikut penyerang dapat melihat informasi dari akun pengguna lain</p>


    </aside>
    <div class="main-content">
        <div class="filter">
            <span>Profile</span>
        </div>

        <div>
            <form>
                <div class="mb-3">
                    <label class="form-label">Username: <?php echo $row['username']; ?></label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email: <?php echo $row['email']; ?></label>
                </div>

               <a href="<?php echo $host; ?>/idor"><button type="button" class="btn btn-outline-primary">Back</button></a>
            </form>

        </div>


    </div>
</div>
</body>

</html>