<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27/07/2018
 * Time: 05:14 م
 */

class coursesStudentsModel extends  model
{
 protected $table='courses_students';

 public   function addStudentToCourse($studentId,$courseId,$approved=0)
 {

 }
 public  function approveSubscription($subId,$approved=0)
 {

 }
    public  function checkSubscription($studentId,$courseId)
    {

    }
 public function deleteSubscription($subId)
 {

 }

}