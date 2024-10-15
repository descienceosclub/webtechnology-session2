<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery AJAX Example</title>
</head>

<body>
    <h1>AJAX Example</h1>
    <button id="loadDataBtn">Load Data</button>
    <div id="dataDisplay">No data loaded yet</div>

    <form method="post" action="" id="sample_form">
        <div>
            <input type="text" name="name" id="name" placeholder="name">
            <input type="text" name="email" id="email" placeholder="email">
            <input type="text" name="mobile" id="mobile" placeholder=" mobile">

            <button type="submit">Submit</button>
        </div>

        <div id="response"></div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        /* $("#loadDataBtn").click(function() {
            $.get("https://jsonplaceholder.typicode.com/posts/1", function(data) {
                $("#dataDisplay").html("<strong>Title:</strong> " + data.title);
            });
        }); */

        /* function postDATA() {
            var name = $('#name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();

            $.ajax({
                type: 'post',
                url: 'send_data.php',
                data: {
                    NAME: name,
                    Email: email,
                    Mobile: mobile,
                },
                dataType: 'json',
                success: function(response) {
                    $('#response').text(response.result);
                }
            });
        } */

        $(document).ready(function() {
            $("#sample_form").submit(function(event) {
                var form = $('#sample_form')[0];
                var data = new FormData(form);
                $.ajax({
                    type: "post",
                    url: 'send_data.php',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 80000,
                    dataType: 'json',
                    encode: true,
                }).done(function(response) {
                    //console.log(data);
                    if (!response.success) {
                        //NOT SUCCESS RESPONSE

                    } else {
                        //SUCCESS RESPOSNE
                        $('#response').text(response.result);
                    }
                    if (response == "OK") {
                        return true;
                    } else {
                        return false;
                    }
                });
                event.preventDefault();
            });
        });
    </script>
</body>

</html>