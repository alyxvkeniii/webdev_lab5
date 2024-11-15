
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up for PICKK Recipes</title>
    <link rel="stylesheet" href="/assets/css/signup.css">
</head>
<body>

    <!-- HEADER -->
        <header>

            <div class="logo">
                <a href="/">
                    <img src="/css/assets/images/logo.png" alt="Logo">
                </a>
            </div>
 
            <nav>
                <ul>
                    <li><a href="{{ route('help') }}" class="button"><b>Help</b></a></li>
                </ul>
            </nav>

        </header>
    <!-- END OF HEADER -->

    <div class="container">
        <h2>Sign Up for PICKK Recipes</h2>

        <!-- Sign Up Form -->
        <form method="POST" action="{{ route('sign-up') }}">
            @csrf

            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password Input -->
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn">Sign Up</button>
        </form>
    </div>

    <!-- FOOTER -->
    <footer>
            <p>&copy;copyright 2024 PICKK Recipe</p>
            <div class="footer-links">
                <a href="/terms">Terms of Use</a>
                <a href="/policy">Privacy Policy</a>
            </div>
        </footer>
    <!-- END OF FOOTER -->

</body>
</html>
