@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="/assets/css/home.css">
@endsection

@section('content')

    <!--WELCOME SECTION-->
        <section id="welcome-section">
            <div class="welcome-container">
                <img src="/assets/images/welcome.jpg" alt="welcome image">
                    <div class="text-container cute-font">
                        <h2>MENU</h2>
                        <p>Your Go-To Platform for Tried-and-True Recipes</p>
                        <a href="/sign-up" class="button1">TRY IT FOR FREE</a>
                    </div>
            </div>
        </section>
    <!--END OF WELCOME SECTION-->

@endsection