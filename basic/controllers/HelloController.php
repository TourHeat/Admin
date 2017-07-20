<?php
namespace app\controllers;
use yii\web\Controller;
use yii\web\CookieCollection;

class HelloController extends Controller{    
    public function actionIndex(){        
        // $request = \YII::$app->request;        
        // $res = \YII::$app->response;

        // if($request->isGet){                        
        //     $res->format = \yii\web\Response::FORMAT_JSON;
        //     $res->data = ['message'=>'Hello World','status'=>$request->get('id',2),'msg'=>$request->userIP];  
        // }

        // $session = \YII::$app->session;
        // if(!$session->isActive){
        //     $session->open();
        //     echo 'fuck';
        // }

        // $reqcookies = \YII::$app->request->cookies;
        // $rescookies = \YII::$app->response->cookies;
        // $rescookies->add(new \yii\web\Cookie(['name'=>'Zoe','value'=>'a63635']));         
        //echo $reqcookies->get('Zoe');
       // return $this->render('index',array('motherfucker'=>'motherfucker'));
        
    }
}
