@extends('Components.layout')

@section('title', 'FAQ - Frequently Asked Questions')
@section('additional-styles')
<link rel="stylesheet" href="/assets/css/home.css">
    <link rel="stylesheet" href="/assets/css/help.css">
@endsection

@section('content')
    <section id="faq-section">
        <h1>---</h1>
        <h2>Frequently Asked Questions</h2>
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">What is PICKK?</button>
                <div class="faq-answer">
                    <p>PICKK is a website where users can discover, share, and save their favorite recipes. It allows users to explore a variety of culinary creations and upload their own recipes to share with the community.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How do I use PICKK?</button>
                <div class="faq-answer">
                    <p>To use PICKK, simply visit the website, create an account, and start browsing the available recipes. You can save your favorite recipes, share your culinary creations, and interact with other users.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How do I view recipes?</button>
                <div class="faq-answer">
                    <p>After signing up, you can browse recipes by category, ingredients, or popularity. You can also use the search bar to find specific recipes you're interested in.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How do I upload my recipes?</button>
                <div class="faq-answer">
                    <p>To upload your own recipes, go to the "Upload" section on the website, fill in the recipe details, including ingredients and instructions, and share your creation with the PICKK community!</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How do I save recipes?</button>
                <div class="faq-answer">
                    <p>To save your favorite recipes, click the "Save" button on any recipe page. All your saved recipes will be accessible from your profile for easy reference later.</p>
                </div>
            </div>

    <!--WELCOME SECTION-->
        <section id="welcome-section">
            <div class="welcome-container">
                <img src="/assets/images/welcome.jpg" alt="welcome image">
                    <div class="text-container cute-font">
                        <h2>HELP</h2>
                        <p>Your Go-To Platform for Tried-and-True Recipes</p>
                        <a href="/sign-up" class="button1">TRY IT FOR FREE</a>
                    </div>
            <div class="faq-item">
                <button class="faq-question">Are the recipes verified by experts?</button>
                <div class="faq-answer">
                    <p>The recipes are user-generated, and while not verified by experts, they are rated and reviewed by the community.</p>
                </div>
            </div>
        </section>
    <!--END OF WELCOME SECTION-->

@endsection
            <div class="faq-item">
                <button class="faq-question">Can I use PICKK without an account?</button>
                <div class="faq-answer">
                    <p>Yes, you can use the website without creating an account. But you will need to sign up to upload your own recipes and interact with other PICKK users.</p>
                </div>
            </div>
                <div class="faq-item">
                <button class="faq-question">Can I edit or delete my uploaded recipes on PICKK?</button>
                <div class="faq-answer">
                    <p>Yes, you can easily edit or delete any recipes you have uploaded to PICKK. Simply go to your profile, select the recipe you want to modify, and choose the "Edit" or "Delete" option. Editing allows you to update the ingredients, instructions, and other details, while deleting removes the recipe from the platform permanently.</p>
                </div>
            </div>
            <div class="faq-item">
            <button class="faq-question">Is there a mobile app for PICKK?</button>
            <div class="faq-answer">
                <p>Currently, PICKK is only available as a website. There are no plans to develop a mobile app for PICKK in the future.
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');
            faqQuestions.forEach(function(question) {
                question.addEventListener('click', function() {
                    const faqItem = this.closest('.faq-item'); 
                    const answer = faqItem.querySelector('.faq-answer'); 
                    document.querySelectorAll('.faq-item').forEach(function(item) {
                        if (item !== faqItem) {
                            item.querySelector('.faq-answer').classList.remove('active');
                            item.classList.remove('active');
                        }
                    });
                    if (answer.classList.contains('active')) {
                        answer.classList.remove('active'); 
                        faqItem.classList.remove('active'); 
                    } else {
                        answer.classList.add('active'); 
                        faqItem.classList.add('active'); 
                    }
                });
            });
        });
    </script>
@endsection