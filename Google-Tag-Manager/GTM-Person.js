<script>
(function(){
	var jsondata = {
		
"@context": "https://schema.org/",
  "@type": "Person",
  "name": "Ryan Shelley",
  "url": "https://simplifiedsearch.net/person-markup/",
  "image": "https://simplifiedsearch.net/wp-content/uploads/2020/11/Ryan-Shelley-Head-Shot-Sqaure-300x300.jpg",
  "jobTitle": "CEO",
  "worksFor": {
    "@type": "Organization",
    "name": "Simplified Search"
  },
  "sameAs": [
    "https://youtube.com",
    "https://twitter.com",
    "https://linkedin.com"
  ]

};

var el = document.createElement ('script');
el.type = 'application/ld+json';
el.innerHTML = JSON.stringify(jsondata);
document.head.appendChild(el);
}) ();

</script>