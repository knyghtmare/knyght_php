<?php

require_once 'Post.php';

$post = new Post();

// Select
var_dump( $post->getPosts() );
echo "<br>";
var_dump( $post->getPostById(2) );
echo "<br>";

// Insert
$data = array(
    'student_name' => "Rich",
    'major' => 'CSE'
);
echo "Inserted a new row: <br>";
$post->addPost($data);
var_dump( $post->getPostById(4) );
echo "<br>";

// update

$data = array(
    'student_id' => "4",
    'student_name' => "Rich",
    'major' => 'Software Engineering'
);
echo "updated the last row: <br>";
$post->updatePost($data);
var_dump( $post->getPostById(4) );
echo "<br>";

// delete

echo "deleted the last post<br>";
$post->deletePost(5);
 ?>
