<?php

namespace Jincongho\Chatbot;

class Engine
{

    /**
     * Array of Regular Expression Rules 
     * used to match input text
     */
    protected $rules = array();

    /**
     * Choice of reply when input is empty
     *
     */
    protected $rules_empty = array();

    /**
     * Choice of reply when input repeat last one
     *
     */
    protected $rules_repeat = array();

    /**
     * Choice of reply when no pattern is matched
     *
     */
    protected $rules_failed = array();

    /**
     * Input a sentence and get reply
     * 
     * @var $text string
     * @var $last string Last input text to detect repeat
     * @return reply sentence from robot
     */
    public function chat($text, $last = null)
    {
        //when input is empty
        if(empty($text) || $text == null) {
            if(count($this->rules_empty) > 0) 
                return $this->rules_empty[array_rand($this->rules_empty)];
        //when input is repeating
        }elseif(isset($last) && ($text == $last)){
            if(count($this->rules_repeat) > 0)
                return $this->rules_repeat[array_rand($this->rules_repeat)];
        //valid input
        }else{
            //loop through rules
            foreach($this->rules as $pattern=>$replace){
                if(preg_match($pattern, $text))
                    return preg_replace($pattern, $replace[array_rand($replace)], $text);
            }

            //did not match any pattern
            if(count($this->rules_failed) > 0)
                return $this->rules_failed[array_rand($this->rules_failed)];
        }
    }

    /**
     * Add a rule
     *
     * @var $pattern string A regular expression
     * @var $reply array
     */
    public function add_rule($pattern, $reply = array())
    {
        $this->rules[$pattern] = $reply;

        return $this;
    }

    /**
     * Choice of reply when input is empty
     *
     * @var $reply array 
     */
    public function add_rule_empty($reply = array())
    {
        $this->rules_empty = $reply;

        return $this;
    }

    /**
     * Choice of reply when input repeat
     *
     * @var $reply array 
     */
    public function add_rule_repeat($reply = array())
    {
        $this->rules_repeat = $reply;

        return $this;
    }

    /**
     * Choice of reply when no rule matched input
     *
     * @var $reply array 
     */
    public function add_rule_failed($reply = array())
    {
        $this->rules_failed = $reply;

        return $this;
    }

}