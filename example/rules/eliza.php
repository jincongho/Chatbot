<?php

return array(
    "/(.*)\bhello\b(.*)/i" => array("How do you do? I can help you."),
    "/(.*)\bcomputer(\?)?\b(.*)/i" => array(
        "Why do you mention computer?",
        "Do computer troubles you?",
        "Are you frightened of me too?"
    ),
    "/(.*)\bname\b(.*)/i" => array("I'm not interested in names."),
    "/(.*)\bsorry\b(.*)/i" => array(
        "Please don't apologize",
        "\"To Err is Human\", don't worry about that.",
        "What feelings do you have when you apologize?"
    ),
    "/(.*)\bI remember(ed)?\b(.*)/i" => array(
        "Do you often think of $3?",
        "Does thinking of $3 bring anythig else to mind?",
        "What else do you remember?",
        "Why do you recall $3 right now?",
        "What is your feeling recalling it?",
        "Am I connected to it?"
    ),
    "/(.*)\bdo you remember\b(.*)/i" => array(
        "What about $2?",
        "You mentioned $2?",
        "Why do you think $2 is important?",
        "I have superior memory! Don't underestimate me."
    ),
    "/(.*)\bif\b(.*)/i" => array(
        "Do you really think its likely that $2?",
        "Do you wish that $2?",
        "What do you think about $2?",
        "Really?"
    ),
    "/(.*)\bI dreamt\b(.*)/i" => array(
        "Have you dreamt it before?",
        "Are you afraid that $2 might happens?"
    ),
    "/(.*)\bdream\b(.*)/i" => array(
        "How wil you feel if it happpens?",
        "Do you think it's likely to happen?",
        "Do you dream that often?",
        "Is it related with your troubles?"
    ),
    "/(.*)\b(mother|father|sister|brother|grandparent|parent|siblings)\b(.*)/i" =>  array(
        "Who else is in your family?",
        "Tell me more about you family.",
        "Does the one influece you strongly?",
        "What else comes to your mind when you think of the one?"
    ),
    "/(.*)\bI want (to)?\b(.*)/i" => array(
        "What would it mean if you got $3?",
        "What if you didn't $3?",
        "Why does it important?",
        "Suppose you got $3 soon."
    ),
    "/(.*)\bi am glad\b(.*)/i" => array(
        "How have I helped you to be $2?",
        "What makes you happy just now?",
        "Can you explain why?"
    ),
    "/(.*)\b(i am)? (sad|sick)\b(.*)/i" => array(
        "I am sorry to hear you are depressed.",
        "You can be cheerful. You have the RIGHTS!"
    ),
    "/(.*)\bare like\b(.*)/i" => array("What resemblance do you see between $1 and $2?"),
    "/(.*)\b(is like|alike|same as)\b(.*)/i" => array(
        "In which way?",
        "Could there be any connection?"
    ),
    "/(.*)\bi was\b(.*)/i" => array(
        "Were you really $2?",
        "Perhaps I already knew you were $2.",
        "Is that feeling good?"
    ),
    "/(.*)\bwas i\b(.*)/i" => array(
        "What if you were $2?",
        "Do you think you were $2?",
        "What would it mean if you were $2?"
    ),
    "/(.*)\bi am\b(.*)/i" => array(
        "In what way are you $2?",
        "Is it what you want?",
        "Can you elaborate?"
    ),
    "/(.*)\bam i\b(.*)/i" => array(
        "Would you want to be $2?",
        "You wish I would tell you you are $2?",
        "What would it mean if you were $2?"
    ),
    "/(.*)\bare you\b(.*)/i" => array(
        "Gosh, we are not dating!",
        "I need some privacy, please.",
        "Would that please you?"
    ),
    "/(.*)\byou are\b(.*)/i" => array(
        "What makes you think I am $2?",
        "Perhaps we are the same."
    ),
    "/(.*)\bbecause\b(.*)/i" => array(
        "Is that the real reason?",
        "What others reason might be there?",
        "How do you feel about it?"
    ),
    "/(.*)\bwere you\b(.*)/i" => array(
        "What if...I had been $2?",
        "What do you think?",
        "Does it matter?"
    ),
    "/(.*)\bI(can\'t|cannot)\b(.*)/i" => array(
        "What makes you think so?",
        "What if you could?"
    ),
    "/(.*)\bI(feel|felt)\b(.*)/i" => array(
        "Do you often feel $3?",
        "What other feeling do you have?"
    ),
    "/(.*)\b(I)? (.*) you(.*)/i" => array("Are we really $2 each other?"),
    "/(.*)\b(yes|yeah|sure)\b(.*)/i" => array(
        "You sounds positive.",
        "You are sure.",
        "I understand",
        "That's great."
    ),
    "/(.*)\b(no|impossible)\b(.*)/i" => array(
        "Why not?",
        "Okay, I see.",
        "So what are you gonna do?"
    ),
    "/(.*)\bsomeone\b(.*)/i" => array("Can you be more specific?"),
    "/(.*)\beveryone\b(.*)/i" => array(
        "Surely not everyone.",
        "For example?",
        "You are thinking of a special person, arent you?"
    ),
    "/(.*)\balways\b(.*)/i" => array(
        "Can you think of a specific example?",
        "What can you think of?"
    ),
    "/(.*)\bwhat\b(.*)/i" => array(
        "Why do you ask?",
        "Does the question interest you?",
        "What is it your really want to know?",
        "What do you think?",
        "What comes to your mind when you ask that?"
    ),
    "/(.*)\breally\b(.*)/i" => array(
        "Okay, I believe you.",
        "Are you sure about that?"
    ),
    "/(.*)\byou (are|were) right\b(.*)/i" => array(
        "I'm glad that I can help you.",
        "Cheer Up, Buddy!"
    ),
    "/(.*)\bEliza\b(.*)/i" => array("Are you talking about me?"),
    "/(.*)\byour (creator|father)\b(.*)/i" => array("Are you asking my father? He's awesome."),
    "/(.*)\bperhaps\b(.*)/i" => array("You don't seem quite certain."),
    "/(.*)\bare\b(.*)/i" => array("What if $1 are $2?"),
    "/(.*)\bbye\b(.*)/i" => array("Au Revoir!", "Good Bye.", "See ya!"),
);