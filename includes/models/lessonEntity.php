<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28/07/2018
 * Time: 06:59 م
 */

class lessonEntity
{
  private $lesson_title;
  private  $lesson_id;
  private $lesson_course;
  private $lesson_instructor;
  private $lesson_description;
  private  $lesson_video;

    /**
     * @return mixed
     */
    public function getLessonTitle()
    {
        return $this->lesson_title;
    }

    /**
     * @param mixed $lesson_title
     */
    public function setLessonTitle($lesson_title)
    {
        $this->lesson_title = $lesson_title;
    }

    /**
     * @return mixed
     */
    public function getLessonId()
    {
        return $this->lesson_id;
    }

    /**
     * @param mixed $lesson_id
     */
    public function setLessonId($lesson_id)
    {
        $this->lesson_id = $lesson_id;
    }

    /**
     * @return mixed
     */
    public function getLessonCourse()
    {
        return $this->lesson_course;
    }

    /**
     * @param mixed $lesson_course
     */
    public function setLessonCourse($lesson_course)
    {
        $this->lesson_course = $lesson_course;
    }

    /**
     * @return mixed
     */
    public function getLessonInstructor()
    {
        return $this->lesson_instructor;
    }

    /**
     * @param mixed $lesson_instructor
     */
    public function setLessonInstructor($lesson_instructor)
    {
        $this->lesson_instructor = $lesson_instructor;
    }

    /**
     * @return mixed
     */
    public function getLessonDescription()
    {
        return $this->lesson_description;
    }

    /**
     * @param mixed $lesson_description
     */
    public function setLessonDescription($lesson_description)
    {
        $this->lesson_description = $lesson_description;
    }

    /**
     * @return mixed
     */
    public function getLessonVideo()
    {
        return $this->lesson_video;
    }

    /**
     * @param mixed $lesson_video
     */
    public function setLessonVideo($lesson_video)
    {
        $this->lesson_video = $lesson_video;
    }


}