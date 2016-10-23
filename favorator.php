<?php
include('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "access token",
    'oauth_access_token_secret' => "access token secret",
    'consumer_key' => "consumer key",
    'consumer_secret' => "consumer secret"
);
$url = 'https://api.twitter.com/1.1/statuses/home_timeline.json';
$getfield = '?count=10';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
echo "<pre>";
print_r($string);
echo "</pre>";
foreach($string as $items)
{
$url="https://api.twitter.com/1.1/favorites/create.json";
$requestMethod = 'POST';
$postfields = array(
    'id' => ($items['id']),
    );
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();
}
?>

