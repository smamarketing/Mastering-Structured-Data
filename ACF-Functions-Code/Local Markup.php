<?php
/***Local Markup***/

function local_markup() {
    global $post;

    if( has_tag('local'))
    {


    $schema = array(

"@context" => "https://schema.org",
  "@type" => get_field('localbusiness-type'),
  "name" => get_field('name'),
  "image" => get_field('image_url'),
  "@id" => get_field('id_url'),
  "url" => get_field('url'),
  "telephone" => get_field('phone'),
  "address" => array(
    "@type" => "PostalAddress",
    "streetAddress" => get_field('street'),
    "addressLocality" =>  get_field('city'),
    "postalCode" =>  get_field('zip_code'),
    "addressCountry" =>  get_field('country'),
    "addressRegion" =>  get_field('stateprovinceregion'),
  ),
  "priceRange" => get_field('price_range'),
  "geo" => array(
    "@type" => "GeoCoordinates",
    "latitude" => get_field('latitude'),
    "longitude" => get_field('longitude')
  ),
  "sameAs" => [
    get_field('facebook'),
    get_field('twitter'),
    get_field('youtube'),
    get_field('linkedin')
  ],
  "openingHoursSpecification" => [
    array(
      "@type" => "OpeningHoursSpecification",
      "dayOfWeek" => [
        get_field('opening_hours_days_of_the_week')
      ],
      "opens" => get_field('opens'),
      "closes"=> get_field('closes')
    )
  ]

  );

    	   echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
}};

add_action('wp_head', 'local_markup');

?>