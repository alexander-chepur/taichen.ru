<?php
$xmlstr = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <url>
      <loc>http://taichen.ru/</loc>
      <lastmod></lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
</urlset>
XML;

$xml = new SimpleXMLElement($xmlstr);

$xml->url[0]->lastmod = date("Y")."-".date("m")."-".date("d"); 
header("Content-Type: text/xml");
echo $xml->asXML(); 
?>