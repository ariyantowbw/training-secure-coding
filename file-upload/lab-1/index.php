<?php include 'getProfile.php'; ?>
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
            <p>Pada studi kasus berikut peretas dapat mengupload file apapun ke server</p>


        </aside>

        <div class="main-content">
            <?php echo $message; ?>
            <div class="filter">
                <span>Profile</span>
            </div>

            <div>

                <form>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Avatar:</label>
                        <img src="<?php echo $host . "/assets/gallery/" . $avatar; ?>" alt="" width="30%">
                    </div>
                    <a href="<?php echo $host . '/file-upload/lab-1/edit.php'; ?>">
                        <button type="button" class="btn btn-primary">Edit</button>
                    </a> | <a href="<?php echo $host; ?>/file-upload/"><button type="button" class="btn btn-outline-primary">Back</button></a>
                </form>

            </div>


        </div>
    </div>

</body>

</html>