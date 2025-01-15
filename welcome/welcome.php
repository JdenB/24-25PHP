<?php include 'header.php'; ?>

<form action="welcome.php" method="post">
    <div class = row>
        <p>Welcome <?php echo($_POST["name"]);?>, <?php echo($_POST["email"]);?> is your email.</p>
    </div>
</form>
<?php include 'footer.php' ?>
