<?php
/***Event Markup***/

function event_markup() {
    global $post;

    if( has_tag('event'))
    {
		$schema = array(


  "@context" => "https://schema.org",
  "@type" => "Event",
  "name" => get_field('event_name'),
  "description" => get_field('event_description'),
  "image" => get_field('event_image'),
  "startDate" => get_field('start_date'),
  "endDate" => get_field('end_date'),
  "performer" => array(
    "@type" => get_field('performer_type'),
    "name" => get_field('performer_name')
  ),
  "organizer"  => array(
  "@type" => "Organization",
  "name" => get_field('organizer_name'),
  "logo" => get_field('organizer_logo'),
  "url" => get_field('organization_url')
  ),
  "eventStatus" => "https://schema.org/EventScheduled",
  "eventAttendanceMode" => "https://schema.org/OnlineEventAttendanceMode",
  "location" => array(
    "@type" => "VirtualLocation",
    "url" => get_field('location_url')
  ),
  "offers" => [
    array(
      "@type" => "Offer",
      "name" => get_field('ticket_name'),
      "price" => get_field('ticket_price'),
      "priceCurrency" => get_field('currency'),
      "validFrom" => get_field('available_from'),
      "url" => get_field('ticket_url'),
      "availability" => get_field('availability')
)
  ]

  );

    	   echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
}};

add_action('wp_head', 'event_markup');

?>