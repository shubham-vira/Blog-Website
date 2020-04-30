<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="users.php?source=add_user">Add Post</a>
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
                    <th>Image</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
                $resultset = getAllUsers();
                while($row = mysqli_fetch_assoc($resultset)) {
                    $user_id = $row['user_id'];
                    $username = $row['username'];
                    $password = $row['password'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $email = $row['email'];
                    $image = $row['image'];
                    $role = $row['role'];

                    echo<<<USER
<tr>
  <td>$user_id</td>
  <td><img src="images/users/$image" class="rounded-circle" height="100" alt=""></td>
  <td>$username</td>
  <td>$password</td>
  <td>$first_name</td>
  <td>$last_name</td>
  <td>$email</td>
  <td>$role</td>
  <td><a href="posts.php?source=edit_post&post_id=post_id" class="fa fa-edit btn btn-warning"></a></td>
  <td><a href="users.php?source=delete_user&user_id=$user_id" class="fa fa-trash btn btn-danger"></a></td>
</tr>
USER;
                }

                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>