<?php

	session_start();

	$players = $_SESSION['tag'];

	$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjIyNzNiOWM4LThmNjgtNDQ3OC05ODgyLTY0YzZkMDAyN2ExYyIsImlhdCI6MTU4MTc4MjU3Nywic3ViIjoiZGV2ZWxvcGVyLzliYTc4NTExLWU4ZmMtYmViMS0xYzZhLWYyYmY1MzYzYzFmZSIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjE2OC4xOTUuMjMwLjE1NyIsIjE2OC4xOTUuMjI4LjY0Il0sInR5cGUiOiJjbGllbnQifV19.4Y8yyULpMr5A3gzF8YDIuodCWTf3SUtP3lFEO8o3KR-sxQrs0NWJ8C5Y1YD4ZrU4Aayhz6o8iaKpk4EEAILTyQ";

	$url = "https://api.clashofclans.com/v1/players/" . urlencode($players);

	$ch = curl_init($url);

	$headr = array();
	$headr[] = "Accept: application/json";
	$headr[] = "Authorization: Bearer ".$token;

	curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

	$res = curl_exec($ch);
	$data = json_decode($res, true);
	curl_close($ch);

	if (isset($data["reason"])) {
	    $errormsg = true;
	}

	$achievements = $data["achievements"];
	// $members = $data["memberList"];

	if (isset($errormsg)) {
	    echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
	    exit;
	}

?>