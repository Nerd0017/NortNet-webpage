
	<?php require('../head.php'); ?>
	<title>nick and floppy's website</title>
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
    body {
        background-color: #3c3c84 !important;
        background-image: url('') !important;
    }
	</style>
<?php
$rawJson = file_get_contents('https://api.mcsrvstat.us/2/mc.nickandfloppy.com');
if ($rawJson == "") {
    echo "<i><pre>Error retrieving data</pre></i>";
} else {
    $server = (json_decode($rawJson));
    if ($server->online !== false) {
        echo '<table><tr><td><img src="' . $server->icon . '"></td><td><h1>' . $server->motd->html[0] . '</h1>' . $server->hostname . '</td></tr></table>';
        echo '<table border="1">';
        echo '<tr><td width="100"><b>Player Count</b></td><td>' . $server->players->online . ' / ' . $server->players->max . '</td></tr>';
        if ($server->players->online > 0) { echo '<tr><td>Online Players</td><td>' . implode(', ', $status->players->list) . '</td></tr>'; }
        echo '<tr><td><b>Version</b></td><td>' . $server->version . '</td></tr>';
        echo '<tr><td><b>Software</b></td><td>' . $server->software . '</td></tr>';
        echo '<tr><td><b>Default Map</b></td><td>' . $server->map . '</td></tr>';
        echo '<tr><td valign="top"><b>Plugins</b></td><td>' . implode(', ', $server->plugins->names) . '</td></tr>';
        echo '</table>';
    } else {
        echo '<pre>Server is offline</pre>';
    }
}
?>
