<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Progress Check</title>
    <?php
    include("index_2.php");

    ?>
</head>
<body>
</body>
<?php
$me=new clapton("<h1 style='font-size: 50px;text-decoration: underline'>Eric Clapton Pierce</h1>");
echo "<h1>Hi my Name is ... </h1>".$me->get_name()." What? My name is ".$me->get_name()."Who? My name is </h1>".$me->get_name();

?>
</html>