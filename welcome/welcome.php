<?php include 'header.php';

$name = $email = "";

// condition to detect form data and sanitize it
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = sanitize_inputs($_POST["name"]);
    $email = sanitize_inputs($_POST["email"]);
}

// sanitize function

function sanitize_inputs($data){
    // trim method removes spaces at beginning and end
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<form action="welcome.php" method="post">
    <div class = row>
        <p>Welcome <?php echo $name;?>, <?php echo $email;?> is your email.</p>
    </div>
</form>

<?php include 'footer.php' ?>
