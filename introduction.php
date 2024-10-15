<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Welcome to jQuery!</h1>
    <span class="p" id="test">This paragraph will be hidden using jQuery.</span>
    <p>This is New P Tag.</p>
    <script>
        $(document).ready(function() {
            $("#test").hide();
            test();
            //setTimeout(function() {
            $("p").show();
            //}, 1000);
        });
    </script>
</body>

</html>