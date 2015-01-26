<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Button - Split button</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        .ui-menu { position: absolute; width: 100px; }
    </style>
    <script>
        $(function() {
            $( "#rerun" )
                .button()
                .click(function() {
                    alert( "Running the last action" );
                })
                .next()
                .button({
                    text: false,
                    icons: {
                        primary: "ui-icon-triangle-1-s"
                    }
                })
                .click(function() {
                    var menu = $( this ).parent().next().show().position({
                        my: "left top",
                        at: "left bottom",
                        of: this
                    });
                    $( document ).one( "click", function() {
                        menu.hide();
                    });
                    return false;
                })
                .parent()
                .buttonset()
                .next()
                .hide()
                .menu();
        });
    </script>
</head>
<body>
<div>
    <div>
        <button id="rerun">Run last action</button>
        <button id="select">Select an action</button>
    </div>
    <ul>
        <li>Open...</li>
        <li>Save</li>
        <li>Delete</li>
    </ul>
</div>
</body>
</html>