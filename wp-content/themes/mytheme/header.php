<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>CoffeeZee</title>

    <!-- showing wordpress head: admin bar -->
    <?php wp_head( )?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CoffeeZee</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarContent">
    
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'navbar-nav mr-auto'
                )
            );
        ?>
      
      <?php get_search_form( );?>
    
  </div>
</nav>