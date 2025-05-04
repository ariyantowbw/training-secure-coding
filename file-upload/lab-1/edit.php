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
            <p>Upload file dengan extension apapun</p>

        </aside>

        <div class="main-content">
            <div class="filter">
                <span>Profile</span>
            </div>

            <div>
                <form action="<?php echo $host; ?>/file-upload/lab-1/updateProfile.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Avatar</label>
                        <input class="form-control" type="file" id="formFile" name="avatar">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button> | <a href="<?php echo $host; ?>/file-upload/"><button type="button" class="btn btn-outline-primary">Back</button></a>
                </form>

            </div>


        </div>
    </div>

</body>

</html>