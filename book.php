<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisteredHome - BookHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    
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
                <!-- <li><a href="login.php">Login</a></li> -->
                <li><a href="signup.php">Sign Up</a></li>
            </ul>

            <div class="search-container">
        <form action="bookdetails.php" method="POST">
            <input type="text" name="Bookname" placeholder="Search..." aria-label="Search" value="<?php ($searchQuery) ?>">
            <button type="submit">Search</button>
        </form>
    </div>
   
            <img src="assets/book6.png" height="50" width="50" alt="Profile Image">
            <img src="assets/booklogo.jpg" height="60" width="60" alt="Profile Image">
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to BookHub</h1>
        <p>Discover your next great read with us!</p>
        <!-- <a href="login.php" class="btn">Login</a> -->
    </section>

    <section class="how-it-works">
        <h2>How Book Exchange Works?</h2>
        <div class="steps">
            <div class="step">
                <h3>Step 01</h3>
                <p>Register & create your FREE account</p>
            </div>
            <div class="step">
                <h3>Step 02</h3>
                <p>Add your old books to your BookHub library</p>
            </div>
            <div class="step">
                <h3>Step 03</h3>
                <p>Request your favorite book from other members</p>
            </div>
            <div class="step">
                <h3>Step 04</h3>
                <p>Exchange books by chatting &y meeting</p>
            </div>
        </div>
    </section>
    <section class="latest-books">
    <h2>Latest Books</h2>
    <div class="book-list">
    <div class="card float-start" style="width: 12rem; margin: 5px;">
  <img class="card-img-top img-thumbnail" src="assets/book1.jpeg">
  <div class="card-body">
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Buy </a>
  </div>
</div>

<div class="card float-start" style="width: 12rem; margin: 5px;">
  <img class="card-img-top img-thumbnail" src="assets/book2.jpeg">
  <div class="card-body">
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Buy </a>
  </div>
</div>

<div class="card float-start" style="width: 12rem; margin: 5px;">
  <img class="card-img-top img-thumbnail" src="assets/book3.jpeg">
  <div class="card-body">
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Buy </a>
  </div>
</div>

<div class="card float-start" style="width: 12rem; margin: 5px;">
  <img class="card-img-top img-thumbnail" src="assets/book4.jpeg">
  <div class="card-body">
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Buy </a>
  </div>
</div>
    </div>
</div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Popular Category</h3>
                <ul>
                    <li><a href="category.php">Art</a></li>
                    <li><a href="category.php">Fiction</a></li>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
