<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index'); //ส่งไปยัง index.php
    }

    public function actionTest1() {
        $a = 3;
        $b = 5;
        $sum = $a + $b; //ส่วนประมาลผล

        $param = ['sum' => $sum, 'a' => $a, 'b' => $b];

        return $this->render('test1', /* ['sum' => $sum], */ $param); //ส่งไปยัง test1.php
    }

//จบ test1

    public function actionTest2($name=null,$lname=null) {
        
        $info = "Your name is $name $lname";
        return $this->render('test2',['info'=>$info]);
    }
}