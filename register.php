<?php
/**
 * Warning! This code was written to be broken ON PURPOSE! Every single piece of it is bad quality ON PURPOSE! DON'T
 * EVER USE THIS FOR ANYTHING! PLEASE!
 */

require(__DIR__ . '/includes/header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-push-3 col-sm-6">
                <form action="doregister.php" method="post">
                    <h1>Please register:</h1>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" autofocus="autofocus" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="password-again">Repeat password</label>
                        <input type="password" class="form-control" name="password-again" id="password-again" placeholder="Repeat password" />
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
require(__DIR__ . '/includes/footer.php');