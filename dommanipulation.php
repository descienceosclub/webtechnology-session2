<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery DOM Manipulation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <h1>DOM Manipulation</h1>
    <div id="content">Original Content</div>
    <button id="changeContentBtn">Change Content</button>
    <input type="text" id="input_tag" value="10">
    <script>
        $("#changeContentBtn").click(function() {
            $("#content").html("<strong>New Content</strong>");
            $('#content').addClass('text-success text-center');
            setTimeout(function() {
                $('#input_tag').val('0');
                $('#content').toggleClass('text-center');
            }, 1000);
        });
    </script>
</body>

</html>