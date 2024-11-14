<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PICKK's - a recipe sharing platform</title>

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
                        <h2>Dashboard!</h2>
            </div>
        </section>
        <!--END OF WELCOME SECTION-->

        <!-- FOOTER -->
        <footer>
            <p>&copy;copyright 2024</p>
        </footer>
        <!-- END OF FOOTER -->

    </body>
</html>
