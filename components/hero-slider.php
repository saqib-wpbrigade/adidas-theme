<?php

/*
    * Theme functions and definitions
    *
    * @package Adidas_Theme
    *
*/


?>


<div class="hero-section">
    <div class="slider-arrows">
      <!-- <img src="img/hero-slider-leftt-arrow.png" class="previous">
      <img src="img/hero-slider-right-arrow.png" class="next"> -->
    </div>
    
    <div class="container">
    
      <div class="slider">
        <div class="hero-content">
          <h1>
          <?php  
            $hero_title = get_option('slider_title');
            echo $hero_title;
           ?></h1>
          <p>
          <?php  
            $hero_description = get_option('slider_description');
            echo $hero_description;
           ?>
          </p>
        </div>
        <div class="image-box">
          
        <?php  
$hero_image = get_option('slider_image_url');
var_dump($hero_image);

if (!empty($hero_image) && filter_var($hero_image, FILTER_VALIDATE_URL)) {
    echo '<img src="' . esc_url($hero_image) . '" />';
} else {
    echo 'No valid image URL found.';
}




?>

          <!-- <img src="" /> -->
<?php
$hero_video_link = get_option('slider_video_link');

if (!empty($hero_video_link) && filter_var($hero_video_link, FILTER_VALIDATE_URL)) {
  echo '<a href="' . esc_url($hero_video_link) . '" data-fancybox data-type="iframe" data-preload="false" data-width="840" data-height="580">';
  echo '<img src="' . get_template_directory_uri() . '/assets/img/play-icon.png" class="play-icon" />';
  echo '</a>';
  
} else {
    echo 'No valid video URL found.';
}
?>
          <!-- <a href="https://youtu.be/DHnHpHkwqs4" data-fancybox data-type="iframe" data-preload="false" data-width="840"
            data-height="580"><img href="#" src="img/play-icon.png" class="play-icon" /></a> -->
        </div>
      </div>

    </div>

  </div>


  