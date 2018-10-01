<?php
$authtoken="a69bd560ff2628b1ef64b37c2903cd22";
curl_view();
function curl_view()
{
  $url = "https://creator.zoho.com/api/json/quotes-meena1/formsandviews/authtoken=a69bd560ff2628b1ef64b37c2903cd22&scope=creatorapi&zc_ownername=aorborctechnologiescpt&raw=true";
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($ch);
  curl_close($ch);
  $creator_records = json_decode($response);
  echo($response);
}
?>