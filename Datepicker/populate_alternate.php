<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Datepicker - Populate alternate field</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#datepicker" ).datepicker({
                altField: "#alternate",
                altFormat: "DD, d MM, yy"
            });
        });
    </script>
</head>
<body>
<p>Date: <input type="text" id="datepicker">&nbsp;<input type="text" id="alternate" size="30"></p>
</body>
</html>