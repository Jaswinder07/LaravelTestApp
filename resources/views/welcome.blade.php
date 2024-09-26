<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #282c34;
            color: white;
            margin: 0;
        }

        #clock {
            font-size: 48px;
            padding: 20px;
            border: 2px solid white;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            margin-top: 10px;
        }

        .employee {
            color: white;
            text-decoration: none;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .employee:hover {
            text-decoration: underline;
            color: #0000ff;
        }
    </style>
</head>

<body>
    <div>
        <a href="/employee" class="employee">Hierarchical Data</a>
    </div>
    <div class="container text-center">
        <div id="clock"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function digitalClock() {
                const now = new Date();
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                $('#clock').text(`${hours}:${minutes}:${seconds}`);
            }

            setInterval(digitalClock, 1000);

            digitalClock();
        });
    </script>
</body>

</html>
