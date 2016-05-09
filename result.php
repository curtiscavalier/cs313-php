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
$t1 = $array[0] + "\n";
$t2 = $array[0] + "\n";
$t3 = $array[0] + "\n";
$t4 = $array[0] + "\n";
fwrite($file,$t1);
fwrite($file,$t2 );
fwrite($file,$t3 );
fwrite($file,$t4);
fclose($file);
?>
</body>
</html>