<?php
$furit = $_POST['furit'];
$width = $_POST['width'];
$kg = $_POST['kg'];
if($furit == 'orange'){
    echo ' <img src="image/or.jpg" alt="" width="' .$width.'px"><br>';
    echo "ราคาต่อกิโลกรัม 100 บาท : kg<br>จำนวนกิโล : ".$kg."<br>ราคารวม : " . (100*$kg);
}
else if($furit == 'apple'){
    echo ' <img src="image/ap.jpg" alt="" width=">' .$width.'px"><br>';
    echo "ราคาต่อกิโลกรัม 200 บาท : kg<br>จำนวนกิโล : ".$kg."<br>ราคารวม : " . (200*$kg);

}
else if($furit == 'banana'){
    echo ' <img src="image/ba.jpg" alt="" width=">' .$width.'px"><br>';
    echo "ราคาต่อกิโลกรัม 300 บาท : kg<br>จำนวนกิโล : ".$kg."<br>ราคารวม : " . (300*$kg);

}
echo '<br><a href="form.php">กลับไปที่หน้าหลัก</a>';
?>