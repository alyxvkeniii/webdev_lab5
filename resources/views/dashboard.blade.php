<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to PICKK Recipes</title>
    <link rel="stylesheet" href="/assets/css/dashboard.css">
</head>
<body>

    <!-- HEADER -->
        <header>

            <div class="logo">
                <a href="/">
                    <img src="/assets/images/logo.png" alt="Logo">
                </a>
            </div>
 
            <nav>
                <ul>
                    <li><a href="{{ route('dashboard') }}" class="button"><b>Explore</b></a></li>
                    <li><a href="{{ route('dashboard') }}" class="button"><b>Recipe</b></a></li>
                    <li><a href="{{ route('dashboard') }}" class="button"><b>Menu</b></a></li>
                    <li><a href="{{ route('dashboard') }}" class="button"><b>FAQ</b></a></li>

                    <li class="dropdown">
                        <a href="#" class="button"><b>More</b></a>
                            <div class="dropdown-content">
                                <a href="{{ route('profile') }}">Profile</a>
                                <a href="{{ route('settings') }}">Settings</a>
                                <a href="{{ route('home') }}">Logout</a>
                            </div>
                    </li>
                </ul>
            </nav>

        </header>


        <section id="welcome-section">
            <div class="welcome-container">
                <img src="/assets/images/welcome.jpg" alt="welcome image">
                    <div class="text-container cute-font">
                        <h2>DASHBOARD</h2>
                        <p>Your Go-To Platform for Tried-and-True Recipes</p>
                    </div>
            </div>
        </section>

         <!-- FOOTER -->
         <footer>
            <p>&copy;2024 PICKK Recipe</p>
            <div class="footer-links">
                <a href="/terms">Terms of Use</a>
                <a href="/policy">Privacy Policy</a>
            </div>
        </footer>
    <!-- END OF FOOTER -->
</body>
</html>
