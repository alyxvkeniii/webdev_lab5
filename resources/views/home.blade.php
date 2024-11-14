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
                        <h2>Join PICKK Recipe!</h2>
                        <p>Your Go-To Platform for Tried-and-True Recipes</p>
                        <a href="/sign-up" class="button1">TRY IT FOR FREE</a>
                    </div>
            </div>
        </section>
        <!--END OF WELCOME SECTION-->

        <!--SECTION OF GET TO KNOW PICKK-->
        <section id="about-section">
            <div class="about-container">
                    <div class="about-text-container">
                        <h2 style="color: #d13469;">About PICKK Recipe!</h2>
                        <p><b>PICKK Recipe</b> is a filipino recipe sharing site where food lovers can post recipes from anywhere on the web. Use it to discover a new favorite food blog—or figure out what's for dinner tonight.</p><br>
                        <p>To save and share content, <a href="/sign-up" class="see-more">create a account</a> and start posting today.</p>
                        
                    </div>
            </div>
    
            <div class="image-container">
                <img src="/assets/images/filipino-foods.jpg" alt="Right Image">
            </div>
        </section>
        <!--END SECTION OF GET TO KNOW PICKK-->

        <!--EXPLORE SECTION-->
            <section id="latestPICKK-section">
                <div class="latest-container">
                    <div class="title">
                        <h2>Latest PICKK Recipe</h2>
                        <a href="/menu" class="see-more">See more &gt;&gt;&gt;</a>
                    </div>

                    <div class="wrapper">    
                        <div class="card">
                            <img src="/assets/images/adobo.jpg">
                            <div class="info">
                                <h3>Adobo</h3>
                            </div>
                        </div>

                        <div class="card">
                            <img src="/assets/images/caldereta.jpg">
                            <div class="info">
                                <h3>Caldereta</h3>
                            </div>
                        </div>

                        <div class="card">
                            <img src="/assets/images/bicol-express.jpg">
                            <div class="info">
                                <h3>Bicol Express</h3>
                            </div>
                        </div>

                        <div class="card">
                            <img src="/assets/images/kare-kare.jpg">
                            <div class="info">
                                <h3>Kare-kare</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!--END OF EXPLORE SECTION-->

        <!--CELEBRATE PICKK SECTION-->
        <section id="celebrate-section">
            <div class="celebrate-container">
                <img src="/assets/images/celebrate.jpg" alt="celebrate image">
                    <div class="celeb-text-container">
                        <h2>Welcoming PICKK Recipe!</h2>
                        <p>Celebrate with us by throwing a fantastic party! Check out our article to explore recipes perfect for any occasion.</p>
                        <a href="/menu" class="button2">THROW A PARTY</a>
                    </div>
            </div>
        </section>
        <!--END OF CELEBRATE PICKK SECTION-->

        <!-- FOOTER -->
        <footer>
            <p>&copy;copyright 2024 PICKK Recipe</p>
            <a href="/terms" class="terms-of-use">Terms of Use</a><br>
            <a href="/policy" class="policy">Privacy Policy</a>
        </footer>
        <!-- END OF FOOTER -->

    </body>
</html>
