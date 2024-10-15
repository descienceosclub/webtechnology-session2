<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Animations</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Animations Example</h1>
    <div id="box" style="width:100px;height:100px;background-color:red;"></div>
    <button id="animateBtn">Animate</button>

    <script>
        $("#animateBtn").click(function() {
            $("#box").animate({
                width: "200px",
                height: "200px",
                opacity: 0.5
            }, 1000);
        });
    </script>
</body>

</html>