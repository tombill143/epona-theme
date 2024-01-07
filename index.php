<?php get_header();?>
<?php
global $post;
if (is_home() && $post->ID == get_option('page_for_posts')) {
    $posts_page_title = get_the_title($post->ID);
} else {
    $posts_page_id = get_option('page_for_posts');
    $posts_page_title = get_the_title($posts_page_id);
}
?>

<main>
    <section class="homepage-section"id="section1">
    <div class="image-container">
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Joe Beard at 70: Ten Essential Songs to Celebrate'))); ?>">
          <img class="article-image" src="<?php echo get_template_directory_uri(); ?>/images/Rectangle 26.png" alt="Description of Image 1">
        </a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Keith Hancock: A Musical Odyssey from Folk Stages to Saigon Streets'))); ?>">
          <p class="post-description">Joe Beard at 70: Ten Essential Songs to Celebrate</p>
        </a>
        </div>
        
        <div class="image-container">
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Keith Hancock: A Musical Odyssey from Folk Stages to Saigon Streets'))); ?>">
          <img class="article-image" src="<?php echo get_template_directory_uri(); ?>/images/kh-homepage.png" alt="Description of Image 1">
        </a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Keith Hancock: A Musical Odyssey from Folk Stages to Saigon Streets'))); ?>">
          <p class="post-description">Keith Hancock: A Musical Odyssey from Folk Stages to Saigon Streets</p>
        </a>
        </div>
        
        <div class="image-container narrower">
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('About Us'))); ?>"><img class="article-image-narrower"  src="<?php echo get_theme_file_uri('images/about-us-link.png'); ?>" alt="Description of Image 3"></a>
          <a href=""><p class="post-description"></a>  
        </div>
        
        
    </section>
            
    <section class="homepage-section2"id="section2">
        <div class="image-container2">
        <a href="<?php echo site_url('Album-Review:-A-walk-in-other-shoes'); ?>"><img class="article-image2"src="<?php echo get_theme_file_uri('images/homepage-image1-row2.png'); ?>" alt="Description of Image 1"></a> 
        <a href="<?php echo site_url('Album-Review:-A-walk-in-other-shoes'); ?>"><p class="post-description">Album Review: A walk in other Shoes </p></a>  
        </div>
        
        <div class="image-container2">
        <a href="<?php echo site_url('Folk-Radio'); ?>"><img class="article-image2"src="<?php echo get_theme_file_uri('images/folk-radio.png'); ?>" alt="Description of Image 2"></a> 
        <a href="<?php echo site_url('Folk-Radio'); ?>"><p class="post-description">Hear the Best New Folk Music on Folk Radio</p></a>
        </div>

        <div class="image-container2">
        <a href="<?php echo site_url('Happy-Christmas!-Essential-tracks-for-you-festive-collection'); ?>"><img class="article-image2"src="<?php echo get_theme_file_uri('images/epona-promo-pic2.jpeg'); ?>"alt="Description of Image 3"></a> 
        <a href="<?php echo site_url('Happy-Christmas!-Essential-tracks-for-you-festive-collection'); ?>"><p class="post-description">Happy Christmas! Essential tracks for you festive collection</p></a>  
        </div>
        
        <div class="image-container2 narrower2">
           <a href="https://www.urmston-bookshop.co.uk/"><img class="article-image-narrower2"  src="<?php echo get_theme_file_uri('images/Urmston_Bookshop_logo.jpg'); ?>" alt="Description of Image 3"></a>  
        </div>
        
        
    </section>

    <section class="homepage-section3"id="section3">
    <div class="banner-container">
       <a href="https://www.folknorthwest.co.uk/"><img class="banner-image"src="<?php echo get_theme_file_uri('images/folk-banner.png'); ?>" alt="Description of Image 1"></a> 
    </div>
</section>
    <h1 class="category-title">Stories</h1>
    <hr>
    
    <section class="stories-section"id="section4">  
    <div class="image-container2">
    <a href="<?php echo site_url('Happy-Christmas!-Essential-tracks-for-you-festive-collection'); ?>"><img class="article-image2"src="<?php echo get_theme_file_uri('images/christmas.png'); ?>" alt="Description of Image 1"></a> 
    <a href="<?php echo site_url('Happy-Christmas!-Essential-tracks-for-you-festive-collection'); ?>"><p class="post-description">Happy Christmas! Essential 
tracks for you festive collection</p></a> 
    </div>
    
    <div class="image-container2">
    <a href="<?php echo site_url('Alderley-Edge:-Unveiling-the-Legends,-Myth,-Magic,-and-Adventure'); ?>"><img class="article-image2" src="<?php echo get_theme_file_uri('images/alderley-edge.png'); ?>" alt="Description of Image 2"></a> 
    <a href="<?php echo site_url('Alderley-Edge:-Unveiling-the-Legends,-Myth,-Magic,-and-Adventure'); ?>"><p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing arum nesciunt?</p></a> 
    </div>

    <div class="image-container2">
    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Harmony for Hope: The Folk-Tuned Tale of ‘The Children’sParty Album in 1987'))); ?>"><img class="article-image2" src="<?php echo get_theme_file_uri('images/children-in-need.png'); ?>" alt="Description of Image 2"></a>  
    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Harmony for Hope: The Folk-Tuned Tale of ‘The Children’sParty Album in 1987'))); ?>"><p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing arum nesciunt?</p></a> 
    </div>
    </section>
</section>
<h1 class="category-title">Reviews</h1>
<hr>
    <section class="stories-section"id="section4">  
        <div class="image-container2">
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Album Review: Keith Hancock-This World We Live In'))); ?>"><img class="article-image2"src="<?php echo get_theme_file_uri('images/keith-hancock-review.png'); ?>" alt="Description of Image 1"></a> 
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Album Review: Keith Hancock-This World We Live In'))); ?>"><p class="post-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nisi totam adipisci</p></a> 
        </div>
        
        <div class="image-container2">
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Album Review: Rebec-Ayres That Meads And Pastures Fill'))); ?>"><img class="article-image2" src="<?php echo get_theme_file_uri('images/rebec-review.png'); ?>" alt="Description of Image 2"></a>  
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Album Review: Rebec-Ayres That Meads And Pastures Fill'))); ?>"><p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing arum nesciunt?</p></a> 
        </div>
    
        <div class="image-container2">
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Tom Shepley Band - How Do YouDo'))); ?>"><img class="article-image2" src="<?php echo get_theme_file_uri('images/tom-shepley-review.png'); ?>" alt="Description of Image 2"></a> 
          <a href=""><p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing arum nesciunt?</p></a>  
        </div>
        </section>



</main>

<?get_footer();

?>