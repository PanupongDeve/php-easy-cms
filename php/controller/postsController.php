<?php 

class Post {
    var $id = '';
    var $title = '';
    var $body = '';
    var $image = '';

    function __construct($id, $post_title, $post_body, $post_image) {
        $this->id = $id;
        $this->title = $post_title;
        $this->body = $post_body;
        $this->image = $post_image;
    }
}




function insert_post(){
    global $connection;
    $user = exec('whoami');
    echo $user;
    
    $root_path = $_SERVER["DOCUMENT_ROOT"];
    if(isset($_POST['create_post'])){
        $post_image =  mysqli_real_escape_string($connection,$_FILES['post_image']['name']);
        $post_image_temp =  mysqli_real_escape_string($connection,$_FILES['post_image']['tmp_name']);
        move_uploaded_file($post_image_temp, "$root_path/resource/images/$post_image");
        
        $post = 
            new Post(
                "55",
                mysqli_real_escape_string($connection,$_POST['post_title']), 
                mysqli_real_escape_string($connection,$_POST['post_body']), 
                $post_image
            );
        echo $post->title;
        echo "<br>";
        echo $post->body;
        echo "<br>";
        echo $post->image;
    }
}

?>