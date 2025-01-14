<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - BookHub</title>
    <link rel="stylesheet" href="css/home.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
    }

    .book-list {
        background-color: white; 
        color: black; 
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        width: 80%;
        max-width: 900px;
    }

    .book-item {
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 15px;
    }

    .book-item:last-child {
        border-bottom: none;
    }

    h2 {
        color: black; 
    }

    img {
        max-width: 100px; 
        margin-top: 10px;
        display: block;
    }
</style>
<style>
    .back-link {
        margin: 20px 0;
        text-align: left; /* Aligns the link to the left */
    }

    .back-link a {
        text-decoration: none;
        color: #007BFF; /* Blue color for the link */
        font-size: 16px;
        font-weight: bold;
    }

    .back-link a:hover {
        text-decoration: underline; /* Adds underline on hover */
    }
</style>

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="book.php">Home</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="sustainability.php">Sustainability</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    <?php
    
    include 'backend/dbconfic.php';   
    
    ?>
     <?php
    function getBookDetails($connect)
    {
        $i = 0;
        $query = "select Book_name,ISBN,Author,No_pages,Description,image_name,price from books";
        $result = mysqli_query($connect,$query);
        $books = null;
        if (mysqli_num_rows($result) > 0){
            $books = mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
    
        return $books;
    }
    ?>
<?php

$books = [];
$searchQuery = '';


if (isset($_POST['Bookname']) && $_POST['Bookname'] != '') {
    $searchQuery = $_POST['Bookname'];

   
    $searchQuery = mysqli_real_escape_string($connect, $searchQuery);

    
    $query = "SELECT Book_name, ISBN, Author, No_pages, Description, image_name,price
              FROM books 
              WHERE Book_name LIKE '%$searchQuery%'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
} else {
    
    $books = getBookDetails($connect);
}
?>
    <div class="book-list">
        <?php if (!empty($books)): ?>
            <?php foreach ($books as $book): ?>
                <div class="book-item">
                    <h2><?= htmlspecialchars($book['Book_name']) ?></h2>
                    <p><strong>ISBN:</strong> <?= htmlspecialchars($book['ISBN']) ?></p>
                    <p><strong>Author:</strong> <?= htmlspecialchars($book['Author']) ?></p>
                    <p><strong>Pages:</strong> <?= htmlspecialchars($book['No_pages']) ?></p>
                    <p><strong>Description:</strong> <?= htmlspecialchars($book['Description']) ?></p>
                    <p><strong>Price:</strong> <?= htmlspecialchars($book['price']) ?></p>
                    <?php if (!empty($book['image_name'])): ?>
                        <img src="assets/<?= htmlspecialchars($book['image_name']) ?>" alt="<?= htmlspecialchars($book['Book_name']) ?>">
                    <?php endif; ?>
                    <div class="back-link">
                    <a href="index.php">← Back to Homepage</a>
                    </div>

                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No books found.</p>
        <?php endif; ?>
    </div>

     <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Popular Category</h3>
                <ul>
                    <li><a href="category.html">Art</a></li>
                    <li><a href="category.html">Fiction</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Help & Support</h3>
                <ul>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2020-2024 BookHub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
