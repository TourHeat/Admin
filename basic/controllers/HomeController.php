<?php
namespace app\controllers;
use yii\web\Controller;

class HomeController extends CommonController{

    public $layout = 'main';

    public function actionIndex(){
        date_default_timezone_set('Asia/Shanghai'); 
        $ip = \YII::$app->request->userIP;
        $last_time = date('Y-m-d H:i:s');
        return $this->render('index',['ip'=>$ip,'last_time'=>$last_time]);        
    }

    public function actionChart(){
        return $this->render('chart');
    }

    public function actionPushed(){
        return $this->render('pushed');
    }

    public function actionDataanalyse(){
        return $this->render('dataanalyse');
    }

}