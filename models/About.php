<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03.04.2018
 * Time: 15:41
 */

namespace app\models;


use yii\db\ActiveRecord;

class About extends ActiveRecord{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName(){
        return 'about';
    }

}