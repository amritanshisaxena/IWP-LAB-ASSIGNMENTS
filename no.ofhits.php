<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ques 3</title>
</head>
<body style="margin: 0 auto;width: 50%">
<div>
<?php
    echo "Welcome Amritanshi !","<br>";
    $hits = 0;
    if(isset($_COOKIE['hits'])){
        $hits = $_COOKIE['hits'];
        $hits ++;
    }
    setcookie('hits', $hits,  time()+3600*24);
    echo "No. of hits of domain page is <b>".$hits."</b>";
   
?>
</div>
</body>
</html>
