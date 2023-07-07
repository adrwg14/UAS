<?php
session_start();

// Hapus semua variabel session
session_unset();

// Hancurkan sesi
session_destroy();

// Alihkan pengguna ke halaman lain setelah logout, misalnya halaman login
header("Location: login.php");
exit();
