<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Selectors</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Select Elements</h1>
    <p class="selected">First paragraph</p>
    <p>Second paragraph</p>
    <button id="selectBtn">Select Paragraphs</button>

    <script>
        $("#selectBtn").click(function() {
            $("p.selected").css("color", "red");
            $('button').attr('disabled', true)
        });
    </script>
</body>

</html>