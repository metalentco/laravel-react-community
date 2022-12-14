<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glassmorphism Digital Clock</title>
    <link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/clock.css')}}">
</head>
<body>
    <section>
        <div class="clock">
            <div class="container">
                <h2 id="hour">00</h2>
                <h2 class="dot">:</h2>
                <h2 id="minute">00</h2>
                <h2 class="dot">:</h2>
                <h2 id="seconds">00</h2>
                <span id="ampm">AM</span>
            </div>
        </div>
    </section>

    <script src="{{asset('assets/js/onlinetutorial/clock.js')}}"></script>
</body>
</html>