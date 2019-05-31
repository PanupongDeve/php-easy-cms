<?php include "../../components/db.php" ?>
<?php include "../../controller/postsController.php" ?>
<?php include "../../components/header.php" ?>
<?php insert_post(); ?>

<div class="mui-col-md-8 margin-top--25">
    <div class="mui-row">
        <div class="mui-col-md-offset-6"></div>
        <div class="mui-col-md-6">
            <div class="mui--text-title"> <a href="/">Home</a> / Admin / <a href="/admin/posts">Posts</a>/ Create</div>
        </div>
        <div class="mui-col-md-12">
            <div class="title__flex-row margin-top--25">
                <div class="mui--text-display1 padding-top--25">Posts - Create</div>
            </div>
            <div class="mui-divider"></div>
        </div>
        <div class="mui-col-md-12">
            <div class="margin-top--25 mui-panel">
                <form class="mui-form" action="" method="post" enctype="multipart/form-data">
                    <div class="mui-textfield">
                        <input type="text" placeholder="Title" name="post_title">
                    </div>
                    <div class="mui-textfield">
                        <textarea name="post_body"  placeholder="Deteil"></textarea>
                    </div>
                    <div class="mui-textfield">
                        <input type="file" name="post_image">
                    </div>
                    <button type="submit" name="create_post" value="Publish Post" class="mui-btn mui-btn--raised mui-btn--primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

</div>

<?php include "../../components/footer.php" ?>