<?php

$name = "yeSha pAteL";


// echo ucfirst($name);

///echo ucwords(strtolower($name));

// echo strlen($name);

// echo strrev($name);

$descrition = "*** FREE Professional Development Guide Included ***

Principals are often called the second most crucial in-school influencers (after teachers) of student learning. But what should the principal do in order to maximize student achievement? One of the best-known leadership authors in education, Fullan explains why the answer lies neither in micro-managing instruction nor in autonomous entrepreneurialism. He shows systematically how the principal's role should change, demonstrating how it can be done in short order, at scale.

Reveals the three key roles that administrators must play in today's schools
Explains how to choose the right versus wrong drivers of school success
Filled with action items to help implement Fullan's program effectively
Includes strategies that have been successfully field-tested in schools across the United States and Canada";

// echo str_shuffle($descrition);

// echo substr($descrition, 150);

// echo str_word_count($descrition);

// echo str_replace('***', '---', $descrition);


$fullName = "yogesh-D.-more";
$fullName1 = "yogesh-D.-more";

echo strcasecmp($fullName, $fullName1) ? 'Yes u r right' : 'Your wrong'; 
// print_r();

// print_r(explode("-", $fullName));


// echo "Hello World";
// $totalWords = str_word_count($descrition);

$wifiPassword = rtrim("rekha143.");

// echo strlen(md5($wifiPassword));

echo $encrypt =  base64_encode($wifiPassword);

echo "<hr/>".base64_decode($encrypt);
