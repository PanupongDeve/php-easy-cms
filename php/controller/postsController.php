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
    global $root_path;
    
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


		$query = "INSERT INTO posts(post_title, post_body, post_image) ";
		$query .= "VALUES('{$post->title}', '{$post->body}', '{$post->image}')";
	
		$create_post = mysqli_query($connection, $query);
        
        if ($create_post) {
            echo "<script>alert(\"Success\")</script>";
        } else {
            die('QUERY FAILED'. mysqli_error($connection));
        }
        
    }
}

function get_posts() {
    global $connection;
    
    $query = "SELECT * FROM posts";
    $select_posts = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_posts)){
        $post =
            new Post(
                $row['id'],
                $row['post_title'],
                $row['post_body'],
                $row['post_image']
            );
        
        echo "<tr>";
        echo "<td>$post->id</td>";
        echo "<td>
                <img src=\" /resource/images/$post->image \" width=\"128\" height=\"128\">
            </td>";
        echo "<td>$post->title</td>";
        echo " <td>
                    <div class=\"flex__row\">
                        <a href=\"/admin/posts/edit.php\" class=\"mui-btn mui-btn--small mui-btn--primary\">Edit</a>
                        <a class=\"mui-btn mui-btn--small mui-btn--danger\">Delete</a>
                    </div>
                </td>";
        echo "</tr>";
    }
}

?>