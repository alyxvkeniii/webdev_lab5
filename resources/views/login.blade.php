<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PICKK's Landing Page</title>

        <!-- Add Google Font link here -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/assets/css/home.css">
    </head>

    <body>

        <!-- HEADER -->
        <header>

            <div class="logo">
                <img src="/css/assets/images/logo.png" alt="Logo">
            </div>
    
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}" class="button"><b>Explore</b></a></li>
                    <li><a href="{{ route('menu') }}" class="button"><b>Menu</b></a></li>
                    <li><a href="{{ route('dashboard') }}" class="button"><b>Dashboard</b></a></li>
                    <li><a href="{{ route('sign-up') }}" class="button"><b>Sign Up</b></a></li>
                    <li><a href="{{ route('login') }}" class="button"><b>Login</b></a></li>
                </ul>
            </nav>

        </header>
         <!-- END OF HEADER -->

        <!--WELCOME SECTION-->
        <section id="welcome-section">
            <div class="welcome-container">
                <img src="/assets/images/welcome.jpg" alt="welcome image">
                    <div class="text-container cute-font">
                        <h2>LOGIN</h2>
                        <p>Your Go-To Platform for Tried-and-True Recipes</p>
                        
                    </div>
            </div>
        </section>
        <!--END SECTION OF GET TO KNOW MINGKAI-->

        <!-- FOOTER -->
        <footer>
            <p>&copy;copyright 2024</p>
        </footer>
        <!-- END OF FOOTER -->

    </body>
</html>
