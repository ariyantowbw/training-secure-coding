<?php include "getData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Coding</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" type="text/css">
    <style>
        button {
            background-color: #006699 !important;
            color: white !important;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .saldo-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            width: 300px;
        }

        .saldo-card h2 {
            font-size: 1.8rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .saldo-amount {
            font-size: 2rem;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 10px;
        }

        .saldo-info {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
        }

        .withdraw-button {
            background-color: #28a745;
            color: white;
            font-size: 1.2rem;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .withdraw-button:hover {
            background-color: #218838;
        }

        .withdraw-button:active {
            background-color: #1e7e34;
        }
    </style>

    <script>
        function withdrawl() {
            // Get the saldo amount from the page
            var saldoAmount = document.querySelector('.saldo-amount').textContent.trim();

            // Debug the response using console.log

            // Send the saldo to the withdrawl.php via AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "lab-1/withdrawl.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Parse the response JSON
                    var response = JSON.parse(xhr.responseText);

                    // Debug the response using console.log
                    console.log("Response from withdrawl.php:", response);

                    if (response.status === 'success') {

                        // If the response indicates success, redirect to history.php
                        window.location.href = "lab-1/history.php";
                    } else {
                        // If there was an error, show an alert with the message
                        alert('Error: ' + response.message);
                    }
                } else {
                    alert('An error occurred: ' + xhr.status);
                }
            };

            // Send the saldo amount as a parameter to withdrawl.php
            xhr.send("saldo=" + encodeURIComponent(saldoAmount));
        }
    </script>
</head>

<body>

    <div class="container">
        <aside class="sidebar">
            <p>Pada studi kasus berikut peretas dapat mengupload file apapun ke server</p>
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
                <h2>Saldo Anda</h2>
                <p class="saldo-amount">Rp <?php echo $data['saldo']; ?></p>
                <p class="saldo-info">Saldo ini dapat Anda tarik kapan saja.</p>
                <button class="btn border-primary withdraw-button" type="button" onclick="withdrawl()">Ambil Saldo</button>
                |
                <a href="/idor/">
                    <button class="btn border-primary">Back</button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>