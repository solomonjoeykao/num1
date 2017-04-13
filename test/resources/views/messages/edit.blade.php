
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
	<div style="text-align:center;background-color:#FFAC55;width:1366px;height:768px;">
	<b><font size = "5" color = "cc0055" face="cursive">
        <form method="POST" action="{{ url('messages/'.$message->id) }}">
        	{{ csrf_field() }}
        	{{ method_field('PATCH') }}
        	<textarea name="body">{{ $message->body }}</textarea>
        	<button type="submit"> 
        		Update Comment
        	</button>
        </form>	
    </font>
</div>
</body>
</html>