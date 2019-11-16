<?php
namespace app\controllers;

class MyController extends AppController{

    public function actionIndex($id = null){
        //return 'Index page';
//        $id=$tid;
        $hi = 'Hello World!';
        $users = ['Вася','Юра','Петя'];
//        return $this->render('index', ['hi' => $hi, 'users' => $users, 'id'=>$id]);
        return $this->render('index', compact('hi', 'users', 'id'));
    }
}

?>