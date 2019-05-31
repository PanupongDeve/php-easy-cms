<?php 

class Post {
    var $id = '';
    var $post_title = '';
    var $post_body = '';
    var $post_image = '';

    function __construct($id, $post_title, $post_body, $post_image) {
        $this->id = $id;
        $this->post_title = $post_title;
        $this->post_body = $post_body;
        $this->post_image = $post_image;
    }
}


$post = new Post(1,"test", "test", "test");


?>