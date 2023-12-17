<?php
get_header();

while (have_posts()) {
    the_post();

    if (!is_page('players')) {
        ?>

        <main class="page-main">

            <section class="interior-page-section">
            <div class="sidebar">
            <h2 class="author-description">By</h2>
            <p class="interior-text">Joe Bloggs</p>
            <h2 class="Share">Share</h2>
            <div class="share-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                    </svg>
                </div>
         <p class="interior-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fugit itaque, dolore quos, hic libero recusandae facere et iste non laborum aspernatur saepe exercitationem similique dignissimos eum. Ex, et autem!</p> 
        </div>

                <div class="article">
                    <?php
                    $theParent = wp_get_post_parent_id(get_the_ID());
                    if ($theParent) { ?>
                        <div class="metabox">
                            <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i>Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?>
                                </span></p>
                        </div>
                    <?php }
                    ?>

                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <h2 class="page-intro">Don't forget to replace me later</h2>
                    <div class="interior-article-text">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="add-column">
            <div class="add-column-image-container">
                <a href="https://www.jparkers.co.uk/"><img class="add-column-image"src="<?php echo get_theme_file_uri('images/garden-center-advert.png'); ?>" alt="Description of Image 1"></a> 
                
              </div>
              <div class="add-column-image-container">
                <a href="#"><img class="add-column-image"src="<?php echo get_theme_file_uri('images/music-shop-advert.png'); ?>" alt="Description of Image 1"></a> 
                
              </div>
              <div class="add-column-image-container">
                <a href="#"><img class="add-column-image"src="<?php echo get_theme_file_uri('images/art-gallery-advert.png'); ?>" alt="Description of Image 1"></a> 
               
              </div>
        </div>

            </section>

        </main>

        <?php
    } else {
        ?> 
       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.typekit.net/uns4gwj.css">
    <title>Epona Records</title>
</head>
<body>  
      <div class="section-container">
        <div class="sponsor-container">
          <div class="horizontal-scrolling-items">
            <div class="sponsor-wrapper">
            <p class="sponsored-by-ptag">IN ASSOCIATION WITH</p>           
            <div class="reel-container">           
            <img class="player" src="<?php echo get_theme_file_uri('images/associate1.png'); ?>" alt="">
            <img class="player" src="<?php echo get_theme_file_uri('images/associate2.png'); ?>" alt="">      
            <img class="player" src="<?php echo get_theme_file_uri('images/associate 3.png'); ?>" alt="">
            <img class="player" src="<?php echo get_theme_file_uri('images/associate 4.png'); ?>" alt="">                    
            <img class="player" src="<?php echo get_theme_file_uri('images/associate 5.png'); ?>" alt="">
            <img class="player" src="<?php echo get_theme_file_uri('images/associate 6.png'); ?>" alt="">
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
      
        <section class="sponsor-section-container">
            <div class="sponsored-players">
              <div class="left-column">
                <p class="our-sponsored-players">OUR MUSICIANS</p>
                <h1 class="mantra">FOR THOSE WHO LOVE FOLK MUSIC, <span class="mantra-red">MAKE THAT EVERYTHING</span></h1>
              </div>
              <div class="right-column">
                <div class="player-container">
                  <div class="player-wrapper">
                  <img class="player" src="<?php echo get_theme_file_uri('images/joe_beard.png'); ?>" alt="">
                    <div class="svg-wrapper">
                      <a href="https://www.google.com" style="text-decoration: none;">
                        <svg class="facebook-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    <a href="https://www.google.com" style="text-decoration: none;">
                      <svg class="instagram-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>
                  </a>                
                  </div>
                    <h1 class="overlay-text">Joe Beard</h1>
                    <div class="player-info">
                      <p class="player-title">Folk Guitar PLayer</p>
                      <p class="player-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
                    </div>
                  </div>
                  <div class="player-wrapper">
                  <img class="player" src="<?php echo get_theme_file_uri('images/keith-hancock.jpeg'); ?>" alt="">
                    <div class="svg-wrapper">
                      <a href="https://www.google.com" style="text-decoration: none;">
                        <svg class="facebook-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    <a href="https://www.google.com" style="text-decoration: none;">
                      <svg class="instagram-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>
                  </a>          
                  </div>
                    <h1 class="overlay-text">Keith Hancock</h1>
                    <div class="player-info">
                      <p class="player-title">Folk Musician</p>
                      <p class="player-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
                    </div>
                  </div>
                  <div class="player-wrapper">
                    <img class="player" src="<?php echo get_theme_file_uri('images/tony-nyland.jpg'); ?>" alt="">
                    <div class="svg-wrapper">
                      <a href="https://www.google.com" style="text-decoration: none;">
                        <svg class="facebook-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    <a href="https://www.google.com" style="text-decoration: none;">
                      <svg class="instagram-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>
                  </a>
                  </div>
                    <h1 class="overlay-text">Tony Nyland</h1>
                    <div class="player-info">
                      <p class="player-title">Folk Musician</p>
                      <p class="player-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua.Ut enim ad minim veniam."</p>
                    </div>
                  </div>
                  <div class="player-wrapper">
                  <img class="player" src="<?php echo get_theme_file_uri('images/corvus.jpg'); ?>" alt="">
                    <div class="svg-wrapper">
                      <a href="https://www.google.com" style="text-decoration: none;">
                        <svg class="facebook-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    <a href="https://www.google.com" style="text-decoration: none;">
                      <svg class="instagram-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>
                  </a>
                  </div>
                    <h1 class="overlay-text">Corvus</h1>
                    <div class="player-info">
                      <p class="player-title">Folk Duo</p>
                      <p class="player-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mobile-player-wrapper">
                <div class="mobile-image-wrapper input-wrapper">
                    <input type="checkbox" id="imageToggle1">
                    <label for="imageToggle1">
                      <div class="player-div">
                        <img class="mobile-player"src="./images/joe_beard.png" alt="Player 1">
                      </div>
                        <h1 class="mobile-text-overlay">Joe Beard</h1>
                        <p class="mobile-player-title">Folk Guitarist </p>
                        <p class="mobile-player-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam omnis, 
                            fugiat quo odit veritatis illum commodi natus laudantium molestias, </p>
                    </label>
                </div>
                <div class="mobile-image-wrapper input-wrapper">
                    <input type="checkbox" id="imageToggle2">
                    <label for="imageToggle2">
                      <div class="player-div">
                        <img class="mobile-player" src="./images/keith-hancock.jpeg" alt="Player 2">
                      </div>
                        <h1 class="mobile-text-overlay">Keith Hancock</h1>
                        <p class="mobile-player-title">Folk Musician </p>
                        <p class="mobile-player-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam omnis, 
                            fugiat quo odit veritatis illum commodi natus laudantium molestias, </p>
                    </label>
                </div>
                <div class="mobile-image-wrapper input-wrapper">
                    <input type="checkbox" id="imageToggle3">
                    <label for="imageToggle3">
                        <div class="player-div">
                        <img class="mobile-player" src="./images/tony-nyland.jpg" alt="Player 3">
                      </div>
                        <h1 class="mobile-text-overlay">Tony Nyland</h1>
                        <p class="mobile-player-title">Folk Musician</p>
                        <p class="mobile-player-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam omnis, 
                            fugiat quo odit veritatis illum commodi natus laudantium molestias, </p>
                    </label>
                </div>
                <div class="mobile-image-wrapper input-wrapper">
                    <input type="checkbox" id="imageToggle4">
                    <label for="imageToggle4">
                      <div class="player-div">
                        <img class="mobile-player" src="./images/corvus.jpg" alt="Player 4">
                      </div>
                        <h1 class="mobile-text-overlay">Corvus</h1>
                        <p class="mobile-player-title">Folk Duo </p>
                        <p class="mobile-player-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam omnis, 
                            fugiat quo odit veritatis illum commodi natus laudantium molestias, </p>
                    </label>
                </div>
            </div>
            </div>
            
          </section>

          <section class="news-container">
            <div class="news">
              <p class="newstitle">NEWS</p>
              <div class="newsbox">
                <div class="box1">
                  <p class="date">14.09.23</p>
                  <p class="newscontent">Fairport Convention Headlines Festival </p>
                  <div class="read-article">
                    Read article
                    <a href="#">
                      <div class="arrow-container">
                        <div class="arrow-wrapper">
                          <div class="arrow-btn"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="box2">
                  <p class="date">14.09.23</p>
                  <p class="newscontent"><p class="newscontent">Fairport Convention Headlines Festival ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsumipsum ipsum ipsum ipsum</p>
                  <div class="read-article">
                    Read article
                    <a href="#">
                      <div class="arrow-container">
                        <div class="arrow-wrapper">
                          <div class="arrow-btn"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="box3">
                  <p class="date">14.09.23</p>
                  <p class="newscontent">Fairport Convention Headlines Festival </p>
                  <div class="read-article">
                    Read article
                    <a href="#">
                      <div class="arrow-container">
                        <div class="arrow-wrapper">
                          <div class="arrow-btn"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="box4">
                  <p class="date">14.09.23</p>
                  <p class="newscontent">Fairport Convention Headlines Festival </p>
                  <div class="read-article">
                    Read article
                    <a href="#">
                      <div class="arrow-container">
                        <div class="arrow-wrapper">
                          <div class="arrow-btn"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
   
</body>
</html>



        <?php
    }
}

get_footer();
?>








 