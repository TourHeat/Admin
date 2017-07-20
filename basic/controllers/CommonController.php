<?php
namespace app\controllers;
use yii\web\Controller;

class CommonController extends Controller{
    public function init(){
        $session = \YII::$app->session;
        if(!$session->isActive){
            $session->open();
        }
        $username = $session->get('username');
        if(!isset($username) || empty($username)){
            return $this->redirect(['/login/index']);
        } 
    }
}