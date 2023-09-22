<?php
class Post{
  use Shareable;
}

class Comment{
  use Shareable;
}

trait Shareable{
  function share(){
    printf("Sharing this post") ;
  }
}

$post = new Post();
$post->share();
echo "\n"; 
$comment = new Comment();
$comment->share();