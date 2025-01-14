<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - BookHub</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="sustainability.php">Sustainability</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
            <img src="assets/book6.png" height="40" width="40" alt="Profile Image">
            <img src="assets/booklogo.jpg" height="40" width="40" alt="Profile Image">
        </nav>
    </header>
    <?php
    // Include the database connection and the function file
    include 'backend/dbconfic.php'; // Replace with your actual database connection file   
    
    ?>
     <?php
    function getBookDetails($connect)
    {
        $i = 0;
        $query = "select Book_name,ISBN,Author,No_pages,Description,image_name from books";
        $result = mysqli_query($connect,$query);
        $books = null;
        if (mysqli_num_rows($result) > 0){
            $books = mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
    
        return $books;
    }
    ?>
<?php
// Initialize variables
$books = [];
$searchQuery = '';

// Check if the search form was submitted
if (isset($_POST['Bookname']) && $_POST['Bookname'] != '') {
    $searchQuery = $_POST['Bookname'];

    // Sanitize the input to prevent SQL injection
    $searchQuery = mysqli_real_escape_string($connect, $searchQuery);

    // Fetch books matching the search query
    $query = "SELECT Book_name, ISBN, Author, No_pages, Description, image_name 
              FROM books 
              WHERE Book_name LIKE '%$searchQuery%'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
} else {
    // Fetch all books if no search query is provided
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
                    <?php if (!empty($book['image_name'])): ?>
                        <img src="images/<?= htmlspecialchars($book['image_name']) ?>" alt="<?= htmlspecialchars($book['Book_name']) ?>">
                    <?php endif; ?>
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
