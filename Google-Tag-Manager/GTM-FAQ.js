<script>
(function(){
	var jsondata = {
		
"@context": "https://schema.org/",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is Schema.org",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Schema.org is a collaborative, community activity with a mission to create, maintain, and promote schemas for structured data on the Internet, on web pages, in email messages, and beyond."
      }
    },
    {
      "@type": "Question",
      "name": "Why is Structured Data Important?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Structured Data helps search engines better understand your content. Using a vocabulary like Schema.org can help your site to rank for rich features in search."
      }
    },
    {
      "@type": "Question",
      "name": "Who Should Use Schema.org?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Any website owner who wants to improve the machine readability of their site and earn rich features in search."
      }
    }
  ]

};

var el = document.createElement ('script');
el.type = 'application/ld+json';
el.innerHTML = JSON.stringify(jsondata);
document.head.appendChild(el);
}) ();

</script>