<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25/07/2018
 * Time: 06:03 م
 */

class usersModel extends model
{
  protected $table='users';

  public function  addUser(userEntity $entity){
  $data=[
      'username'=>$entity->getUsername(),
      'name'=>$entity->getName(),
      'password'=>$entity->getPassword(),
      'image'=>$entity->getImage(),
      'email'=>$entity->getEmail(),
      'user_group'=>$entity->getUserGroup(),
      'about'=>$entity->getAbout(),
      'is_active'=>$entity->getisActive()


  ];
  return $this->Insert($data);

  }

  public function updateUser(userEntity $entity){
      $data=[
          'username'=>$entity->getUsername(),
          'name'=>$entity->getName(),
          'password'=>$entity->getPassword(),
          'image'=>$entity->getImage(),
          'email'=>$entity->getEmail(),
          'user_group'=>$entity->getUserGroup(),
          'about'=>$entity->getAbout(),
          'is_active'=>$entity->getisActive()
      ];
      return $this->Update($data,"WHERE `id` = {$entity->getId()}");
  }
  public function UpdatePassword(userEntity $entity){
      $data=[
          'password'=>$entity->getPassword(),

      ];
      return $this->Update($data,'WHERE `id`='.$entity->getId());

  }
  public function deleteUser($id)
  {
    return $this->Delete("WHERE `id`=$id");
  }

  public function getAllUsers($where='')
  {
      $this->Execute("SELECT * FROM {$this->table} $where ");
      return $this->GetRows();
  }
  public function getUserByGroup($usergroup)
  {
     return  $this->getAllUsers(" WHERE `user_group`=$usergroup");

  }
  public function getUserByActiveStatus($activestatus){
   return $this->getAllUsers("WHERE `users`.`is_active` =$activestatus");
  }
}
