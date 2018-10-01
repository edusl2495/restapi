<?php
curl_add();
function curl_add(){
	//Declare the URL
	$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/quotes-meena1/form/Account_client/record/add/";
	//Add POST parameters
	$post_fields = array();
	$post_fields['authtoken'] = "a69bd560ff2628b1ef64b37c2903cd22";
	$post_fields['scope'] = "creatorapi";
	$post_fields['IFSC_Code'] = "1200201101";
	$post_fields['Pan']="12090900900909";
	$post_fields['Bank_Name'] = "Hdfc";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
}
?>