<!DOCTYPE html>
<html>

<head>
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <header class = "sticky-top">
    <!-- <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
    </ul> -->
    <?php wp_nav_menu (

      array(

        "theme_location" => "top-menu",
        "menu_class" => "navigation"
      )
      );?>


    </header>