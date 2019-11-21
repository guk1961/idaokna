<?php
namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;

class CategoryController extends AppController{

    public function actionIndex($id = null){

        $hits = Product::find()->where(['hit'=>'1'])->limit(6)->all();
        $this->setMeta('Ай да окна!');
        return $this->render('index', compact('hits'));        
    }
    public function actionView($id){
        $id = Yii::$app->request->get('id');
//        $products = Product::find()->where(['category_id'=>$id])->all();
        $query = Product::find()->where(['category_id'=>$id]);
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize'=>3]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne($id);
        $this->setMeta('Ай да окна | ' . $category->name, $category->keywords,$category->description);
        return $this->render('view', compact('products','pages','category'));        
    }
    
}

?>