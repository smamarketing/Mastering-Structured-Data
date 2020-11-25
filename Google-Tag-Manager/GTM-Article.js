<script>
(function(){
	var jsondata = {

"@context": "https://schema.org/",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://simplifiedsearch.net/schema-examples/article-markup/"
  },
  "headline": "Lorem Ipsum",
  "description": "SNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit…",
  "image": "https://simplifiedsearch.net/wp-content/uploads/2020/02/meeting.jpg",
  "author": {
    "@type": "Person",
    "name": "Ryan Shelley"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Simplified Search",
    "logo": {
      "@type": "ImageObject",
      "url": "https://simplifiedsearch.net/wp-content/uploads/2020/08/cropped-Simplified-Search-white.png"
    }
  },
  "datePublished": "2020-10-24",
  "dateModified": "2020-11-30"


};

var el = document.createElement ('script');
el.type = 'application/ld+json';
el.innerHTML = JSON.stringify(jsondata);
document.head.appendChild(el);
}) ();

</script>