<html>
    <header>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <?php if (isLoggedIn()): ?>
            <li><a href="book_listings.php">Books</a></li>
            <li><a href="add_books.php">Add Book</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        <?php endif; ?>
    </ul>
</nav>
</header>
</html>