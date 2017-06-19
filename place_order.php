<?php
date_default_timezone_set('Europe/London');
$date=date('Y-m-d H:i:s');
$coffee=$_REQUEST['coffee'];
$sugar=$_REQUEST['sugar'];
$agent=$_REQUEST['agent'];
$location=$_REQUEST['location'];

// Multiple recipients
$to = 'mark.elliott@sitel.com, softwaresupport@live.co.uk'; // note the comma

// Subject
$subject = 'Yay Koffee Order';

// Message
$message = '
<html>
<head>
  <title>Yay Koffee Order</title>
</head>
<body>
<h2>You Have A New Order</h2>
<p></p>
<table>
<tr>
<td>Order Placed:</td>
<td>'.$date.'</td>
</tr>
<tr>
<td>Coffee:</td>
<td>'.$coffee.'</td>
</tr>
<tr>
<td>Sugar:</td>
<td>'.$sugar.'</td>
</tr>
<tr>
<td>Agent:</td>
<td>'.$agent.'</td>
</tr>
<tr>
<td>Location:</td>
<td>'.$location.'</td>
</tr>
</table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Software <softwaresupport@live.co.uk>, Mark <mark.elliott@sitel.com>';
$headers[] = 'From: YayKoffee <orders@yaykoffee.co.uk>';
$headers[] = 'Cc: orders@yaykoffee.co.uk';
$headers[] = 'Bcc: orders@yaykoffee.co.uk';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));

echo"<meta http-equiv='refresh' content='0; URL=/yaykoffee/order_complete.html'>";
?>

