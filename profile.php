<?php
include('header.php');
include('navbar.php');
include('db.php');
include('functions.php');

if (!isLoggedIn()) {
    redirect('temp/login.php');
}

$user = fetchUserById($pdo, $_SESSION['user_id']);
?>

<h1><?php echo htmlspecialchars($user['username']); ?>'s Profile</h1>
<p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
<img src="images/project2.png" ?php echo htmlspecialchars($user['profile_picture']); ?>" alt="Profile Picture">

<?php include('footer.php'); ?>
