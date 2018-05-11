<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03.04.2018
 * Time: 13:58
 */

namespace app\controllers;


use app\models\About;
use yii\web\Controller;

class AboutController extends Controller {
    public function actionUs(){
        $team = About::find()->all();
        $team_designer = About::find()->where(['category' => 'designer'])->all();
        $team_director = About::find()->where(['category' => 'director'])->all();
        return $this->render('us', compact('team_designer', 'team_director', 'team'));
    }

    public function actionService(){
        return $this->render('service');
    }
}