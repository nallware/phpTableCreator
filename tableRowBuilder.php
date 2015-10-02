<?php
function tableRowBuilder($sql, $conn){
//ex: '"hostname","username","password","database"'; 
$conn = '"nallware.db.8715276.hostedresource.com","nallware","Nall#5440","nallware"';

$con = mysqli_connect($conn);	

if (mysqli_connect_errno()) {
	return "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con, $sql);		

while($row = mysqli_fetch_array($result)) {
	$col_cnt = mysqli_num_fields($result);

	$tablerow = "<tr>";

	for ($x = 0; $x <= $col_cnt; $x++) {
	 $tablerow .= "<td>".$row[$x]."</td>";  
} 
$tablerow .= "</tr>"; }			 
mysqli_close($con);
return $tablerow;
}
?>