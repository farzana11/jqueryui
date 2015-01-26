<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Button - Icons</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "button:first" ).button({
                icons: {
                    primary: "ui-icon-locked"
                },
                text: false
            }).next().button({
                icons: {
                    primary: "ui-icon-locked"
                }
            }).next().button({
                icons: {
                    primary: "ui-icon-gear",
                    secondary: "ui-icon-triangle-1-s"
                }
            }).next().button({
                icons: {
                    primary: "ui-icon-gear",
                    secondary: "ui-icon-triangle-1-s"
                },
                text: false
            });
        });
    </script>
</head>
<body>
<button>Button with icon only</button>
<button>Button with icon on the left</button>
<button>Button with two icons</button>
<button>Button with two icons and no text</button>
</body>
</html>