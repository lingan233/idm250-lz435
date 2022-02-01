<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title><?php wp_title(); ?>
    </title>

    <?php
    // Link - https://developer.wordpress.org/reference/functions/wp_head/
    // Plugins and WordPress core use this function to insert crucial elements into your document (e.g., scripts, styles, and meta tags).
    // Always put wp_head() just before the closing tag of your theme
    wp_head();
    ?>
</head>

<body>

    <div id="navbar">
        <a href="#default" id="logo">Ling Zheng</a>
        <div class="hamburger-container">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <?php
        // Registered this menu in functions.php
        wp_nav_menu(['theme_location' => 'primary_menu']);
        // insert here some code for display menu 
        // find the codes in paul's repo
        ?>
    </div>
    <div class="content-filler">
    </div>