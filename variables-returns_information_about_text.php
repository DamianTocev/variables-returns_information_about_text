<?php

$text = "Rabbits, also known as bunnies or bunny rabbits, are small mammals in the family Leporidae (which also contains the hares) of the order Lagomorpha (which also contains the pikas). Oryctolagus cuniculus includes the European rabbit species and its descendants, the world's 305 breeds(1) of domestic rabbit. Sylvilagus includes 13 wild rabbit species, among them the seven types of cottontail. The European rabbit, which has been introduced on every continent except Antarctica, is familiar throughout the world as a wild prey animal and as a domesticated form of livestock and pet. With its widespread effect on ecologies and cultures, the rabbit is, in many areas of the world, a part of daily life-as food, clothing, a companion, and a source of artistic inspiration. Although once considered rodents, lagomorphs like rabbits have been discovered to have diverged separately and earlier than their rodent cousins and have a number of traits rodents lack, like two extra incisors.";

$char_count = strlen($text);
$word_count = str_word_count($text);
$rabbit_count = substr_count($text, "rabbit");
$Rabbit_count = substr_count($text, "Rabbit");
$Rabbits_count = substr_count($text, "Rabbits");

echo "<p>characters - $char_count</p>";
echo "<p>words - $word_count</p>";
echo "<p>rabbit - $rabbit_count</p>";
echo "<p>Rabbit - $Rabbit_count</p>";
echo "<p>Rabbits - $Rabbits_count</p>";

?>