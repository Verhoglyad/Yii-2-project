<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $category_id
 * @property string $title
 * @property string $text
 * @property string $img
 * @property string $client
 * @property string $date
 */
class Portfolio extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;

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
        return 'portfolio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'client', 'date', 'text', 'review'], 'required'],
            [['text'], 'string'],
            [['review'], 'string'],
            [['category_id', 'title', 'client', 'date'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 20,],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'image' => 'Главное изображение (PNG | JPG)',
            'gallery' => 'Фото в галерею (PNG | JPG)',
            'client' => 'Клиент',
            'review' => 'Отзыв',
            'date' => 'Дата',
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

    public function uploadGallery(){
        if ($this->validate()){
            foreach ($this->gallery as $file){
                $path = 'upload/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                unlink($path);
            }
            return true;
        }else{
            return false;
        }
    }

}
