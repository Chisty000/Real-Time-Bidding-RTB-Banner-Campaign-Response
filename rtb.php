<?php

// Include necessary classes
require_once 'classes/BidResponse.php';


// Load the JSON file
$jsonData = file_get_contents('bid.json');

// Decode the JSON into an associative array
$data = json_decode($jsonData, true);

// Check if decoding was successful
if ($data === null) {
    die('Error parsing ad_request');
}

$campaignData= file_get_contents('campaign.json');
$dataOfCampaign=json_decode($campaignData,true);

if($dataOfCampaign == null){
    die('Error parsing Campaign');
}

// Ext class variables
$extAppPromotionType = $dataOfCampaign[0]['bidtype'];
$extImpressionTrackingUrls = ["https://test.com/impression?id=123456", "https://test.com/impression?id=123456"];
// Bid class variables
$bidId = "U4495qveIO2A83s1iOs";
$impid = "1";
$price = 0.10701;
$adid = "test_creative_id_323125";
$adm = "<iframe marginwidth=0 marginheight=0 height=600 frameborder=0 width=160 scrolling=no src=\"https://test.com/ads?id=123456&curl=%%CLICK_URL_ESC%%&wprice=%%WINNING_PRICE_ESC%%\"></iframe>";
$adomain = $dataOfCampaign[0]['url'];
$cid = $dataOfCampaign[0]['code'];
$crid = $dataOfCampaign[0]['creative_id'];
$w = 300;
$h = 250;

// SeatBid class variables
$seat = "1506:2993:976791";

// BidResponse class variables
$bidResponseId = "sW2R7543D2w77f0542uu0F";
$bidIdResponse = "WN7415ff-hN7R6080-3txk-r0J45ckY5970";

// Step 2: Create Objects

// Create Ext object
$ext = new Ext($extAppPromotionType, $extImpressionTrackingUrls);

// Create Bid object
$bid = new Bid(
    $bidId,
    $impid,
    $price,
    $adid,
    $adm,
    $adomain,
    $cid,
    $crid,
    $w,
    $h,
    $ext->toArray()  // Pass Ext object as an array
);

// Create SeatBid object
$seatbid = new SeatBid($seat, [$bid]);

// Create BidResponse object
$bidResponse = new BidResponse($bidResponseId, [$seatbid], $bidIdResponse);

// Step 3: Convert BidResponse to JSON and Output
echo $bidResponse->toJson();

