<?php 
  $access_token = 'pKe0tXq1iWKFUvQXoROluz6RoCTuMAbnydblnxpXxjKbSlPOjITraVP80gZjytfpJOwOX+w3rd5RIGNh2hE4eYv+VtYs1pUwmXSJAYQM3y1OxKy/li6Q1h3M92DYEkIMJVb7GVvvoSSGIrf+mn1x3gdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
?> 
