<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27/07/2018
 * Time: 03:53 م
 */

class coursesModel extends model
{
 protected $table='courses';

 public function addCourse(courseEntity $course){


 }

 public  function updateCourse(courseEntity $course)
 {

 }
 public function updateCourseActiveStatus(courseEntity $course)
 {

 }
 public function deleteCourse($id){

 }
 public  function  getCourses()
 {

 }
 public function getcoursesByInstructor()
 {

 }
 //join from course student table and courses table joind
 public  function getCoursesByStudent($studentId)
 {

 }
 public function getCoursesByCategory()
 {

 }
 public  function  getCoursesByActiveStatus()
 {

 }

 public function  getCourse($id)
 {

 }
 public function searchCourses()
 {

 }
}