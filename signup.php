<?php
if(isset($_POST["username"]) && isset($_POST["password"])){
    echo "Username name is {$_POST["username"]} Password is {$_POST["password"]}";
}
?>

<form action="" method="post">
<label for="username">Username: </label>
<input name="username" type="text" required autofill off>
<label for="password">Password: </label>
<input name ="password" type="password" required>
<label for="submit">Submit</label>
<input type="submit" name="submit" id="">
</form>