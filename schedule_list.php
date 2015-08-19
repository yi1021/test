<?php 
$filename = "C:\\xampp\htdocs\schedule\sample.txt"; 
$schedule_list = file($filename); 

foreach ($schedule_list as $line) { 
    list($schedule_date, $title, $body) = explode("|", $line); 
    print("日付：$schedule_date タイトル：$title 内容：$body <br>"); 
} 
?>