<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03.04.2018
 * Time: 14:25
 */

namespace app\controllers;


use yii\web\Controller;

class ContactController extends Controller{
    public function actionIndex(){
        return $this->render('index');
    }
}