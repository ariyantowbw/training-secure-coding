<?php include 'getProduct.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<style>
    button {
        background-color: #006699 !important;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<body>

    <div class="container">
        <aside class="sidebar">
            <p>Peretas dapat mengiputkan payload pada kode pemanggilan gambar untuk melakukan directory traversal</p>

        </aside>

        <div class="main-content">
            <div class="filter">
                <?php
                echo '<a href="' . $host . '/lfi"><button >Back</button></a>';
                ?>

            </div>

            <div class="product-grid">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <div class="product">
                            <img src="<?php echo $host . '/lfi/lab-1/getFile.php?file=' . $row['thumbnail']; ?>">
                            <h4><?php echo $row['name']; ?> </h4>
                            <h6>Kategori: <?php echo $row['name']; ?> </h6>
                            <p class="price">Rp.<?php echo $row['price']; ?></p>
                            <button>View details</button>
                        </div>
                <?php }
                } else {
                    echo "Tidak ada produk yang ditemukan.";
                }
                ?>

            </div>

        </div>
    </div>

</body>

</html>