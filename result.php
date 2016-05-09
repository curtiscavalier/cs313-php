<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <title>result</title>

    </head>

    <body>
    <?php
    include "libchart/libchart/classes/libchart.php";
    $chart = new VerticalBarChart(500, 250);
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
$array[0] = ($array[0]+$happy);
$array[1] = ($array[1] + $hunger);
$array[2] = ($array[2] + $car);
$array[3] = ($array[3] +$student);
$dataSet = new XYDataSet();
$dataSet->addPoint(new Point("happy", $array[0]));
$dataSet->addPoint(new Point("hunger", $array[1]));
$dataSet->addPoint(new Point("car", $array[2]));
$dataSet->addPoint(new Point("student", $array[3]));
$chart->setDataSet($dataSet);
$chart->setTitle("Monthly usage for www.example.com");
$chart->render("generated/demo1.png");

?>
</body>
</html>