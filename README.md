# Chatbot
A lightweight PHP chatbot engine based on regular expression rules. 

## Eliza

This project implement descriptions from ELIZA--A Computer Program For the Study of Natural Language Communication Between Man and Machine [Joseph Weizenbaum, 1966] https://www.csee.umbc.edu/courses/331/papers/eliza.html

## Installation

Load this package into your php project using composer.

## Usage

```php
//initialise bot
$chatbot = new Jincongho\Chatbot\Engine;

//add rules using regular expression
//first param is regular pattern
//second param is an array of random reply
$chatbot->add_rule("/(.*)\bAm I\b(.*)/i", array(
    "Would you want to be $2?",
    "What would it mean if you were $2?"
));

//start conversation!
echo $chatbot->chat("Am I too young?");
```