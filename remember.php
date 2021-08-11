<?php
require 'connect.php';
$connect = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($connect,"utf8");
$sql = "SELECT * FROM comments";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    $counter = 0;
    $style = "color_black";
    while($row = mysqli_fetch_assoc($result)) {
        $counter ++;
        if ($style == "color_green") {
            $style = "color_black";
        } 
        else {
            $style = "color_green";
        }
        if($counter == 1) {
            echo '<div class="row">';
            echo '<div class="col-md-4">';
        } 
        else {
            echo '<div class="col-md-4">';
            
        }
        echo '<div class="col-sm-12 top-buffer">';
        echo '<div class="row name-' . $style . '">';
        echo '<p class="text-center" style="margin: 0 auto;">' . $row["name"] . '</p>';
        echo '</div>';
        echo '<div class="row email-' . $style . '">';
        echo '<p class="text-center" style="margin: 0 auto;">' . $row["email"] . '</p>';
        echo '</div>';
        echo '<div class="row com-' . $style . '">';
        echo '<p class="text-center" style="margin: 0 auto;">' . $row["comment"] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        if($counter == 3) {
            echo '</div>';
            $counter = 0;
        } 
    }
} 
else {
    echo "Комментарии отсутствуют";
}
mysqli_close($connect);
?>