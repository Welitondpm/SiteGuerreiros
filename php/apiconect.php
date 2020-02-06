<?php

	$clantag = "#28GPGRGGV";

	$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6Ijk2MmYyNjAxLTIxNWMtNDBhYi05N2I0LTZjYWY4ZjY2OTAxYiIsImlhdCI6MTU4MDkyMjA5OSwic3ViIjoiZGV2ZWxvcGVyLzliYTc4NTExLWU4ZmMtYmViMS0xYzZhLWYyYmY1MzYzYzFmZSIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjE2OC4xOTUuMjMwLjE1NyIsIjEzMS4yNTUuMTMyLjE0MSIsIjEzMS4yNTUuMTMyLjE0NyIsIjE2OC4xOTUuMjMwLjE1NiIsIjE2OC4xOTUuMjMwLjE1OCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.dQ-Tn83STGlrCxHau0GSCbw6PlGLD5mK4OtntZsNc-FV0bX_ZWgK3eKJJJm7UNgvcNMkK5TQP6dPAY6GXsb4Iw";

	$url = "https://api.clashofclans.com/v1/clans/" . urlencode($clantag);

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

	$members = $data["memberList"];

	if (isset($errormsg)) {
	    echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
	    exit;
	}

?>