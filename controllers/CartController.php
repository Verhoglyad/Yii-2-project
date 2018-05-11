<?php

namespace app\controllers;


use yii\web\Controller;
use app\models\Product;
use app\models\Cart;
use Yii;

class CartController extends Controller
{
    public function  actionView(){
        $session = Yii::$app->session;
        $session->open();
        return $this->render('view', compact('session'));
    }
    public function actionAdd(){
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $qty = $qty == 0 ? 1 : $qty;
        $product = Product::findOne($id);
        if (empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product, $qty);
        return $this->renderPartial('cart-modal', compact('session'));
    }

    public function  actionClear(){
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        Yii::$app->session->setFlash('success', "Корзина очищена");

        return $this->renderPartial('cart-modal', compact('session'));
    }

    public function actionDelItem(){
        $id = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);
        return $this->renderPartial('cart-modal', compact('session'));
    }

    public  function actionShow(){
        $session = Yii::$app->session;
        $session->open();
        return $this->renderPartial('cart-modal', compact('session'));
    }

    public function actionChangeQtyCart(){
        $id = (int)Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $qty = $qty == 0 ? 1 : $qty;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->changeQty($id, $qty);
        return $this->renderPartial('cart-modal', compact('session'));
    }

    public function actionSend(){

        Yii::$app->session->setFlash('success', "Заказ принят, наш менеджер скоро вам перезвонит");

        $name = Yii::$app->request->get('name');
        $phone = Yii::$app->request->get('phone');
        $comment = Yii::$app->request->get('comment');
        $email = Yii::$app->request->get('email');

        $session = Yii::$app->session;
        $session->open();

//        Client
//        Yii::$app->mailer->compose('thanks', compact('session'))
//            ->setFrom(['asdasd@gmail.com' => 'name Store'])
//            ->setTo($email)
//            ->setSubject('Спасибо за заказ')
//            ->send();

//        Admin
        Yii::$app->mailer->compose('oder', compact('session', 'name', 'phone', 'comment', 'email'))
            ->setFrom(['111@gmail.com' => 'name Store'])
            ->setTo('111@gmail.com')
            ->setSubject('Заказ')
            ->send();


        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');

        return $this->renderPartial('cart-modal', compact('session'));
    }

}