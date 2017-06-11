<?

function error($errorTxt) {
	$resp = Array(
		"error"=>$errorTxt
		);
	echo json_encode($resp);
	exit(-1);
}

function send($data) {
	echo json_encode($data);
}

?>