<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - insert within parenthesis - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "access token",
    'oauth_access_token_secret' => "access token secret",
    'consumer_key' => "consumer key",
    'consumer_secret' => "consumer secret"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
if (isset($_GET['name']))  {$user = $_GET['name'];}  else {$user  = "null";}
if (isset($_GET['count'])) {$user = $_GET['count'];} else {$count = 100;}
$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
foreach($string as $items)
    {
        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Screen name: ". $items['user']['screen_name']."<br /><hr />";
    }

