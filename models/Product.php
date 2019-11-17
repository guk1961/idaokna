<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class Product extends ActiveRecord{

    public static function tableName()
    {
        return 'product';
    }
    public function getCategory(){
        return $this->hasOne(Category::ClassName(),['id'=>'category_id']);
    }

}
