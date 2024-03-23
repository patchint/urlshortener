<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <title>URL Shortener | patchli.fr</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://patchli.fr/assets/img/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#shorten-form').submit(function(e) {
                e.preventDefault();
                var url = $('#url').val();
                $.ajax({
                    type: 'POST',
                    url: 'shorten.php',
                    data: { url: url },
                    success: function(response) {
                        $('#shortened-url').html(response);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h1>URL Shortener | patchli.fr</h1>
    <form id="shorten-form">
        <input type="text" id="url" name="url" placeholder="Enter URL" required>
        <input type="submit" value="Shorten">
    </form>
    <div id="shortened-url" class="center"></div>
    <p><em>patchli.fr - I like trains - 2019-2023</em></p>
</body>
</html>

