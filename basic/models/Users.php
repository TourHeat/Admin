<?php

namespace app\models;

use yii\db\ActiveRecord;

class Users extends ActiveRecord{

    public function isUser($username,$password){
        $sql = 'select username,password from users where username=:username';        
        $user = Users::findBySql($sql,array(':username'=>$username))->asArray()->one();
        if(empty($user['username']) && !isset($user['username'])){
            return false;
        }
        if(password_verify($password,$user['password'])){
            return true;
        }else{
            return false;
        }
    }

    public function getAllUser(){
        $sql = "select * from users";
        return Users::findBySql($sql)->asArray()->all();
    }

    public function deleteUser($id){
        $user = Users::findOne($id);
        $user->delete();
    }

    public function hasUser($username,$phone){
        $sql = 'select username from users where username=:username or phone=:phone';
        $user = Users::findBySql($sql,[':username'=>$username,':phone'=>$phone])->asArray()->one();
        if(empty($user) || !isset($user)){
            return false;
        }else{
            return true;
        }
    }

    public function rules(){
        return [
            [['username','password'],'required'],
            ['username','string','length'=>[6, 20]],
            ['password','string','length'=>[6, 255]],
            ['phone','number']
        ];
    }
}