<?php
/***Organizational Markup***/

function org_markup() {
    global $post;

    if( has_tag('org'))
    {

    $schema = array(
 
  "@context" => "https://schema.org",
  "@type" => get_field('organization_type'),
  "name" => get_field('name'),
  "url" => get_field('url'),
  "logo" => get_field('_logo_url'),
  "sameAs" => [
    get_field('facebook'),
    get_field('twitter'),
    get_field('youtube'),
    get_field('linkedin')
  ],
  "contactPoint" => [
    array(
      "@type" => "ContactPoint",
      "telephone" => get_field('telephone'),
      "contactType" => get_field('contact_type'),
      "areaServed" => get_field('areas_served'),
      "availableLanguage" => get_field('languages')
    ),
    array(
      "@type" => "ContactPoint",
      "email" => get_field('email'),
      "contactType" => get_field('contact_type'),
      "areaServed" => get_field('areas_served')
    )
  ]


  );

    	   echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
}};

add_action('wp_head', 'org_markup');

?>