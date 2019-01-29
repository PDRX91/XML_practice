<?php
$xml_header = '<?xml version="1.0" encoding="UTF-8"?><Media></Media>';
$xml = new SimpleXMLElement($xml_header);

$node1 = $xml->addChild('books');
$node1->addAttribute('id', 'main');
$node1->addAttribute('name', 'book');

$subnode1 = $node1->addChild('book');
$subnode1->addAttribute('id', 'hp');
$subnode1->addAttribute('name', 'Harry Potter');

$inner_node1_1 = $subnode1->addChild('author');
$inner_node1_1->addAttribute('id', 'author_hp');
$inner_node1_1[0] = "JK Rowling";

$inner_node1_2 = $subnode1->addChild('title');
$inner_node1_2->addAttribute('id', 'title_hp');
$inner_node1_2[0] = "Harry Potter and the Deathly Hallows";

$subnode2 = $node1->addchild('book');
$subnode2->addAttribute('id', 'lotr');
$subnode2->addAttribute('name', 'Lord of The Rings');

$inner_node2_1 = $subnode2->addChild('author');
$inner_node2_1->addAttribute('id', 'author_lotr');
$inner_node2_1[0] = 'JRR Tolkien';

$inner_node2_2 = $subnode2->addChild('title');
$inner_node2_2->addAttribute('id', 'title_lotr');
$inner_node2_2[0] = 'Return of the King';

echo $xml->asXML('dummy_data2.xml');
