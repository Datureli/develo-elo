<?php
get_header();
?>

<div class="loginpage__background">
    <div class="loginpage__container">
        <h1 class="loginpage__h1">Log in</h1>
        <p class="loginpage_first-paragraph loginpage__align-paragraph">Log in with your data that you recieved from the photographer</p>
        <form>
            <input type="text" placeholder="E-mail" class="loginpage__input">
            <input type="text" placeholder="Password" class="loginpage__input">
            <div class="loginpage__flexcontainer">
                <p class="loginpage__second-paraghraph loginpage__align-paragraph">Forgot password?</p>
                <button class="loginpage__button" type="submit">Log in</button>
            </div>
        </form>
    </div>
</div>
 
<?php
get_footer();
