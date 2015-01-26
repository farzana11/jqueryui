<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Slider - Multiple sliders</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        #eq > span {
            height:120px; float:left; margin:15px
        }
    </style>
    <script>
        $(function() {
// setup master volume
            $( "#master" ).slider({
                value: 60,
                orientation: "horizontal",
                range: "min",
                animate: true
            });
// setup graphic EQ
            $( "#eq > span" ).each(function() {
// read initial values from markup and remove that
                var value = parseInt( $( this ).text(), 10 );
                $( this ).empty().slider({
                    value: value,
                    range: "min",
                    animate: true,
                    orientation: "vertical"
                });
            });
        });
    </script>
</head>
<body>
<p class="ui-state-default ui-corner-all ui-helper-clearfix" style="padding:4px;">
    <span class="ui-icon ui-icon-volume-on" style="float:left; margin:-2px 5px 0 0;"></span>
    Master volume
</p>
<div id="master" style="width:260px; margin:15px;"></div>
<p class="ui-state-default ui-corner-all" style="padding:4px;margin-top:4em;">
    <span class="ui-icon ui-icon-signal" style="float:left; margin:-2px 5px 0 0;"></span>
    Graphic EQ
</p>
<div id="eq">
    <span>88</span>
    <span>77</span>
    <span>55</span>
    <span>33</span>
    <span>40</span>
    <span>45</span>
    <span>70</span>
</div>
</body>
</html>