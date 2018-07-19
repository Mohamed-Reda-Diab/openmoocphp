<?php
class mysql{

 private  $connection;
 private $last;//last query

    /**
     * mysql constructor.
     */
    public  function __construct()
    {
        $this->dbconnect();
        $this->Execute('SET NAME utf8');
    }

    /**
     * @return bool
     */
    public function dbconnect(){

        $this->connection=new mysqli(hostname,username,password,dbname);
        if($this->connection)
            return true;
        return false;
    }

    /**
     * @param $query
     * @return bool
     */
    public  function Execute($query){
       //$query=$this->>connection->real->escape->string($query);
        if($result = $this->connection->query($query)){

            $this->last=$result;
            return true;
        }
        return false;
    }

    /**
     * @param $query
     * @return bool
     */
    public function Execute_Multi($query){
        //$query=$this->connection->real->escap->string($query)
        if($result=$this->connection->multi_query($query)){

            $this->last=$result;
            return TRUE;
        }
        return FALSE;
    }

    /**
     * @return array
     *
     */

    public  function GetRows(){

        $result=array();
        $rows= $this->AffectedRows();
        for($i=0; $i<$rows; $i++){
            $result[]=$this->last->fetch_assoc();
        }
        if(count($result)>0)
            return $result;

        $this->last->free();
        return NULL;
    }

    /**
     * @return mixed|null
     */
    public  function GetRow(){

        $result=array();
        $rows=$this->AffectedRows();
        for($i=0 ; $i< $rows ; $i++){

            $result[]=$this->last->fetch_assoc();
        }

        if(count($result)>0)
            return $result[0];
        $this->last->free();
        return NULL;
    }

    /**
     * @return mixed
     */
    public  function  AffectedRows(){
        return $this->connection->affected_rows;
    }

    public  function Select_Count($table){
        $this->Execute( "SELECT COUNT(*) FROM  `$table`");
        $count= $this->GetRow();
        return $count['COUNT(*)'];

    }






    public function  Insert($table,$data){
        // setup some variables for fields and values
        $fields='';
        $values='';

        //populate them
        foreach ($data as $f=>$v){
            $fields.="`$f`";
            $values.="`$v`";
       $values=(is_numeric($v)&& intval($v)==$v)? $v.",":"'$v',";
        }
        //remove our trailing
        $fields=(substr($fields,0,-1));
        $values=(substr($values,0,-1));
        $querystring="INSERT INTO {`$table`} ({$fields})VALUES({$values}) ";
        //check if row inserted
        if($this->Execute($querystring))
            return true;
        return false;




    }
    public function update(){
        
    }
    public  function  Delete($from,$where){

        $query=sprintf('DELETE FROM `%s` `%s`',$from ,$where);
        echo $query;
        $result=$this->Execute($query);
        if($result)
            return TRUE;
        return FALSE;

    }

}