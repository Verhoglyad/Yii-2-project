<?php
/**
 * Created by PhpStorm.
 * User: uglyd
 * Date: 17.03.2018
 * Time: 13:21
 */

namespace app\controllers;

use rico\yii2images\models\Image;
use yii\web\Controller;
use app\models\Portfolio;
use Yii;

class PortfolioController extends Controller{
    public function actionIndex(){
        $portfolios = Portfolio::find()->all();
        return $this->render('index', compact('portfolios'));
    }
    public function actionSingle(){
        $id =  Yii::$app->request->get('id');
        $portfolio = Portfolio::findOne($id);
        return $this->render('single', compact('portfolio'));
    }

    public function actionGallery(){
        $id = Yii::$app->request->get('id');
        $num = Yii::$app->request->get('num');
//        $images_gallery = Image::find()->where(['itemid' => $id]);
        $portfolio = Portfolio::findOne($id);
//        return $this->renderPartial('gallery', compact('images_gallery'));
        return $this->renderPartial('gallery', compact('portfolio', 'num'));
    }
}