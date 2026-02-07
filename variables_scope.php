<?php
echo "<h2>PHP Variables,Datatypes & Scope</h2>";
//string
$name="Jagadeeswari";
echo "string:".$name."<br>";
//integer
$id=220797;
echo "Integer:".$id."<br>";
//float
$percentage=85.6;
echo "Float:".$percentage."<br>";
//boolean
$isstudent=true;
echo "Boolean:";
echo $isstudent?"true":"false";
echo "<br>";
//Array
$subjects=array("CD","WT","DSP","COA","IOR");
echo "Array:";
print_r($subjects);
echo "<br><br>";
//local scope
function localfun(){
    $localvar="This is local variable";
    echo "local scope:".$localvar."<br>";
}
localfun();
//global scope
$globalvar="This is global variable";
function globalfun(){
    global $globalvar;
    echo "Global scope:".$globalvar."<br>";
}
globalfun();
//static scope
function staticfun(){
    static $count=0;
    $count++;
    echo "Static scope:".$count."<br>";
}
staticfun();
staticfun();
staticfun();
echo "<br><br>";
echo "<h2>PHP string funtions</h2>";
$foodstr="order delicious food online";
echo "<b>original string:</b>'$foodstr'<br><br>";
$userinput="online food";
echo "<b>userinput:</b>".$userinput;
echo "<br>";
echo "<h2>Basic String Functions</h2>";
echo "Length:".strlen($foodstr)."<br>";
echo "WordCount:".str_word_count($foodstr)."<br>";
echo "Reverse:".strrev($foodstr)."<br>";
echo "<h2>Case Conversions</h2>";
echo "Uppercase:".strtoupper($foodstr)."<br>";
echo "Lowercase:".strtolower($foodstr)."<br>";
echo "Ucfirst:".ucfirst(trim($foodstr))."<br>";
echo "Ucwords:".ucwords(trim($foodstr))."<br>";
echo "<br>";
echo "<h2>Search & Replace</h2>";
echo "Position of food:".strpos($foodstr,"food")."<br>";
echo "Replace 'online' with 'quickly':".str_replace("online","quickly",$foodstr)."<br>";
echo "<br>";
$title="    Welcome to AHA_EMI_RUCHI      ";
echo "Substring(0,12):".substr($title,0,12)."<br>";
echo "trim:".trim($title)."<br>";
echo "Left trim:".ltrim($title)."<br>";
echo "Right trim:".rtrim($title)."<br>";
echo "<br>";
echo "<h3>String Comparisions</h3>";
$order1="Biryani";
$order2="biryani";
echo "Strcmp():".strcmp($order1,$order2)."<br>";
echo "strcasecmp():".strcasecmp($order1,$order2)."<br>";
/*both strings are equal - 0
first string is smaller - -1
first dtring is greater- 1 */
echo "<h3>Special Characters & security</h3>";
$ordernote="<h4>Extra masala & spicy</h4>";
echo "htmlspecialchars():".htmlspecialchars($ordernote)."<br>";
echo "addslashes():".addslashes("Customer's cancelled the order")."<br>";

?>