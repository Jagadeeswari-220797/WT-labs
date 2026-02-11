<?php
// --------Task-02----------
/*echo "<h2>PHP File Funtions</h3>";
// fopen()  fread() fclose()
$file="files.txt";
echo "<h3>FILE CONTENTS:";
$fp=fopen($file,"r");
echo fread($fp,filesize($file));
fclose($fp);
// fwrite()
$fw=fopen($file,"a");
fwrite($fw,"\nLearning php file handling");
fclose($fw);
//file_get_contents()
echo "<h3>file_get_contents()</h3>";
echo file_get_contents($file);
echo "<br>";
echo "<h3>file_put_contents()</h3>";
// if file doesn't exist then it will create and write .if file exist the it overwrites the data.for without overwrites the content we will use FILE_APPEND
echo file_put_contents("files.txt","web technologies",FILE_APPEND);
echo "<h3>file()</h3>";
print_r(file($file));
// ------file information------
echo "<h3>File information</h3>";
echo "Exists:".file_exists($file)."<br>";
echo "Size:".filesize($file)."bytes <br>";
echo "Type:".filetype($file)."<br>";
echo "Access Time:".date("d-m-Y H:i:s",fileatime($file))."<br>";
echo "Modified Time:".date("d-m-Y H:i:s",filemtime($file))."<br>";
echo "Created Time:".date("d-m-Y H:i:s",filectime($file))."<br>";
echo "Permissions:".fileperms($file)."<br>";
echo "Owner:".fileowner($file)."<br>";
echo "Group:".filegroup($file)."<br>";
echo "Inode:".fileinode($file)."<br>";
//--------file & folder management----------
copy($file,"copy.txt");
rename("copy.txt","renamed.txt");
echo "<br>Is File:";
var_dump(is_file("renamed.txt"));
mkdir("demo");
echo "<br>Is directory:";
var_dump(is_dir("demo"));
//-------director handling--------
echo "<h3>scandir()</h3>";
print_r(scandir("."));// scandir() is used for printing all files/folders in current directory in a array format by using print_r()
$dir=opendir(".");// . means current directory
while($f=readdir($dir)){
    echo $f."<br>";
}
closedir($dir);
echo "<br>current directory:".getcwd();// for display ing the current directory path
//chdir("demo"); // for changing the directory
//echo "<br>Now current directory:".getcwd();
//------file locking------
$lock=fopen($file,"a");
flock($lock,LOCK_EX);
fwrite($lock,"\nFile Locked successfully");
flock($lock,LOCK_UN);
fclose($lock);
// open file -> lock file -> write data -> unlock ->close ---(file locking process)
// LOCK_EX- Exclusive lock (writing)
//LOCK_SH -shared lock (reading)
// LOCK_UN- unlock
//------cleanup-----
unlink("renamed.txt");// file is permanently deleted. file recovery is not possible
rmdir("demo");// deletes if the folder is empty.otherwise we dosn't delete.
echo "<br>current directory:"getcwd();*/


//-------Task-03--------
/*echo "<h3>PHP file operation modes</h3>";
echo "<h3> w mode</h3>";
$fp=fopen("w.txt","w");
fwrite($fp,"Written using w mode");
fclose($fp);
echo "w.txt created successfully";
echo "<h3> r mode</h3>";
$fp=fopen("w.txt","r");
echo fread($fp,filesize("w.txt"));
fclose($fp);
echo "<h3> a mode</h3>";
$fp=fopen("w.txt","a");
fwrite($fp,"\n appended using a mode");
fclose($fp);
echo "\n appended text";
echo "<h3> r+ mode</h3>";
$fp=fopen("w.txt","r+");
//fseek($fp,0); // for moving the cursor towards front   fseek(filename,position)
rewind($fp); // this is also same as fseek()
echo fread($fp,filesize("w.txt"));
fclose($fp);
echo "<h3>w+ Mode</h3>";
$fp = fopen("wp.txt","w+");
fwrite($fp,"Written by w+");
rewind($fp);
echo fread($fp,filesize("wp.txt"));
fclose($fp);
echo "<h3>a+ Mode</h3>";
$fp = fopen("ap.txt","a+");
fwrite($fp,"\nAdded by a+");
rewind($fp);
echo fread($fp,filesize("ap.txt"));
fclose($fp);
echo "<h3>x Mode</h3>";
$fp = fopen("xfile.txt","x");
fwrite($fp,"Created using x mode");
fclose($fp);
echo "xfile.txt created<br>";
echo "<h3>x+ Mode</h3>";
$fp = fopen("xpfile.txt","x+");
fwrite($fp,"Created by x+");
rewind($fp);
echo fread($fp,filesize("xpfile.txt"));
fclose($fp);*/

?>
