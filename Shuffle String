<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ques 1</title>
</head>
<body> 
<form method="get" action="labda3submit.php">
   <h2>Please input the verb:</h2>
 <input type="text" name="name">
 <input type="submit" value="Find">
 </form>
<?php
$s = $_GET['name'];
$s=strtolower($s);
$x=0;$c=0;
$vowels = array('a','e','i','o','u');
while($x!=1){
$s=str_shuffle($s);
$y=substr($s,1,1);
if (in_array($y,$vowels))
{
echo "Yes the string now contains vowel as 2nd letter.<br> ";
echo "The string is: ", $s;
$x=1;
$c++;
}
else
{
    $c++;
}
}
echo "<br> The iteration rounds are: ",$c,"<br> ";
function count_Vowels($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
echo "The total count of vowels= ";
print_r(count_Vowels($s));
?>

</body>
</html>
