<?php
/***Article Markup***/

function article_markup() {
    global $post;

    if( has_tag('article'))
    {

    $schema = array(

  "@context" => "https://schema.org/",
  "@type" => "Article",
  "mainEntityOfPage" => array (

   "@type" => "WebPage",
   "@id" => get_field('id')
  ),

  "headline" => get_field('headline'),
  "description" => get_field('description'),
  "image" => get_field('image'),
  "author" => array(
    "@type" => "Person",
    "name" => get_field('name')
  ),
  "publisher" => array(
    "@type" => "Organization",
    "name" => get_field('name-publisher'),
    "logo" => array(
      "@type" => "ImageObject",
      "url" => get_field('url-logo')
    )
  ),
  "datePublished" => get_field('datepublished'),
  "dateModified" => get_field('datemodified')

);

    echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
}};

add_action('wp_head', 'article_markup');
?>
