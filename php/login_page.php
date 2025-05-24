<section class = "index-login">
    <div class = "wrapper">
        <div class = "index-login-signup">
            <h4>SIGN UP</h4>
            <form action="_inc/signup.inc.php" method = "post">
                <input type="text" name = "uid" placeholder = "Username" required>
                <input type="password" name = "pwd" placeholder = "Password" required>
                <input type="password" name = "pwdRepeat" placeholder = "Repeat password" required>
                <input type="text" name = "email" placeholder = "E-mail" required>
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
            <p>Už máte účet? prihláste sa tu</p>
            <form action="_inc/login.inc.php" method = "post">
                <input type="text" name = "uid" placeholder = "Username" required>
                <input type="password" name = "pwd" placeholder = "Password" required>
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>

</section>



