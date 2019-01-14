<?php
    $error = !empty($_GET['error']) ? $_GET['error'] : "";
?>
<div class="container">
    <?php echo $error; ?>
    <form action="login-check.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input autocomplete="off" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" autocomplete="off" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>