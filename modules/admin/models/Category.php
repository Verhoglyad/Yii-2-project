<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category_product".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $description
 */
class Category extends \yii\db\ActiveRecord
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
        return 'category_product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'name', 'description'], 'required'],
            [['parent_id'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg' ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Родительская категория',
            'name' => 'Название',
            'image' => 'Фото',
            'description' => 'Описание категории',
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
