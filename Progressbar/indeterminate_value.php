<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Progressbar - Indeterminate Value</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#progressbar" ).progressbar({
                value: false
            });
            $( "button" ).on( "click", function( event ) {
                var target = $( event.target ),
                    progressbar = $( "#progressbar" ),
                    progressbarValue = progressbar.find( ".ui-progressbar-value" );
                if ( target.is( "#numButton" ) ) {
                    progressbar.progressbar( "option", {
                        value: Math.floor( Math.random() * 100 )
                    });
                } else if ( target.is( "#colorButton" ) ) {
                    progressbarValue.css({
                        "background": '#' + Math.floor( Math.random() * 16777215 ).toString( 16 )
                    });
                } else if ( target.is( "#falseButton" ) ) {
                    progressbar.progressbar( "option", "value", false );
                }
            });
        });
    </script>
    <style>
        #progressbar .ui-progressbar-value {
            background-color: #ccc;
        }
    </style>
</head>
<body>
<div id="progressbar"></div>
<button id="numButton">Random Value - Determinate</button>
<button id="falseButton">Indeterminate</button>
<button id="colorButton">Random Color</button>
</body>
</html>