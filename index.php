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
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<h1>Hello Green Coop !</h1>
<br />
<a href="https://greencoopnet.slack.com/" title="Slack">Slack</a>
<br />
<a href="https://www.linkedin.com/company/greencoopnet/" title="Linkedin">Linkedin</a>
<br />
<p>
    Email : contact at greencoop dot net
</p>

</body>
</html>