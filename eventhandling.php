<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Events</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Event Handling Example</h1>
    <button id="btnClick">Click Me!</button>
    <p id="message">Watch what happens when you click the button!</p>

    <script>
        $("#btnClick").click(function() {
            $("#message").text("Button clicked! The message has changed.");
        });
    </script>
</body>

</html>