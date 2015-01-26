<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Progressbar - Download Dialog</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            var progressTimer,
                progressbar = $( "#progressbar" ),
                progressLabel = $( ".progress-label" ),
                dialogButtons = [{
                    text: "Cancel Download",
                    click: closeDownload
                }],
                dialog = $( "#dialog" ).dialog({
                    autoOpen: false,
                    closeOnEscape: false,
                    resizable: false,
                    buttons: dialogButtons,
                    open: function() {
                        progressTimer = setTimeout( progress, 2000 );
                    },
                    beforeClose: function() {
                        downloadButton.button( "option", {
                            disabled: false,
                            label: "Start Download"
                        });
                    }
                }),
                downloadButton = $( "#downloadButton" )
                    .button()
                    .on( "click", function() {
                        $( this ).button( "option", {
                            disabled: true,
                            label: "Downloading..."
                        });
                        dialog.dialog( "open" );
                    });
            progressbar.progressbar({
                value: false,
                change: function() {
                    progressLabel.text( "Current Progress: " + progressbar.progressbar( "value" ) + "%" );
                },
                complete: function() {
                    progressLabel.text( "Complete!" );
                    dialog.dialog( "option", "buttons", [{
                        text: "Close",
                        click: closeDownload
                    }]);
                    $(".ui-dialog button").last().focus();
                }
            });
            function progress() {
                var val = progressbar.progressbar( "value" ) || 0;
                progressbar.progressbar( "value", val + Math.floor( Math.random() * 3 ) );
                if ( val <= 99 ) {
                    progressTimer = setTimeout( progress, 50 );
                }
            }
            function closeDownload() {
                clearTimeout( progressTimer );
                dialog
                    .dialog( "option", "buttons", dialogButtons )
                    .dialog( "close" );
                progressbar.progressbar( "value", false );
                progressLabel
                    .text( "Starting download..." );
                downloadButton.focus();
            }
        });
    </script>
    <style>
        #progressbar {
            margin-top: 20px;
        }
        .progress-label {
            font-weight: bold;
            text-shadow: 1px 1px 0 #fff;
        }
        .ui-dialog-titlebar-close {
            display: none;
        }
    </style>
</head>
<body>
<div id="dialog" title="File Download">
    <div class="progress-label">Starting download...</div>
    <div id="progressbar"></div>
</div>
<button id="downloadButton">Start Download</button>
</body>
</html>