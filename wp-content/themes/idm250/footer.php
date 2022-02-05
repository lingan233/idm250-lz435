</main>

<div class="content-filler">
</div>

<div id="footer">
    <h1>Let's Connect!</h1>

    <?php wp_nav_menu(['theme_location' => 'footer_menu']);
    ?>
</div>

<?php
// Link - https://developer.wordpress.org/reference/fuctions/wp_head/
// Plugins and WordPress added using wp_footer function
// wp_footer is added before the closing </body> tag 

wp_footer();
?>



</body>

</html>