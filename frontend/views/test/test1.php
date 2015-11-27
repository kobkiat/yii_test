ทดสอบ 1 <br>

<?php
echo $sum; //ดึงข้อมูลมาจาก Testcontroller.php
?>

<hr>
<?php
echo "$a+$b=$sum"; //รับค่ามาจาก param ไฟล์ test1.php
?>

<hr>
array
<hr>

<?php
$data1 = [1,2,3]; //ประกาศ array php5.4
print_r($data1);
echo '<hr>';
$data2 = array (1,2,3,4); //ประกาศ array php5.3
print_r($data2);
?>