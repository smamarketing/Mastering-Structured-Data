<script>
(function(){
	var jsondata = {
		
"@context": "https://schema.org",
  "@type": "Event",
  "name": "SCHEMA EVENT",
  "description": "Join us as we come together to discuss everything Schema.org! From beginners to experts, there is room for everyone.",
  "image": "https://simplifiedsearch.net/wp-content/uploads/2020/11/Sunset-Party-Photo-Facebook-Event-Cover-1536x864.png",
  "startDate": "2024-06-10T09:00-11:00",
  "endDate": "2024-06-11T10:00-11:00",
  "performer": {
    "@type": "Person",
    "name": "Ryan Shelley"
  },
  "organizer" : {
  "@type": "Organization",
  "name": "Simplifed Search",
  "logo": "https://simplifiedsearch.net/wp-content/uploads/2020/08/cropped-Simplified-Search-white.png",
  "url": "https://simplifiedsearch.net"
  },
  "eventStatus": "https://schema.org/EventScheduled",
  "eventAttendanceMode": "https://schema.org/OnlineEventAttendanceMode",
  "location": {
    "@type": "VirtualLocation",
    "url": "simplifiedsearch.net/stream"
  },
  "offers": [
    {
      "@type": "Offer",
      "name": "Schema Event Reservation",
      "price": "0",
      "priceCurrency": "USD",
      "validFrom": "2020-11-23",
      "url": "simplifiedsearch.net/register",
      "availability": "https://schema.org/InStock"
    }
  ]

};

var el = document.createElement ('script');
el.type = 'application/ld+json';
el.innerHTML = JSON.stringify(jsondata);
document.head.appendChild(el);
}) ();

</script>