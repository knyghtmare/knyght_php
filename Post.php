<?php

require_once 'Database.php';


class Post
{
  private $db;

  public function __construct()
  {
      $this->db = new Database();
  }

  // get all posts
  public function getPosts()
  {
      $this->db->query("SELECT * FROM students");
      return $this->db->getResults();
  }

  // get one post

  public function getPostById($id)
  {
      $this->db->query("SELECT * FROM students WHERE student_id = :id");
      $this->db->bind(':id', $id);
      return $this->db->single();
  }

  // insert new values

  public function addPost($data)
  {
    $this->db->query("INSERT INTO students(student_name, major)
                      VALUES(:student_name, :major)");

    $this->db->bind(':student_name', $data['student_name']);
    $this->db->bind(':major', $data['major']);

    if ( $this->db->execute() )
    {
      return true;
    }
    else {
      // code...
      return false;
    }
  }

  public function updatePost($data)
  {
    $this->db->query("UPDATE students
                      SET student_name = :student_name,
                          major = :major
                      WHERE student_id = :id");

    $this->db->bind(':id', $data['student_id']);
    $this->db->bind(':student_name', $data['student_name']);
    $this->db->bind(':major', $data['major']);

    if ( $this->db->execute() )
    {
      return true;
    }
    else {
      // code...
      return false;
    }
  }

  // delete post

  public function deletePost($id)
  {
    $this->db->query("DELETE FROM students
                      WHERE student_id = :id");

    $this->db->bind(':id', $id);

    if ( $this->db->execute() )
    {
      return true;
    }
    else {
      // code...
      return false;
    }
  }
}

 ?>
