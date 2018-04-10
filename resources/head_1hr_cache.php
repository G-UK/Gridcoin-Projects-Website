<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<script src="resources/scripts/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="resources/css/stylesheet.css">
<link rel="apple-touch-icon" sizes="57x57" href="resources/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="resources/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="resources/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="resources/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="resources/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="resources/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="resources/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="resources/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="resources/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="resources/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="resources/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="resources/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="resources/icons/favicon-16x16.png">
<link rel="manifest" href="resources/icons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="resources/icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php
    $seconds_to_cache = 3600;
    $ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
    header("Expires: $ts");
    header("Pragma: cache");
    header("Cache-Control: max-age=$seconds_to_cache");
?>