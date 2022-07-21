<?php
get_header();
?>

<?php the_content(); ?>

<div class="loginpage__background">    
     <div class="loginpage__logincontainer">
        <h1>Log in</h1>
        <p>Log in with your data that you recieved from the photographer</p>
        <form>
        <input type="text" placeholder="E-mail" class="input">
        <input type="text" placeholder="Password" class="input">
        <div class="loginpage__flexcontainer">
        <p class="loginpage__paraghraph">forgot password?</p>
        <button class="loginpage__button" type="submit">Log in</button>
        </div>

        </form>

     </div>
    </div>
 
<?php
get_footer();
