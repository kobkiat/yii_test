<?php
use yii\helpers\Html; //เรียกใช้ตัวช่วยจากโฟลเดอร์ html
/* @var $this yii\web\View */
$this->title = 'INDED KMITL';
?>

<?php
$route1 = Yii::$app->urlManager->createUrl('test/test1');
?>
<a href="<?= $route1 ?>">ไปที่ test1</a>
<br>
<?php
$route2 = Yii::$app->urlManager->createUrl(['test/test2', 'name' => 'kobkiat', 'lname' => 'Chinpark']); //ส่งค่าจาก view ไปยัง controller ละส่งไปยัง action
?>
<a href="<?= $route2 ?>">ไปที่ test2</a>
<br>

<?=
Html::a('ลิ้งค์แบบที่ 3 ใช้ yii', ['test/test1', /*'a' => '1'*/]);
?>

