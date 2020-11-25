<?php
/***Person Markup***/

function person_markup() {
    global $post;

    if( has_tag('person'))
    {

    $schema = array(
 
  "@context" => "https://schema.org/",
  "@type" => "Person",
  "name" => get_field('name'),
  "url" => get_field('url'),
  "image" => get_field('picture_url'),
  "jobTitle" => get_field('job_title'),
  "worksFor"=> array(
    "@type" => "Organization",
    "name" => get_field('company')
  ),
  "sameAs" => [
    get_field('twitter'),
    get_field('youtube'),
    get_field('linkedin')
  ]
 

  );

    	   echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
}};

add_action('wp_head', 'person_markup');

?>