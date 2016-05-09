<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <title>result</title>

    </head>

    <body>
    <?php
    $happy = $_POST['happy'];
    $hunger = $_POST['hunger'];
    $car = $_POST['car'];
    $student = $_POST['student'];
    $var = 0;
    $result = fopen("result.txt","r") or die("Unable to open file");
while(!feof($result)){
   $array[$var] = fgets($result);
   $var ++;
}
fclose($result);
$array[0] = ($array[0]+$happy);
$array[1] = ($array[1] + $hunger);
$array[2] = ($array[2] + $car);
$array[3] = ($array[3] +$student);
echo "<center>Result</center>";
echo "<br/><center>People who are happy: ". $array[0] ."</center>";
echo "<br/><center>People who are happy: ". $array[1] ."</center>";
echo "<br/><center>People who are happy: ". $array[2] ."</center>";
echo "<br/><center>People who are happy: ". $array[3] ."</center>";
$file = fopen("result.txt","w") or die("can't open fine");
$array[0] = $array[0] + "\n";
$array[1] = $array[0] + "\n";
$array[2] = $array[0] + "\n";
$array[3] = $array[0] + "\n";
fwrite($file,$array[0]);
fwrite($file,$array[1] );
fwrite($file,$array[2] );
fwrite($file,$array[3] );
fclose($file);
?>
</body>
</html>