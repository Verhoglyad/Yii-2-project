<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04.04.2018
 * Time: 14:01
 */

namespace app\controllers;


use app\models\Brand;
use app\models\Category;
use app\models\Product;
use yii\data\Pagination;
use yii\web\Controller;

class ShopController extends Controller
{
    public function actionIndex(){
        $category = Category::find()->where(['parent_id' => '0'])->all();
        $products = Product::find()->limit(8)->all();
        $hits = Product::find()->where(['hit' => '1'])->limit(3)->all();
        $sale = Product::find()->where(['sale' => '1'])->limit(3)->all();
        $main = Product::findOne(['main' => '1']);
        $main_mid = Product::findOne(['main_mid' => '1']);
        $brand = Brand::find()->all();
        $session = \Yii::$app->session;
        $session->open();
        return $this->render('index', compact('category', 'products', 'hits', 'sale', 'session', 'main', 'main_mid', 'brand'));
    }

    public function actionList($id, $all = 0){
        if ($all == 1){
            $parent_id = Category::find()->where(['parent_id' => $id])->all();
            $param = [];
            foreach ($parent_id as $p){
                array_push($param, $p->id);
            }

            $query = Product::find()->where(['category_id' => $param]);

        }else{

            $query = Product::find()->where(['category_id' => $id]);
        }

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' =>12, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne($id);
        $sale = Product::find()->where(['sale' => '1'])->limit(6)->all();
        $session = \Yii::$app->session;
        $session->open();
        \Yii::$app->view->params['cart_count'] = $session['cart.qty'] ;
        return $this->render('list', compact('category', 'products', 'pages', 'sale', 'session'));
    }

    public function actionSearch(){
        $q = trim( \Yii::$app->request->get('q') );
        $this->view->title = 'Поиск | ' . $q;
//        if (!$q){
//            return $this->render('search');
//        }
        $query = Product::find()->where(['like', 'name', $q])->orWhere(['like', 'tags', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' =>12, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $sale = Product::find()->where(['sale' => '1'])->limit(6)->all();
        $session = \Yii::$app->session;
        $session->open();
        return $this->render('search', compact('products', 'pages', 'q', 'sale', 'session'));
    }

    public function actionDetail(){
        $id =  \Yii::$app->request->get('id');
        $item = Product::findOne($id);
        $category = Category::find()->where(['parent_id' => $item->category->parent->id])->all();
        $param = [];
        foreach ($category as $c){
            array_push($param, $c->id);
        }
        $products = Product::find()->where(['category_id' => $param])->limit(6)->all();

        $session = \Yii::$app->session;
        $session->open();
        return $this->render('detail', compact('item', 'products', 'session'));
    }

    public function actionFilter($all = 0){
        $id = (int)\Yii::$app->request->get('id');
        $from = (int)\Yii::$app->request->get('from');
        $to =(int) \Yii::$app->request->get('to');

        if ($all == 1){
            $parent_id = Category::find()->where(['parent_id' => $id])->all();
            $param = [];
            foreach ($parent_id as $p){
                array_push($param, $p->id);
            }
            $products = Product::find()->where(['between','price', $from, $to])->andWhere(['category_id' => $param])->all();

        }else{

            $products = Product::find()->where(['between','price', $from, $to])->andWhere(['category_id' => $id])->all();
        }


        $session = \Yii::$app->session;
        $session->open();
        return $this->renderPartial('filter', compact('products', 'session'));

//        $query = Product::find()->where(['between','price', $from, $to])->all();
//        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' =>9, 'forcePageParam' => false, 'pageSizeParam' => false]);
//        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
//        return $this->renderPartial('filter', compact('products', 'pages'));


    }
}