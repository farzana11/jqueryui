<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Button - Radios</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#radio" ).buttonset();
        });
    </script>
</head>
<body>
<form>
    <div id="radio">
        <input type="radio" id="radio1" name="radio"><label for="radio1">Choice 1</label>
        <input type="radio" id="radio2" name="radio" checked="checked"><label for="radio2">Choice 2</label>
        <input type="radio" id="radio3" name="radio"><label for="radio3">Choice 3</label>
        <input type="radio" id="radio4" name="radio"><label for="radio4">Choice 4</label>
        <input type="radio" id="radio5" name="radio"><label for="radio5">Choice 5</label>
        <input type="radio" id="radio6" name="radio"><label for="radio6">Choice 6</label>
        <input type="radio" id="radio7" name="radio"><label for="radio7">Choice 7</label>
        <input type="radio" id="radio8" name="radio"><label for="radio8">Choice 8</label>
        <input type="radio" id="radio9" name="radio"><label for="radio9">Choice 9</label>
    </div>
</form>
</body>
</html>