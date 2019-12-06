<?php
// API / Auth Keys
$oauth_access_token = "371767297-fP3cke8G3zjtfAeTPeNBFoy60Myjpb9Se0NxF5XZ";
$oauth_access_token_secret = "pZfPZUTldv8BFI53biTLBn9H6vOHUkuS1OhKOSgXuHVLB";
$consumer_key = "36Sj9xSZA3AS0QoZVQi6rvtNi";
$consumer_secret = "UR36rZoHRtL4h98NxoylnlmDIC6lHjXn6B2sR7tyzmmfPuV314";
$twitter_timeline = "user_timeline";
$request = array(
'count' => '8',
'screen_name' => 'lovenewmarket'
);
// put oauth values in one oauth array variable
$oauth = array(
'oauth_consumer_key' => $consumer_key,
'oauth_nonce' => time(),
'oauth_signature_method' => 'HMAC-SHA1',
'oauth_token' => $oauth_access_token,
'oauth_timestamp' => time(),
'oauth_version' => '1.0'
);
// combine request and oauth in one array
$oauth = array_merge($oauth, $request);
// make base string
$baseURI="https://api.twitter.com/1.1/statuses/$twitter_timeline.json";
$method="GET";
$params=$oauth;
$r = array();
ksort($params);
foreach($params as $key=>$value){
$r[] = "$key=" . rawurlencode($value);
}
$base_info = $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
$composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
// get oauth signature
$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
$oauth['oauth_signature'] = $oauth_signature;
// make request
// make auth header
$r = 'Authorization: OAuth ';
$values = array();
foreach($oauth as $key=>$value){
$values[] = "$key=\"" . rawurlencode($value) . "\"";
}
$r .= implode(', ', $values);
// get auth header
$header = array($r, 'Expect:');
// set cURL options
$options = array(
CURLOPT_HTTPHEADER => $header,
CURLOPT_HEADER => false,
CURLOPT_URL => "https://api.twitter.com/1.1/statuses/$twitter_timeline.json?". http_build_query($request),
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => true
);
// retrieve the twitter feed
$feed = curl_init();
curl_setopt_array($feed, $options);
$json = curl_exec($feed);
curl_close($feed);
// decode json format tweets
$tweets=json_decode($json, true);
// show tweets
foreach($tweets as $tweet){
echo "<div class='social-item' data-match-height='true'>";
	// show a tweet
	$name=$tweets[0]['user']['name'];
	$screen_name=$tweets[0]['user']['screen_name'];
	$twitter_icon = get_template_directory_uri() . '/images/png/twitter.png';
	// $profile_photo=str_replace("normal", "400x400", $tweets[0]['user']['profile_image_url_https']);

	echo "<div class='tweet-icon' >";
	echo "<img src='$twitter_icon' />";
	echo "</div>";


	echo "<div class='tweet-image'>";
	echo "<img src='{$profile_photo}' class='img-thumbnail' />";
	echo "</div>";

	// show picture
	// show tweet content
	// show name and screen name
	// echo " <a href='https://twitter.com/{$screen_name}'' class='handle'>{$name}</a>";
	// show tweet text
	echo "<p class='tweet-text'>";
		// get tweet text
		$tweet_text=$tweet['text'];
		// make links clickable
		$tweet_text=preg_replace('@(https?://([-\w\.]+)+(/([\w/_\.]*(\?\S+)?(#\S+)?)?)?)@', '<a href="$1" target="_blank">$1</a>', $tweet_text);
		echo $tweet_text;
	echo "</p>";
echo "</div>";
}
?>