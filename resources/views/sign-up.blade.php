
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up for PICKK Recipes</title>
    <link rel="stylesheet" href="/assets/css/signup.css">
</head>
<body>

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

</body>
</html>
