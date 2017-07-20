<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Users;

class UserController extends CommonController{    

    public function actionIndex(){
        $users = new Users();
        $users_data = $users->getAllUser();
        return $this->render('index',['users_data'=>$users_data]);
    }  

    public function actionDelete(){
        $users = new Users();        
        $request = \YII::$app->request;                
        if($request->isGet){                        
            $id = $request->get('id');
            if(isset($id)){
                $users->deleteUser($id);
            }
        }        
        return $this->redirect(['/user/index']);
    }

}