<?php
$xml_header = '<?xml version="1.0" encoding="UTF-8"?><Media></Media>';
$xml = new SimpleXMLElement($xml_header);

$node1 = $xml->addChild('books');
$node1->addAttribute('id', 'main');
$node1->addAttribute('name', 'book');

$subnode1 = $node1->addChild('book');
$subnode1->addAttribute('id', 'hp');
$subnode1->addAttribute('name', 'Harry Potter');

$inner_node2 = $subnode1->addChild('author');
$inner_node2->addAttribute('id', 'author_hp');
$inner_node2->addAttribute('name', 'JK Rowling');

$subnode2 = $node1->addchild('book');
$subnode2->addAttribute('id', 'lotr');
$subnode2->addAttribute('name', 'Lord of The Rings');

$inner_node1 = $subnode2->addChild('author');
$inner_node1->addAttribute('id', 'author_lotr');
$inner_node1->addAttribute('name', 'JRR Tolkien');

echo $xml->asXML('dummy_data2.xml');
