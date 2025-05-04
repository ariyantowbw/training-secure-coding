<?php
require '../../vendor/autoload.php'; // Autoload Composer

// Koneksi ke MongoDB
$client = new MongoDB\Client("mongodb://localhost:27017");
$database = $client->selectDatabase('secure_coding');
$collection = $database->selectCollection('users');

// Ambil data JSON dari input
$data = json_decode(file_get_contents("php://input"), true);

// Ambil email dan password dari data yang di-decode
$email = $data['email'] ?? null; // Menggunakan null coalescing operator
$password = $data['password'] ?? null;

if ($email && $password) {
    // Query rentan terhadap NoSQL injection, query dibangun langsung dengan input pengguna
    $user = $collection->findOne([
        'email' => $email,
        'password' => $password // Rentan terhadap NoSQL Injection
    ]);

    // Memeriksa apakah pengguna ditemukan
    if ($user) {
        echo json_encode(["message" => "Login berhasil!"]);
    } else {
        // Jika pengguna tidak ditemukan, cek apakah hanya password yang salah
        $userByEmail = $collection->findOne([
            'email' => $email
        ]);

        if ($userByEmail) {
            // Jika email ditemukan, berarti password yang salah
            echo json_encode(["message" => "Password tidak ditemukan!"]);
        } else {
            // Jika email tidak ditemukan
            echo json_encode(["message" => "Email dan password tidak ditemukan!"]);
        }
    }
} else {
    echo json_encode(["message" => "Email dan password tidak boleh kosong!"]);
}
?>
