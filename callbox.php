<?php
header(“content-type: text/xml”);
echo “<?xml version=\”1.0\” encoding=\”UTF-8\”?>\n“;
?>
<Response>
<Gather action=”/doorbell_gather.php” method=”POST”>
<Say voice=”woman”>Please enter the access code provided to you for this property.</Say>
</Gather>
</Response>