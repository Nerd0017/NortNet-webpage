<html>
<head>
	<?php require('../head.php'); ?>

	<meta property="og:type" content="website">
	<meta property="og:title" content="The Corner">
	<meta property="og:description" content="Information about our discord, &quot;The Corner&quot;">
	<meta property="og:image" content="/favicon.png">

	<title>The Corner</title>
	<style>
	.dnd {
		border: 5px #f04747 solid;
	}
	.online {
		border: 5px #43b581 solid;
	}
	.idle {
		border: 5px #faa61a solid;
	}
	</style>
</head>

<body>
	<center><table border="1" bgcolor="3c3c84" width="800px"><tr><td>
		<?php require('../pageheader.html'); ?>
		<hr>
		<h1>NickNet IRC</h1>
		<h2>Connection Info</h2>
		<table border="1"><tr><td>
		<b>Address:</b> <pre>irc.nick99nack.com</pre><br>
		<b>Port:</b> <pre>6667 (non-ssl)</pre><br>
		<b>NickServ Register/Identify:</b><br>
		<pre>/msg NickServ REGISTER &lt;passsword&gt; &lt;email&gt;</pre><br>
		<pre>/msg NickServ IDENTIFY &lt;passsword&gt;</pre><br>
		</td></tr></table>
		<br>
		<h2>Bridged Channels (IRC &rarr; Discord)</h2>
		<pre>#nick &rarr; #random-crap</pre><br>
		<pre>#nick-streaming &rarr; #streaming-chat</pre>
		<hr>
		<?php require('../footer.php'); ?>
	</td></tr></table></center>
</body>
</html>
