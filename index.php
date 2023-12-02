<?php get_header();?>

<main>
    <section class="homepage-section"id="section1">
    <div class="image-container">
            <a href="#"><img class="article-image" src="<?php echo get_template_directory_uri(); ?>/images/template.svg" alt="Description of Image 1"></a>
            <a href=""><p class="post-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nisi totam adipisci</p></a>
        </div>
        
        <div class="image-container">
            <a href="#"><img class="article-image" src="<?php echo get_template_directory_uri(); ?>/images/template.svg" alt="Description of Image 1"></a>
            <a href=""><p class="post-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nisi totam adipisci</p></a>
        </div>
        
        <div class="image-container narrower">
        <a href="#"><img class="article-image-narrower"  src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 3"></a>
          <a href=""><p class="post-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nisi totam adipisci</p></a>  
        </div>
        
        
    </section>

    <section class="homepage-section2"id="section2">
        <div class="image-container2">
            <a href="#"><img class="article-image2"src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 1"></a> 
            <a href="#"><p class="post-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nisi totam adipisci</p></a>  
        </div>
        
        <div class="image-container2">
            <a href="#"><img class="article-image2"src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 2"></a> 
           <a href="#"> <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing arum nesciunt?</p></a>
        </div>

        <div class="image-container2">
            <a href="#"><img class="article-image2"src="<?php echo get_theme_file_uri('images/template.svg'); ?>"alt="Description of Image 3"></a> 
          <a href="#"><p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing arum nesciunt?</p></a>  
        </div>
        
        <div class="image-container2 narrower2">
           <a href="#"><img class="article-image-narrower2"  src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 3"></a>  
        </div>
        
        
    </section>

    <section class="homepage-section3"id="section3">
    <div class="banner-container">
       <a href=""><img class="banner-image"src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 1"></a> 
    </div>
</section>
    <h1 class="category-title">Stories</h1>
    <hr>
    
    <section class="stories-section"id="section4">  
    <div class="image-container2">
       <a href="#"><img class="article-image2"src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 1"></a> 
       <a href="#"><p class="post-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nisi totam adipisci</p></a> 
    </div>
    
    <div class="image-container2">
       <a href="#"><img class="article-image2" src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 2"></a> 
       <a href="#"><p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing arum nesciunt?</p></a> 
    </div>

    <div class="image-container2">
      <a href="#"><img class="article-image2" src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 2"></a>  
       <a href="#"><p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing arum nesciunt?</p></a> 
    </div>
    </section>
</section>
<h1 class="category-title">Reviews</h1>
<hr>
    <section class="stories-section"id="section4">  
        <div class="image-container2">
          <a href=""> <img class="article-image2"src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 1"></a> 
           <a href=""><p class="post-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nisi totam adipisci</p></a> 
        </div>
        
        <div class="image-container2">
          <a href=""><img class="article-image2" src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 2"></a>  
           <a href=""><p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing arum nesciunt?</p></a> 
        </div>
    
        <div class="image-container2">
          <a href=""> <img class="article-image2" src="<?php echo get_theme_file_uri('images/template.svg'); ?>" alt="Description of Image 2"></a> 
          <a href=""><p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing arum nesciunt?</p></a>  
        </div>
        </section>



</main>

<?get_footer();

?>