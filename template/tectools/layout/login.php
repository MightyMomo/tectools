<div class="row">
    <div class="col s12 m8 l4 xl2 offset-m2 offset-l4 offset-xl5">
        <div id="">
            <h1>Login</h1>

            <?php

            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo '<h3 style="color: #e26239">Forkert email eller brugernavn</h3>';
            }

            ?>

            <form action="" method="POST">
                <input autocomplete="off" name="username" type="text" placeholder="E-mail"><br>
                <input autocomplete="off" name="password" type="password" placeholder="Password"><br>
                <input name="log_in" type="hidden" value="1"><br>
                <input class="btn" type="submit" value="Login">
            </form>
            <br><br><br>
        </div>
    </div>
</div>