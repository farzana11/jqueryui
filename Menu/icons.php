<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Menu - Icons</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#menu" ).menu();
        });
    </script>
    <style>
        .ui-menu { width: 150px; }
    </style>
</head>
<body>
<ul id="menu">
    <li><span class="ui-icon ui-icon-disk"></span>Save</li>
    <li><span class="ui-icon ui-icon-zoomin"></span>Zoom In</li>
    <li><span class="ui-icon ui-icon-zoomout"></span>Zoom Out</li>
    <li class="ui-state-disabled"><span class="ui-icon ui-icon-print"></span>Print...</li>
    <li>
        Playback
        <ul>
            <li><span class="ui-icon ui-icon-seek-start"></span>Prev</li>
            <li><span class="ui-icon ui-icon-stop"></span>Stop</li>
            <li><span class="ui-icon ui-icon-play"></span>Play</li>
            <li><span class="ui-icon ui-icon-seek-end"></span>Next</li>
        </ul>
    </li>
    <li>Learn more about this menu</li>
</ul>
</body>
</html>