<?php
require_once('koneksi.php'); // Sertakan file koneksi ke database di sini
require_once('fungsi_hills_chipper'); // Sertakan file fungsi Hill Cipher

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $key = [[2, 1], [3, 4]];

    // Ambil kata sandi terenkripsi dari database berdasarkan username
    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $encrypted_password = $row['password'];

        // Implementasi dekripsi menggunakan Hill Cipher
        $decrypted_password = hill_cipher($encrypted_password, $key, "decrypt");

        // Menghapus 'X' di akhir kata sandi jika ada
        $decrypted_password = rtrim($decrypted_password, 'X');

        if (strcasecmp($password, $decrypted_password) == 0) {
            // Kata sandi cocok, pengguna berhasil login
            echo "Login successful!";
        } else {
            // Kata sandi salah, tampilkan pesan kesalahan
            echo "Login failed. Incorrect password.";
        }
    } else {
        // Username tidak ditemukan, tampilkan pesan kesalahan
        echo "Login failed. User not found.";
    }
}

$conn->close();