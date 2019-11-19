<?php
namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController{

    public function actionIndex($id = null){

        $hits = Product::find()->where(['hit'=>'1'])->limit(6)->all();
//        return debug($hits);
        return $this->render('index', compact('hits'));
        
    }
}

?>