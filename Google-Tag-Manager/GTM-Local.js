<script>
(function(){
	var jsondata = {
		
"@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Simplified Search",
  "image": "https://simplifiedsearch.net/wp-content/uploads/2020/06/Simplified-Search-small-web.png",
  "@id": "https://simplifiedsearch.net/local-markup/",
  "url": "https://simplifiedsearch.net/",
  "telephone": "(855) 555-5555",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "555 Main Street",
    "addressLocality": "Home Town",
    "postalCode": "32901",
    "addressCountry": "US",
    "addressRegion": "Florida"
  },
  "priceRange": "$$",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "28.094820078560524",
    "longitude": "-80.6055697090234"
  },
  "sameAs": [
    "https://facebook.com",
    "https://youtube.com",
    "https://linkedin.com",
    "https://twitter.com"
  ],
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "08:00",
      "closes": "17:00"
    }
  ]

};

var el = document.createElement ('script');
el.type = 'application/ld+json';
el.innerHTML = JSON.stringify(jsondata);
document.head.appendChild(el);
}) ();

</script>