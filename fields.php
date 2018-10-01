<?php	//Declare the URL
curl_fields();
function curl_fields(){
	$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/quotes-meena1/form/Product_contact/fields/";
	//Add POST parameters
	$post_fields = array();
	$post_fields['authtoken'] = "a69bd560ff2628b1ef64b37c2903cd22";
	$post_fields['scope'] = "creatorapi";
	$ch = curl_init($url);
	//Set CURL options
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_POST, 1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
}
?>