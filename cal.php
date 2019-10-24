<?PHP
$x1 = $_POST['x1'];
$y1 = $_POST['y1'];
$x2 = $_POST['x2'];
$y2 = $_POST['y2'];
$onea = $y2 - $y1;
$twoa = $x2 - $x1;
$slope = $onea / $twoa;
$slopex = "". $slope ."X";
$xnew = -$x1;
$slopex1 = $slope * $xnew;
$sum = $slopex1 + $y1;
echo "Calculation Is Done";
echo "Slope: $slope";
echo "Equation of line: Y = $slopex + $sum";
?>
