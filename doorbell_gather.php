<?php
if($_REQUEST[‘Digits’] == ‘6718’) {
header(“Location: atxsummit.xml”);
die;
}
header(“content-type: text/xml”);
echo “<?xml version=\”1.0\” encoding=\”UTF-8\”?>\n“;
?>
<Response>
<Say voice=”woman”>I’m sorry, but the code you entered is incorrect.  Please try again.</Say>
</Response>