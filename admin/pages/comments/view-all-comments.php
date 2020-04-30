<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="posts.php?source=add_post">Add Post</a>
    </div>
    <div class="mb-5"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Comment</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Post Title</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
                $resultset = getAllComments();
                while($row = mysqli_fetch_assoc($resultset)) {
                    $comment_id = $row['comment_id'];
                    $comment_post_id = $row['comment_post_id'];
                    $comment_author = $row['comment_author'];
                    $comment_email = $row['comment_email'];
                    $comment_content = $row['comment_content'];
                    $comment_status = $row['comment_status'];
                    $comment_date = $row['comment_date'];

                    //FETCH POST_TItLE FROM COMMENT_POST_ID
                    $post_resultset = getAllPosts("post_id = $comment_post_id");
                    if ($post = mysqli_fetch_assoc($post_resultset)){
                        $post_title = $post['post_title'];
                        $post_id = $post['post_id'];
                    }else {
                        $post_title = "SOMETHING WENT WRONG";
                        $post_id = 0;
                    }

                    echo<<<COMMENTS
<tr>
  <td>$comment_id</td>
  <td>$comment_author</td>
  <td>$comment_content</td>
  <td>$comment_email</td>
  <td>$comment_status</td>
  <td><a href="http://localhost/cms/post.php?post_id=$post_id">$post_title</a></td>
  <td>$comment_date</td>
  <td><a href="comments.php?source=approved&comment_id=$comment_id" class="fa fa-thumbs-up btn btn-success"></a></td>
  <td><a href="comments.php?source=unapproved&comment_id=$comment_id" class="fa fa-thumbs-down btn btn-danger"></a></td>
  <td><a href="#" class="fa fa-trash btn btn-danger"></a></td>
</tr>
COMMENTS;
                }

                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>