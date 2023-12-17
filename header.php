<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width", initial-scale="1">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/3B4A3F-name@4x 3.ico" type="image/x-icon">
  <script src="<?php echo get_template_directory_uri() . '/script.js'; ?>" defer></script>
  <?php wp_head();?>
</head>
<body>
<header>
    <div class="icon-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
            </svg>
      </div>      
    <a href="<?php echo site_url()?>"><img class="header-logo" src="<?php echo get_theme_file_uri('images/3fd0a12b635356f072776a8e341e9f1d.png'); ?>" alt=""></a> 

    <nav>
        <ul class="middle-nav-container">
            <li class="left-container menu"><svg viewbox="0 0 100 100">
                <rect x="10" y="15" width="80" height="10"/>
                <rect x="10" y="45" width="80" height="10"/>
                <rect x="10" y="45" width="80" height="10"/>
                <rect x="10" y="75" width="80" height="10"/>
            </svg> <span class="menu-text">Menu</span></li> 
            <li class="nav-item middle-nav"><a href="#" class="hover-home"><li class="nav-item middle-nav">
                <a href="<?php echo site_url()?>" class="hover-home">
                    <img class="hover-image-home" src="<?php echo get_theme_file_uri('/images/home.svg'); ?>" alt="">
                </a>
            </li></a></li>
            <li class="nav-item middle-nav"><a href="<?php echo site_url('shop')?>" class="hover-shop"><img class="hover-image-shop" src="<?php echo get_theme_file_uri('/images/shop.svg'); ?>"  alt=""></a></li>
            <li class="nav-item middle-nav"><a href="<?php echo site_url('player')?>" class="hover-player"><img class="hover-image-player" src="<?php echo get_theme_file_uri('/images/player.svg'); ?>" alt=""></a></li>
            <li class="right-nav"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" alt="r"/>
            </svg></a></li>
        </ul>
    </nav>
</header>
