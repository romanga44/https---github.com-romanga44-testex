<?php
require 'connect.php';
$connect = mysqli_connect($servername, $username, $password, $dbname);
$name = input($_POST['name']);
$email = input($_POST['email']);
$comment = input($_POST['comment']);
mysqli_set_charset($connect,"utf8");
$sql = "INSERT INTO comments (name, email, comment)
VALUES ('$name', '$email', '$comment')";
if (mysqli_query($connect, $sql)) {
    echo "Запись в БД успешна создана!";
} else {
    echo "У васошибка при отправке запроса в БД: " . $sql . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>