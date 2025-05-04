<?php include 'getProfile.php'; ?>
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
            <p>Pada studi kasus berikut terdapat kerentanan XSS</p>
            <p>Adapun payload yang digunakan adalah:</p>
            <ul>
                <li>&lt;script&gt;alert('test');&lt;/script&gt;</li>
                <li>&lt;script&gt;alert(document.cookie);&lt;/script&gt;</li>
            </ul>


        </aside>
        <div class="main-content">
            <?php echo $message; ?>
            <div class="filter">
                <span>Profile</span>
            </div>

            <div>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Fullname: <?php echo $fullname; ?></label>
                    </div>

                    <a href="<?php echo $host . '/xss/lab-1/edit.php'; ?>">
                        <button type="button" class="btn btn-primary">Edit</button>
                    </a> | <a href="<?php echo $host; ?>/xss"><button type="button" class="btn btn-outline-primary">Back</button></a>
                </form>

            </div>


        </div>
    </div>
</body>

</html>