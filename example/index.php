<?php

require '../vendor/autoload.php';

//initiliase engine
$engine = new Jincongho\Chatbot\Engine;

//load general and themed rules
$rules = array_merge(
    include 'rules/eliza.php',
    include 'rules/harrypotter.php',
    include 'rules/tech.php'
);
foreach($rules as $pattern => $reply)
    $engine->add_rule($pattern, $reply);

//rules for exceptions
$engine
    ->add_rule_empty(array(
        "Hey, don't be shy"
    ))
    ->add_rule_repeat(array(
        "Why do you repeat yourself?",
        "Ops, you've said that."
    ))
    ->add_rule_failed(array(
        "I see.",
        "What does that suggest you?",
        "I want to hear more!",
        "Please go on.",
        "Do you feel comfort about it?"
    ));

//maintain history of chatbot
session_start();
if(!isset($_SESSION['_chat']) && empty($_SESSION['_chat'])){
    $_SESSION['_chat'] = array(
        array('Eliza', 'Hello, I\'m Eliza. Are you troubled?')
    );
}

//input from user
if(isset($_POST['chatbox'])){
    $_SESSION['_chat'][] = array('Guest', $_POST['chatbox']);
    $_SESSION['_chat'][] = array('Eliza', $engine->chat(
        $_POST['chatbox'], 
        $_SESSION['_chat'][count($_SESSION['_chat'])-3][1]
    ));
}

include 'template.html';