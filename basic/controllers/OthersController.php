<?php
namespace app\controllers;
use yii\web\Controller;

class OthersController extends Controller{
    
    public $layout = 'others';

    public function actionIndex(){
        return $this->render('pushed');
    }

    public function actionChart(){
        return $this->render('chart');
    }

}