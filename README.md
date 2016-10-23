First attempt at PHP coding a functional Twitter apps guided and inspired by the following tutorial; Build Your First Twitter App Using PHP in 8 Easy Steps https://iag.me/socialmedia/build-your-first-twitter-app-using-php-in-8-easy-steps/

These are coding exercises I completed while I was teaching myself how to integrate PHP script with the Twitter API.

Requirements:
PHP 5.4
The TwitterAPIexchange.php file in the same directory as the scripts. TwitterAPIExchange.php can be found in the twitter-api-php repository - https://github.com/J7mbo/twitter-api-php

For Windows users, you MUST have PHP 5.4 installed and configured properly for these scripts to function. If you are not familiar with PHP or how to get it working on your computer I recommend you start here; http://php.net/manual/en/tutorial.requirements.php

You will need to register for a Twitter Developer account and create a Twitter app at https://dev.twitter.com to obtain the necessary keys for these scripts to function.



timeline.php - a php script that obtains the most recent 100 tweets of the user's home timeline and displays them in text format.
favorator.php - a php script that favorites the 10 most recent tweets in the user's home timeline. 
