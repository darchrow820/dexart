<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>sql</title>
</head>

<style>

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
        overflow: hidden;
    }
    .generate {
        font-family: "Roboto";
        font-size: 24px;
        text-align: center;
        color: #fff;
        display: block;
        width: 300px;
        height: 55px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 30px;
        background-color: teal;
        cursor: pointer;
    }
</style>

<body>

<form method="" id="query-form">
    <a class="generate" onclick="post()">Generate CSV</a>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function post() {
            $.ajax({
                type: "POST",
                url: '/query.php',
                data: { action: 'callback' },
                success: function (data) {
                    console.log(data);

                }
            });
        }
    </script>
</body>

</html>