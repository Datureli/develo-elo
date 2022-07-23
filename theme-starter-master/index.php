<?php
get_header();
?>
<section class="loginpage">
<div class="loginpage__background">
    <div class="loginpage__container">
        <h1 class="loginpage__h1">Log in</h1>
        <p class="loginpage_description loginpage__align-left">Log in with your data that you recieved from the photographer</p>
        <form>
            <input type="text" placeholder="E-mail" class="loginpage__input">
            <input type="text" placeholder="Password" class="loginpage__input">
            <div class="loginpage__flexcontainer">
                <p class="loginpage__remind-password loginpage__align-left">Forgot password?</p>
                <button class="loginpage__button" type="submit">Log in</button>
            </div>
        </form>
    </div>
</div>
</section>

 
<?php
get_footer();
