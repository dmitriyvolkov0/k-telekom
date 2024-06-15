<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    
<header class="header">
    <div class="container">
        <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
        ?>
    </div>
</header>