<?php 
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    
    require 'vendor/autoload.php';
    require "twilio-php/Services/Twilio.php";
    
    use Parse\ParseClient;
    use Parse\ParseObject;
    use Parse\ParseQuery;
    use Parse\ParseACL;
    use Parse\ParsePush;
    use Parse\ParseUser;
    //use Parse\ParseInstallation;
    use Parse\ParseException;
    //use Parse\ParseAnalytics;
    //use Parse\ParseFile;
    use Parse\ParseCloud;

    $AccountSid = "AC5839ca2afd3bae31a769a4f473e567eb";
    $AuthToken = "64907487725b7744409db3cb69e60549";
    $client = new Services_Twilio($AccountSid, $AuthToken);

    //$_REQUEST['From']
    //$_REQUEST['To']
    //$_REQUEST['Body']
    //$_REQUEST['FromCountry']

    //$_REQUEST['MessageSid']
    //$_REQUEST['AccountSid']
    //$_REQUEST['MessagingServiceSid']

    //$_REQUEST['NumMedia']
    //$_REQUEST['MediaContentType{N}']
    //$_REQUEST['MediaUrl{N}']

    ParseClient::initialize( '225crdMxwl1aEBb3DeH6kimhDNnfOhivsYmMjKhZ', 'jPA3ThWZcQ4AMBYz5us7RX8MiG9UCpvKIYZJQVtw', 'Jxy0GpjdeHScDNitsV72GuFaK5CvKtSwOXefQl9H');

    function newActivityObject() {
        $object = new ParseObject("Activity");
        $object->set("phoneNumber", $_REQUEST['From']);
        $object->set("body", $_REQUEST['Body']);
        $object->set("to", $_REQUEST['To']);
        $object->set("fromCountry", $_REQUEST['FromCountry']);
        $object->set("messageSid", $_REQUEST['MessageSid']);
        $object->save();
    }
    newActivityObject();
 ?>