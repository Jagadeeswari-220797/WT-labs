<?php
$str="hello world";
$length=strlen($str);
echo $length."<br>";
$string='web technology';
echo strlen($string)."<br>";
$pattern="php string functions in web technology";
echo str_word_count($pattern)."<br>";
$str1="rgukt nuzvid";
echo strtoupper($str1)."<br>";
$st="India capital is delhi";
echo strrev($st)."<br";
$str2="swiss cheese model";
echo strpos($str2,"cheese")."<br>";
echo str_replace("1st","2nd",$str2)."<br>";
$st1="                   iiit nuzvid             ";
echo trim($st1)."<br>";
print_r(explode(" ",$st1));
