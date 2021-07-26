<?php

$html = '
      <head> 
         <title>DOM Manipulation</title>
      </head> 
   
      <body> 
         <h2>Course details</h2> 
      
         <table border = "0"> 
            <tbody> 
               <tr> 
                  <td>Android</td> 
                  <td>Gopal</td> 
                  <td>Sairam</td> 
               </tr> 
         
               <tr> 
                  <td>Hadoop</td> 
                  <td>Gopal</td> 
                  <td>Satish</td> 
               </tr> 
         
               <tr> 
                  <td>HTML</td> 
                  <td>Gopal</td> 
                  <td>Raju</td> 
               </tr> 
         
               <tr> 
                  <td>Web technologies</td> 
                  <td>Gopal</td> 
                  <td>Javed</td> 
               </tr> 
         
               <tr> 
                  <td>Graphic</td> 
                  <td>Gopal</td> 
                  <td>Satish</td> 
               </tr> 
         
               <tr> 
                  <td>Writer</td> 
                  <td>Kiran</td> 
                  <td>Amith</td> 
               </tr> 
         
               <tr> 
                  <td>Writer</td> 
                  <td>Kiran</td> 
                  <td>Vineeth</td> 
               </tr> 
            </tbody> 
         </table> 
      </body> 
   </html>';

//a new dom object
$dom = new DOMDocument;

//load the html into the object
//@ dile mone hoy warning gulo show kore na
@ $dom->loadHTML($html);


//the table by its tag name
$tables = $dom->getElementsByTagName('table');

//get all rows from the table but why item(0)???????????
$rows = $tables->item(0)->getElementsByTagName('tr'); //DOMNodeList object

//loop over the table rows
foreach ($rows as $row) {
    //get each column by tag name
    $cols = $row->getElementsByTagName('td');

    echo 'Courses :  ' . $cols->item(0)->nodeValue . '<br />';
    echo 'Manager: ' . $cols->item(1)->nodeValue . '<br />';
    echo 'Team: ' . $cols->item(2)->nodeValue;
    echo '<hr />';
}



/***
 *
 * get data from another website
 * modify html output of a website
 *
 ***/



// send a curl get request to get the html input

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://codingreflections.com/wordpress-programming-languages");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$html = curl_exec($ch);

// find all heading (h2) elements on the page

$dom = new DOMDocument();

@ $dom->loadHTML($html); //@ dile mone hoy warning gulo show kore

$h2s = $dom->getElementsByTagName('h2'); // DOMNodeList object

$h2_array = array();

foreach($h2s as $h2) {
    $title_text = $h2->textContent; //textContent->text define kore
    $h2_array[] = $title_text;
    echo $title_text . '<br>';
}

// find all links in the article

echo '<br><br>Links in the article<br><br>';

$articles = $dom->getElementsByTagName('article');

$article = $articles->item(0);

$links = $article->getElementsByTagName('a');

$fh = fopen("links.txt", "w");

foreach($links as $link) {
    $link_text = $link->textContent;
    $link_href = $link->getAttribute('href');
    echo $link_text . ' - Link: ' . $link_href;

    fwrite($fh, $link_text . ' - Link: ' . $link_href . "\n");
}

fclose($fh);


ob_start();

include 'templates/shop.html';

$html = ob_get_clean(); //output assign to a variable

/*
** parse html before outputting or saving
*/

// 1. inserting a new element into the document
// eg., find the no. of products and show it at the top

$dom = new DOMDocument();
@ $dom->loadHTML($html, LIBXML_HTML_NODEFDTD | LIBXML_HTML_NOIMPLIED);

$product_list = $dom->getElementById('product-list');

$xpath = new DOMXPath($dom);
$products = $xpath->query("//div[@id='product-list']/div"); // double slash mean all child & single slash mean direct child
//css equivalent to div#product-list > div
$count = $products->length;

$new_element = $dom->createElement('div', 'No. of products: ' . $count);
$product_list->parentNode->insertBefore($new_element, $product_list);

$new_element->setAttribute('class', 'alert alert-info');

// 2. delete an element from the document

$title = $xpath->query("//div[@class='container']//div[@class='col-lg-9']//h2");
// returns DOMNodeList
// JS equivalent - document.querySelectorAll('div.container .col-lg-9 h2')
$title_el = $title->item(0);

$title_el->parentNode->removeChild($title_el);

// save the new html

$html = @ $dom->saveHTML();

// finally, output the html

echo $html;




?>