<?php
include "dbConnect.php";

$sql="SELECT * FROM users";
$response=array();
if($res=$con->query($sql)) {
	$i=0;
	if($res->num_rows) {
		while($row=$res->fetch_object()) {
			$response[$i]['name'] = $row->Name;
			$response[$i]['college'] = $row->College;
			$response[$i]['department'] = $row->Department;
			$response[$i]['email'] = $row->email;
			$i++;
		}
		echo json_encode($response);
	}
}

?>