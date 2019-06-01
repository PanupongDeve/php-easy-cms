<?php include "../../components/db.php" ?>
<?php include "../../controller/postsController.php" ?>
<?php include "../../components/header.php" ?>
<?php deletePost(); ?>


<div class="mui-col-md-8 margin-top--25">
    <div class="mui-row">
        <div class="mui-col-md-offset-6"></div>
        <div class="mui-col-md-6">
            <div class="mui--text-title"> <a href="/">Home</a> / Admin / Posts</div>
        </div>
        <div class="mui-col-md-12">
            <div class="title__flex-row margin-top--25">
                <div class="mui--text-display1 padding-top--25">Posts</div>
                <a href="/admin/posts/create.php" class="mui-btn mui-btn--fab mui-btn--accent">+</a>
            </div>
            <div class="mui-divider"></div>
        </div>
        <div class="mui-col-md-12">
            <div class="margin-top--25 mui-panel">
            <table class="mui-table mui-table--bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php get_posts(); ?>
                </tbody>
            </table>

            </div>
        </div>

    </div>

</div>


<?php include "../../components/footer.php" ?>