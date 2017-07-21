<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Users;
use app\models\Chatinfo;

class UserController extends CommonController{    

    public function actionIndex(){
        $users = new Users();
        $users_data = $users->getAllUser();
        return $this->render('index',['users_data'=>$users_data]);
    }  

    public function actionChatinfo(){
        $chat = new Chatinfo();
        $chat_info = $chat->getAllChatInfo();
        return $this->render('chatinfo',['chat_info'=>$chat_info]);
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

    public function actionDeletechat(){
        $chat = new Chatinfo();
        $request = \YII::$app->request;                
        if($request->isGet){                        
            $id = $request->get('id');
            if(isset($id)){
                $chat->deleteChatInfo($id);
            }
        }        
        return $this->redirect(['/user/chatinfo']);
    }

    public function actionUserarea(){
        return $this->render('userarea');
    }

}