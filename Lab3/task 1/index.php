<?php

//a.
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a.{2}b/i';
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
echo $count, "\n";