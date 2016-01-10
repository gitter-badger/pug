<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Pi!</title>

    <link href='https://fonts.googleapis.com/css?family=GFS+Didot&text=π' rel='stylesheet' type='text/css'>

    <style media="screen">
        body {
            background: url(/assets/img/stardust.jpg) top left repeat;
            font: 16px/1.5 -apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Open Sans","Helvetica Neue",sans-serif;
            border-top: 5px solid #3C91E6;
            padding: 0;
            margin: 0;
        }

        header {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity .25s .25s;
        }
            .loaded header {
                opacity: 1;
            }

        h1 {
            font-family: 'GFS Didot';
            color: #3C91E6;
            font-size: 3em;
            line-height: 1em;
            margin: 0 0 .5em;
        }

        h2 {
            color: white;
            font-size: 2.25em;
            line-height: 1.333333333333333em;
            margin: 0 0 .6666666666666667em;
        }
    </style>
</head>
<body>
    <header>
        <h1>π</h1>
        <h2>Hello World</h2>
    </header>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 125);
        });
    </script>
</body>
</html>
