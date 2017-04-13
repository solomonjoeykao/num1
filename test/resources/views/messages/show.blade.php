
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
  <div style="text-align:center;background-color:#FFAC55;width:1366px;height:768px;">
	<b><font size = "7" color = "cc0055" face="cursive">
		<br><br><br>
       <div>Content:{{ $message->body }}</div>
       <div>Post at:{{ $message->created_at }}</div>
       <div>Edit at:{{ $message->updated_at }}</div>
    </font>
  </div>
</body>
</html>