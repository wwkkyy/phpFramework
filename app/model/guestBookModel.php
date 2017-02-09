<?php

namespace app\model;

use core\lib\model;

class questBookModel extends model{


    public $table = 'guestbook';

    public function __construct($table)
    {
        parent::__construct();
        $this->table = $table;
    }

    public function all(){
        $res = $this->select($this->table,'*');
        return $res;
    }

    public function getOne($id){
        $ret = $this->get($this->table,'*',array(
            'id'=>$id
        ));
        return $ret;
    }

    public function setOne($id,$data){
        $ret = $this->update($this->table,$data,array(
            "id"=>$id
        ));
        return $ret;
    }

    public function deleteOne($id){
        $ret = $this->delete($this->table,array(
            'id'=>$id
        ));
        return $ret;
    }

    public function addOne($data){
        $ret = $this->insert($this->table,$data);
        return $ret;
    }
}