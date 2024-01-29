<?php if (isset($errorMessage)) : ?>
    <p style="color: red;"><?php echo $errorMessage; ?></p>
<?php endif; ?>
<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>
