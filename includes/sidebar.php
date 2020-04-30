<div class="col-md-4">


<!--    LOGIN -->
    <?php
    //$log = isLoggedIn();
    if (!isLoggedIn()) {
        ?>
        <div class="card my-4">
            <h5 class="card-header">Login</h5>
            <div class="card-body">
                <form action="includes/process-login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary" name="login" id="login" value="Login">
                    <a href="admin/forgot-password.php?forgot=<?php echo uniqid(true);?>" name="forgot">Forgot Password?</a>
                </form>
            </div>
        </div>

        <?php
    }
    ?>

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <form action="index.php" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search for...">
                    <span class="input-group-btn">
                  <button class="btn btn-secondary" value="search" type="submit">Go!</button>
                </span>
                </div>
            </form>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <?php
                include_once ("functions.php");
                $categories = getAllCategories();
                $categories_count = count($categories);
                ?>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <?php
                        for ($i = 0 ; $i<ceil($categories_count/2) ; $i++) {
                            echo <<<LINK
                            <li>
                                <a href="index.php?cat_id={$categories[$i]['cat_id']}">{$categories[$i]['cat_title']}</a>
                            </li>
LINK;
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <?php
                        for ($i = ceil($categories_count/2) ; $i<$categories_count ; $i++) {
                            echo<<<LINK
<li>
                                <a href="index.php?cat_id={$categories[$i]['cat_id']}">{$categories[$i]['cat_title']}</a>
                            </li>
LINK;

                        }
                        ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
    </div>

</div>