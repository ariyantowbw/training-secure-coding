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

        <b>Update profile</b>
        <p>Pada studi kasus berikut penyerang dapat mengubah password dari akun pengguna lain</p>


    </aside>
    <div class="main-content">
        <?php echo $message; ?>
        <div class="filter">
            <span>Profile</span>
        </div>

        <div>
            <form>
                <div class="mb-3">
                    <label class="form-label">Email: <?php echo $email; ?></label>
                </div>

                <a href="<?php echo $host . '/idor/lab-2/edit.php'; ?>">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a> | <a href="<?php echo $host; ?>/idor"><button type="button" class="btn btn-outline-primary">Back</button></a>
            </form>

        </div>


    </div>
</div>
</body>

</html>