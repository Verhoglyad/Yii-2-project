<?php
/**
 * Created by PhpStorm.
 * User: uglyd
 * Date: 17.03.2018
 * Time: 12:54
 */

namespace app\models;


use yii\db\ActiveRecord;

class Portfolio extends ActiveRecord {
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName(){
        return 'portfolio';
    }

}