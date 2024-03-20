<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
</head>
<body>
<div class="container">
    <form action="/auth/register" method="POST" style="margin-top: 50px;">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <?php
    if (isset($_SESSION["error"])) {
        echo "<b style='color: red;'>" . $_SESSION["error"] . "</b>";
        unset($_SESSION["error"]);
    }
    ?>
</div>
</body>
</html>
