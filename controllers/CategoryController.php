<?php
namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController{

    public function actionIndex($id = null){

        $hits = Product::find()->where(['hit'=>'1'])->limit(6)->all();
        return $this->render('index', compact('hits'));        
    }
    public function actionView($id){

        $hits = Product::find()->where(['hit'=>'1'])->limit(6)->all();
            $id = Yii::$app->request->get('id');
//            debug($id);
$products = Product::find()->where(['category_id'=>$id])->all();
        return $this->render('view', compact('products'));        
    }
    
}

?>