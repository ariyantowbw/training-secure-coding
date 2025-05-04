<?php include "../../connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Coding</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
    <aside class="sidebar">
        <p>Peretas dapat mengiputkan payload pada kode pemanggilan kategori untuk melakukan directory traversal</p>
    </aside>

    <div class="main-content">
        <div class="filter">
            <span>Kategori:</span>
            <a href="<?php echo $host . '/lfi/lab-2/'; ?>">
                <button>Semua</button>
            </a>
            <a href="?category=profile">
                <button>Profile</button>
            </a>
            <a href="?category=faq">
                <button>FAQ</button>
            </a>
            |
            <a href="<?php echo $host; ?>/lfi">
                <button>Back</button>
            </a>
        </div>

        <?php
        $category = $_GET['category'] ?? "home.php";
        switch ($category) {
            case 'profile':
                include("profile.php");
                break;

            case 'faq':
                include("faq.php");
                break;
            default:
                include($category);
        }
        ?>


    </div>
</div>

</body>
</html>
