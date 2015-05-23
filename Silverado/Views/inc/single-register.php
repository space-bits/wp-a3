<h3>New User?</h3>
<form method="POST" action="<?= getBaseUri(); ?>login" class="register-form">
    <input name="username" type="text" placeholder="User Name" required>
    <input name="password" type="password" placeholder="Password" required>
    <input name="phone" type="string" placeholder="0421 123 234" pattern="0[0-8]\d{8}" required>
    <input name="email" type="email" placeholder="Name@Email.com" required>
    <input class="login" type="submit" value="Register">
</form>
