<?php
session_start();

// Foydalanuvchidan login va parolni olish
$enteredLogin = $_POST['login'];
$enteredPassword = $_POST['parol'];

// Bazaga ulanish uchun ma'lumotlar
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_academy";

// Bazaga ulanishni tuzish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

// Foydalanuvchini bazadan tekshirish
$sql = "SELECT * FROM users WHERE login = '$enteredLogin' AND parol = '$enteredPassword'";
$result = $conn->query($sql);

// Foydalanuvchi tekshirish va profilga yo'naltirish
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $row['username']; // Foydalanuvchi sessiyasiga username saqlash
    header('Location: profil.php');
} else {
    echo "Login yoki parol noto'g'ri";
}

// Bazaga ulanishni yopish
$conn->close();
?>
