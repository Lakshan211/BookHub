<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <link rel="stylesheet" href="css/home.css">
</head>
<body>

    
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="sustainability.php">Sustainability</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contact-section">
            <div class="contact-form">
                <h2>Contact us</h2>
                <form action="backend/contact.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Full Name" required>

                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" placeholder="Your Email address" required>

                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Your Subject" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>

                    <button type="submit" class="send-btn">Submit</button>
                </form>
            </div>
            <div class="contact-banner">
                <h2>We love to hear from you</h2>
                <h1>BookHub.lk</h1>
            </div>
        </section>
    </main>
</body>
</html>
