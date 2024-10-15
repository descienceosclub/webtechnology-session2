<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery CSS Manipulation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>CSS Manipulation Example</h1>
    <p id="text">This is a paragraph.</p>
    <button id="changeStyleBtn">Change Style</button>

    <script>
        $("#changeStyleBtn").click(function() {
            $("#text").css({
                "color": "blue",
                "font-size": "20px"
            });
        });
    </script>
</body>

</html>