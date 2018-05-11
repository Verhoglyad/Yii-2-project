<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $content
 * @property int $price
 * @property int $old_price
 * @property string $tags
 * @property string $hit
 * @property string $sale
 * @property string $main
 * @property string $main_mid
 * @property string $discount
 * @property string $material
 * @property string $style
 * @property string $brand
 * @property string $dimension
 */
class Product extends \yii\db\ActiveRecord
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
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'content', 'price', 'tags', 'hit', 'sale', 'main', 'main_mid', 'material', 'style', 'brand', 'dimension'], 'required'],
            [['category_id', 'price', 'old_price'], 'integer'],
            [['content', 'hit', 'sale', 'main', 'main_mid'], 'string'],
            [['name', 'tags', 'discount', 'material', 'style', 'brand', 'dimension'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg' ],
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
            'name' => 'Название',
            'content' => 'Описание',
            'price' => 'Цена',
            'old_price' => 'Старая цена',
            'tags' => 'Тэги',
            'image' => 'Главное изображение (PNG | JPG)',
            'gallery' => 'Фото в галерею (PNG | JPG)',
            'hit' => 'Популярные',
            'sale' => 'Скидка',
            'main' => 'Акционый',
            'main_mid' => 'Главный',
            'discount' => 'Скидка',
            'material' => 'Материал',
            'style' => 'Стиль',
            'brand' => 'Брэнд',
            'dimension' => 'Размеры',
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
