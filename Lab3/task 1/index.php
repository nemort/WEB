<?php

//a.
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a.{2}b/i';
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
echo $count, "\n";

//b.
$str = 'a1b2c3';
$regexp = '/[0-9]+/';
$result = preg_replace_callback($regexp, function($match) {return $match[0]**3;}, $str);
echo $result;