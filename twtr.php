<?php
require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
'oauth_access_token' => "xxx",
'oauth_access_token_secret' => "yyy",
'consumer_key' => "zzz",
'consumer_secret' => "qqq"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "";}
if (isset($_GET['count'])) {$count = $_GET['count'];} else {$count = 250;}
$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
foreach($string as $items)
    {
        echo "<div id='tweet'>";
        echo "<div id='content'><div id='name-header'><strong>". $items['user']['name']."</strong";
        echo " ". $items['user']['screen_name']."";
        echo "<div id='time'><small>&#32; &#183; ".$items['created_at']."</small></div>";
        echo "<img class='avatar' src='https://twitter.com/$user/profile_image?size=original'></div>";
        echo "<div id='tweet-inner'>" . $items['text']."</div></div></div>";
    }
?>