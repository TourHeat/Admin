<?php

namespace app\models;
use yii\db\ActiveRecord;

class Chatinfo extends ActiveRecord{

    public function getAllChatInfo(){
        $sql = 'select * from chatinfo';
        return Chatinfo::findBySql($sql)->asArray()->all();
    }

    public function deleteChatInfo($id){
        $chatinfo = Chatinfo::findOne($id);
        $chatinfo->delete();
    }

}