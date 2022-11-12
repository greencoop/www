<?php

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}

?>
<html>
<head>
<title>Communauté de pratiques environnementale</title>
</head>
<body>
<h1>Hello Green Coop !</h1>
<br />
<a href="greencoopnet.slack.com" title="Slack">Slack</a>
</body>
</html>