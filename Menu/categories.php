<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Menu - Categories</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#menu" ).menu({
                items: "> :not(.ui-widget-header)"
            });
        });
    </script>
    <style>
        .ui-menu { width: 200px; }
        .ui-widget-header { padding: 0.2em; }
    </style>
</head>
<body>
<ul id="menu">
    <li class="ui-widget-header">Category 1</li>
    <li>Option 1</li>
    <li>Option 2</li>
    <li>Option 3</li>
    <li class="ui-widget-header">Category 2</li>
    <li>Option 4</li>
    <li>Option 5</li>
    <li>Option 6</li>
</ul>
</body>
</html>