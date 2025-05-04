<?php include "getDataHistory.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Coding</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" type="text/css">
</head>

<body>

<div class="container">
    <aside class="sidebar">
        <p>History Penarikan Saldo</p>
    </aside>
    <div class="main-content">
        <div class="filter">
            <a href="<?php echo $host;?>/idor/lab-1">
                <button>Saldo</button>
            </a>
            <a href="<?php echo $host;?>/idor/lab-1/history.php">
                <button>History</button>
            </a>
            |
            <a href="<?php echo $host;?>/idor">
                <button>Back</button>
            </a>
        </div>
        <div class="saldo-card">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Saldo</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <?php

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        $status = "";
                        if ($row['status'] == 1) {
                            $status = "Diproses";
                        } elseif ($row['status'] == 2) {
                            $status = "Berhasil";
                        }

                        echo "<tr>
                            <td>" . $row['saldo'] . "</td>
                            <td>" . $status . "</td>
                          </tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Tidak ada data</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>

</html>
