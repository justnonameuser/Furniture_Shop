<?php
// Simulate user role (this could come from a database or other logic)
//$user_role = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : 'guest';

// Function to generate the login form
?>
<section class = "index-login">
    <div class = "wrapper">
        <div class = "index-login-signup">
            <h4>SIGN UP</h4>
            <form action="_inc/signup.inc.php" method = "post">
                <input type="text" name = "uid" placeholder = "Username">
                <input type="password" name = "pwd" placeholder = "Password">
                <input type="password" name = "pwdRepeat" placeholder = "Repeat password">
                <input type="text" name = "email" placeholder = "E-mail">
                <select name="role">
                <option value="user">user</option>
                <option value="admin">admin</option>
                </select>

                <br>
                <button type="submit" name="submit">SIGN UP</button>
            </form>
        </div>
        <br>
        <div class = "index-login-login">
            <h4>LOGIN</h4>
            <p>dont have acc yet? Sign up here!</p>
            <form action="_inc/login.inc.php" method = "post">
                <input type="text" name = "uid" placeholder = "Username">
                <input type="password" name = "pwd" placeholder = "Password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>

</section>



