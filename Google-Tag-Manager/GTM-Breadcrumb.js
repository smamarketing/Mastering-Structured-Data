<script>
(function(){
	var jsondata = {
		
  "@context": "https://schema.org/",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://simplifiedsearch.net/s"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Structured Data Generator",
      "item": "https://simplifiedsearch.net/schema-examples/breadcrumb-markup/"
    }
  ]
};

var el = document.createElement ('script');
el.type = 'application/ld+json';
el.innerHTML = JSON.stringify(jsondata);
document.head.appendChild(el);
}) ();

</script>
