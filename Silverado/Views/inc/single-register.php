<form method="POST" action="<?= getBaseUri(); ?>login" class="login-form">
    <p>Register Here</p>
    <input name="username" type="text" placeholder="User Name" required>
    <input name="firstname" type="text" placeholder="First Name" required>
    <input name="lastname" type="text" placeholder="Last Name" required>
    <input name="regPass" type="password" placeholder="Password" required>
    <input name="confPass" type="password" placeholder="Confirm Password" required>
    <input name="phone" type="string" placeholder="Phone Number" pattern="0[0-8]\d{8}" required>
    <input name="email" type="email" placeholder="Email Address" required>
    <input class="login" type="submit" value="Register">
</form>
