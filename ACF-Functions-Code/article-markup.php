<?php
/***Video Markup***/

function video_markup() {
    global $post;

    if( has_tag('video'))
    {

    $schema = array(
 
  "@context" => "https://schema.org",
  "@type" => "VideoObject",
  "name" => get_field('name'),
  "description" => get_field('videos_description'),
  "thumbnailUrl" => [
    get_field('thumbnail_image')
  ],
  "uploadDate" => get_field('date_published'),
  "contentUrl" => get_field('content_url'),
  "embedUrl" => get_field('embed_url'),
  "publisher" => array(
    "@type" => "Organization",
    "name" => get_field('publisher'),
    "logo" => array(
      "@type" => "ImageObject",
      "url" => get_field('publisher_logo_url'),
      "width" => get_field('logo_width'),
      "height" => get_field('logo_height')
    )
  ),
  "duration" => get_field('duration')

  );

    	   echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
}};

add_action('wp_head', 'video_markup');

?>
