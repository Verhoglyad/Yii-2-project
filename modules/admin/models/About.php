<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $name
 * @property string $position
 * @property string $text
 * @property string $category
 */
class About extends \yii\db\ActiveRecord
{

    public $image;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]

        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'position', 'text', 'category'], 'required'],
            [['text'], 'string'],
            [['name', 'position', 'category'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'position' => 'Должность',
            'image' => 'Изображение',
            'text' => 'Описание',
            'category' => 'Категория',
        ];
    }

    public function upload(){
        if ($this->validate()){
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            unlink($path);
            return true;
        }else{
            return false;
        }
    }
}
