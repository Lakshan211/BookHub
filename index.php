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
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
            <div class="search-container">
                <input type="text" placeholder="Search..." aria-label="Search">
                <a href="index.php"> <button type="submit">Search</button> </a>
                
            </div>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to BookHub</h1>
        <p>Discover your next great read with us!</p>
        <a href="login.html" class="btn">Login</a>
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
            <div class="book" onclick="openModal('assets/book1.jpeg', 'The Grey Wolf', 'Louise Penny', '7500')">
                <img src="assets/book1.jpeg" alt="Book Image">
                <h4>The Grey Wolf</h4>
                <sub>by Louise Penny</sub><br>
                <sub>Price: RS. 7500</sub>
            </div>
            
            <div class="book" onclick="openModal('assets/book2.jpeg', 'Hot Mess', 'Jeff Kinney', '4000')">
                <img src="assets/book2.jpeg" alt="Book Image">
                <h4>Hot Mess</h4>
                <sub>by Jeff Kinney</sub><br>
                <sub>Price: RS. 4000</sub>
            </div>
            
            <div class="book" onclick="openModal('assets/book3.jpeg', 'Revenge of the Tipping Point', 'Malcolm Gladwell', '9000')">
                <img src="assets/book3.jpeg" alt="Book Image">
                <h4>Revenge of the Tipping Point</h4>
                <sub>by Malcolm Gladwell</sub><br>
                <sub>Price: RS. 9000</sub>
            </div>
            
            <div class="book" onclick="openModal('assets/book4.jpeg', 'The Wild Robot', 'Peter Brown', '2000')">
                <img src="assets/book4.jpeg" alt="Book Image">
                <h4>The Wild Robot</h4>
                <sub>by Peter Brown</sub><br>
                <sub>Price: RS. 2000</sub>
            </div>
        </div>
    </section>
    
    <div id="bookModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" alt="Book Image">
            <h4 id="modalTitle">Book Title</h4>
            <p id="modalAuthor">by Author</p>
            <p id="modalPrice">Price: RS. </p>
            <button id="chatButton">Chat with Owner</button> 
        </div>
    </div>
    

    <script src="JS/script.js"></script>

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
