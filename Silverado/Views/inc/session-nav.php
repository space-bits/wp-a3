<div id="session-nav" class="dark-bg">
    <div class="wrapper">
        <?php if (isset($_SESSION['user'])) { ?>
            <p>
                Hi
                <?= $_SESSION['user']->firstname; ?>
                <?= $_SESSION['user']->lastname; ?>
                (<?= $_SESSION['user']->username; ?>) |
                <a href="<?= getBaseUri(); ?>logout">Logout</a>
            </p>
        <?php } else { ?>
                <?php include('single-login.php'); ?>
        <?php } ?>
    </div>
</div>
