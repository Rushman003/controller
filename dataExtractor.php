<?php
include_once("connector.php");
    // Loading the XML file
$xml=simplexml_load_file("intrusion.xml") or die("Error: Cannot create object");
echo $xml->DeviceIdentification[0]-> DeviceName ->DeviceType . "<br>";
echo $xml->Detention[1]->ID -> DetentionEvent; 
   /** $xml = simplexml_load_file("intrusion.xml");
    echo "<h2>".$xml->getName()."</h2><br />";
    foreach($xml->children() as $book)
    {
        echo "BOOK : ".$book->attributes()->id."<br />";
        echo "Author : ".$book->author." <br />";
        echo "Title : ".$book->title." <br />";
        echo "Genre : ".$book->genre." <br />";
        echo "Price : ".$book->price." <br />";
        echo "Publish Date : ".$book->publish_date." <br />";
        echo "Description : ".$book->description." <br />";
        echo "<hr/>";
    }**/
?>


<!--<?xml version="1.0"?>
<catalog>
   <book id="bk101">
      <author>Gambardella, Matthew</author>
      <title>XML Developer's Guide</title>
      <genre>Computer</genre>
      <price>44.95</price>
      <publish_date>2000-10-01</publish_date>
      <description>An in-depth look at creating applications
      with XML.</description>
   </book>
   <book id="bk102">
      <author>Ralls, Kim</author>
      <title>Midnight Rain</title>
      <genre>Fantasy</genre>
      <price>5.95</price>
      <publish_date>2000-12-16</publish_date>
      <description>A former architect battles corporate zombies,
      an evil sorceress, and her own childhood to become queen
      of the world.</description>
   </book>
</catalog>

-->