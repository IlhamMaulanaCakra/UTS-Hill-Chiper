<?php
require_once('db_connect.php'); // Sertakan file koneksi ke database di sini
require_once('hill_cipher_functions.php'); // Sertakan file fungsi Hill Cipher

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $key = [[2, 1], [3, 4]];

    // Implementasi enkripsi menggunakan Hill Cipher
    $encrypted_password = hill_cipher($password, $key, "encrypt");
    // Implementasi dekripsi menggunakan Hill Cipher
    $decrypted_password = hill_cipher($encrypted_password, $key, "decrypt");

    // Simpan username, password terenkripsi, dan password terdekripsi ke database
    $sql = "INSERT INTO users (username, password, dekripsi) VALUES ('$username', '$encrypted_password', '$decrypted_password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman login setelah berhasil mendaftar
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();