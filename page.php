<?php

get_header();

    while(have_posts()){
        the_post(); ?>
        
        <main>
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
        <div class="interior-page-image-container">
            <img class="interior-page-image" src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 1">
        </div>
        <h1 class="page-title"><?php the_title();?></h1>
        <h2 class="page-intro">Don't forget to replace me later</h2>
        <div class="interior-article-text">
           <?php the_content();?>
        </div>
            </div>
        <div class="add-column">
            <div class="add-column-image-container">
                <a href="#"><img class="add-column-image"src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 1"></a> 
                
              </div>
              <div class="add-column-image-container">
                <a href="#"><img class="add-column-image"src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 1"></a> 
                
              </div>
              <div class="add-column-image-container">
                <a href="#"><img class="add-column-image"src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 1"></a> 
               
              </div>
        </div>
    </section>


</main>

        <?php 
    }

get_footer();

?>