<?php

class usersGroupsModel extends model{

    protected $table='users_groups';

    public function addUserGroup($name)
    {
        return  $this->Insert(['group_name'=>$name]);


    }

    public function updateUsersGroup($id,$data){
       return  $this->Update(['group_name'=>$data],"WHERE  group_id=$id");
    }

    public function deleteGroupuser($where){

        if($this->Delete($where))
            echo 'done';
        echo $this->getErrors();
    }

    public function DeleteUsersGroup($id){

        return $this->Delete("WHERE group_id= $id");
    }

    /**
     *
     */
    public  function getAllGroaps(){
        $this->Execute("SELECT * FROM {$this->table}");
      return  $this->GetRows();

    }
   public  function getRowBy_id($id){

        $this->Execute("SELECT * FROM `{$this->table}` WHERE `group_id` = $id");
        return $this->GetRow();
   }

}


