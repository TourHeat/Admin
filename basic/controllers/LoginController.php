<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Users;

class LoginController extends Controller{
    
    public $layout = 'clear';    

    public $data = array();

    public function actionIndex(){

        $csrfToken = \YII::$app->request->csrfToken;
        return $this->render('index',['csrfToken'=>$csrfToken]);

    }

    public function actionRegister(){
        $csrfToken = \YII::$app->request->csrfToken;
        return $this->render('register',['csrfToken'=>$csrfToken]);
    }

    public function actionLogout(){
        $session = \YII::$app->session;
        if(!$session->isActive){
            $session->open();
        }
        $session->remove('username');
        return $this->redirect(['/login/index']);
    }

    public function actionRegistercheck(){
        $request = \YII::$app->request;
        $users = new Users;
        if($request->isPost){
            $users->username = $request->post('_username');
            $users->password = $request->post('_password');
            $users->phone = $request->post('_phone');
        }
        $users->validate();
        if($users->hasErrors()){            
            $data['status'] = 1;
            echo json_encode($data);
            die();
        }else{
            $tmp = $users->hasUser($users->username,$users->phone);
            if($tmp === true){
                $data['status'] = 1;
                echo json_encode($data);
                die();
            }            
        }
        $users->password = password_hash($users->password,PASSWORD_DEFAULT);
        $users->save();
        $data['status'] = 0;        
        echo json_encode($data);   
    }

    public function actionCheck(){        
        $request = \YII::$app->request;
        $users = new Users;
        if($request->isPost){
            $users->username = $request->post('_username');
            $users->password = $request->post('_password');
        }
        $users->validate();
        if($users->hasErrors()){            
            $data['status'] = 1;
            echo json_encode($data);
            die();
        }else{
            $tmp = $users->isUser($users->username,$users->password);
            if($tmp !== true){
                $data['status'] = 1;
                echo json_encode($data);
                die();
            }            
        }          
        
        $session = \YII::$app->session;
        if(!$session->isActive){
            $session->open();
        }
        $session->set('username',$request->post('_username')); 

        $data['status'] = 0;        
        echo json_encode($data);   
    }

}