<!DOCTYPE html>

<html>
<head>
<title>QTL_ID_Result</title>

</head>
<body id="top">

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qtl_tomato";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$key=$_POST["QTL_ID"];
$sql = "SELECT * FROM tomato_qtl WHERE QTL_ID = '$key'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
{
 $special=mysqli_fetch_array($result,MYSQLI_ASSOC);       
$a=$special['QTL_ID'];
$c=$special['Trait'];
$d=$special['METHOD'];
$e=$special['CHROMOSOME'];
$f=$special['MARKER_INTERVAL'];
$g=$special['LOD'];
$h=$special['PHENOTYPE_VARIATION_R2'];
$h=$special['POPULATION_TYPE'];
$i=$special['REFERENCE'];


echo"<body bgcolor='white'>";
echo"<table align='center' border='3'>
<tr><th BGCOLOR='' width='20'>QTL_ID</th>";
echo "<td><a href=http://www.ncbi.nlm.nih.gov/gene/?term=".$special['QTL_ID'].">".$special['QTL_ID']."</a></td></tr>";
echo"<th BGCOLOR='' width='20'>Trait</th>";
echo "<td><a href=http://www.ncbi.nlm.nih.gov/gene/?term=".$special['Trait'].">".$special['Trait']."</a></td></tr>";
echo"<th BGCOLOR='' width='20'>METHOD</th>";
echo "<td><a href=http://www.ncbi.nlm.nih.gov/nuccore?term=".$special['METHOD'].">".$special['METHOD']."</a></td></tr>";
echo"<th BGCOLOR='' width='500'>CHROMOSOME</th>";
echo"<td>".$special['CHROMOSOME']."</td></tr>";
echo"<th BGCOLOR='' width='500'>MARKER_INTERVAL</th>";
echo"<td>".$special['MARKER_INTERVAL']."</td></tr>";
echo"<th BGCOLOR='' width='20'>LOD</th>";
echo"<td>".$special['LOD']."</td></tr>";
echo"<th BGCOLOR='' width='20'>PHENOTYPE_VARIATION_R2</th>";
echo"<td>".$special['PHENOTYPE_VARIATION_R2']."</td></tr>";
echo"<th BGCOLOR='' width='20'>POPULATION_TYPE</th>";
echo"<td>".$special['POPULATION_TYPE']."</td></tr>";
echo"<th BGCOLOR='' width='20'>REFERENCE</th>";
echo"<td>".$special['REFERENCE']."</td></tr>";
echo"</td></tr>";
echo"</tr>";
  echo"</table>";
echo"<table align='centre'>";
echo"</table>";
}

}
   else  {
    echo "0 results";
      }
$conn->close();
?>

</body>
</html>
