
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="test.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$("#chatText").keyup(function(Event){
				if (Event.keyCode == 13) {
					var chatText=$("#chatText").val();
					$.ajax({
						type:'POST',
						url:'insertmessage.php',
						data:{chatText:chatText},
						success:function(){
							$('#chatbox').load("displaymessage.php");
							$('#chatText').val("");
						}
					});
				}
			});

			setInterval(function(){
				$("chatbox").load("displaymessage.php");
			},1500);

			$("chatbox").load("displaymessage.php")
		});
	</script>
</head>
<body>
	<?php if (isset($_SESSION['u_id'])) : ?>
		<center><h2 style= "color: green;">Welcome <span><?php echo $_SESSION['u_uid']; ?></span></h2></center>
		<div id="chat">
			<div id="chatbox" class="scrollbar">
			</div>
		<textarea name="chatText" id="chatText" cols="30" rows="10" placeholder="Type message"></textarea>
		</div>
	<?php endif ?>

</body>
</html>