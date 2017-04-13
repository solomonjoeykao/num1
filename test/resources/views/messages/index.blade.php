<!doctype html>
<html lang="en">


<head>
<meta charset="UTF-8">
<title> The First Project </title>
</head>
<body>
	<div style="text-align:center;background-color:#FFAC55;width:1366px;height:768px;"><br><br><br><br><br><br><br><br><br>
		<marquee> Happy Making Website ! ! !</marquee>
		<b><font size = "7" color = "cc0055" face="cursive">The First Project </font></b><br><br><br><br><br><br><br><br><br>
	<b><font size = "5" color = "cc0055" face="cursive">
      @foreach($messages as $message)
        <div>{{ $message->body }}</div>
        <a href="{{ url('messages/'.$message->id) }}"><div>{{ $message->body }}</div></a>
        <form action="{{ url('messages/'.$message->id.'/edit') }}" method="GET">
        	<button type="submit" id="edit-message-{{ $message->id }}">
        		Edit
        	</button>
        </form>	
        <form action="{{ url('message/'.$message->id) }}" method="POST">
        	{!! csrf_field() !!}
        	{!! method_field('DELETE') !!}
        	<button type="submit" id="delete-message-{{ $message->id }}">
        		Delete
        	</button>
        </form>	
      @endforeach

     <form action="{{ url('message') }}" method="POST">
	    {{ csrf_field() }}
        <input type="text" name="body">
        <button type="submit">留言</button>
      </form>
                    <div class="links">
                    <a href ="https://www.facebook.com/">Facebook</a>
                    <a href ="https://www.instagram.com/">Instagram</a>
                    <a href ="https://www.youtube.com/">Youtube</a>
                    <a href ="http://video.eyny.com/video.php">EynyVideo</a>
                    <a href ="https://www.google.com.tw/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=%E7%BF%BB%E8%AD%AF">Translate</a>
                </div>
    </font></b>
    </div>
</body>
</html>

