<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smart Health Monitor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                padding: 0;
                background: linear-gradient(to bottom, #e0f7fa, #ffffff);
                color: #333;
            }
            header {
                background-color: #00bcd4;
                color: white;
                text-align: center;
                padding: 20px;
            }
            header h1 {
                margin: 0;
                font-size: 2.5em;
            }
            header p {
                margin: 10px 0 0;
            }
            .auth-links {
                position: fixed;
                top: 0;
                right: 0;
                padding: 10px 20px;
                background-color: #e0f7fa;
                text-align: right;
                z-index: 10;
            }
            .auth-links a {
                text-decoration: none;
                color: #00796b;
                margin-left: 15px;
                font-size: 0.9em;
            }
            .auth-links a:hover {
                text-decoration: underline;
            }
            section {
                padding: 40px 20px;
            }
            .features {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                margin-bottom: 40px;
            }
            .feature {
                flex: 1 1 45%;
                max-width: 400px;
                margin: 10px;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                text-align: center;
                background-color: #f1f8e9;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .feature img {
                width: 120px;
                height: 120px;
                margin-bottom: 15px;
            }
            .feature h3 {
                font-size: 1.5em;
                margin: 20px 0 10px;
            }
            .feature p {
                font-size: 1em;
                line-height: 1.5;
            }
            .cta {
                text-align: center;
                margin-top: 40px;
            }
            .cta button {
                background-color: #00bcd4;
                color: white;
                border: none;
                padding: 15px 30px;
                font-size: 1.2em;
                border-radius: 5px;
                cursor: pointer;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .cta button:hover {
                background-color: #008c9e;
            }
            footer {
                background-color: #00bcd4;
                color: white;
                text-align: center;
                padding: 10px 0;
                position: fixed;
                bottom: 0;
                width: 100%;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="auth-links">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </div>

    <header>
        <h1>Smart Health Monitor</h1>
        <p>Track your health effortlessly with real-time insights</p>
    </header>

    <section>
        <h2 style="text-align:center; color:#00796b;">Features</h2>
        <div class="features">
            <div class="feature">
                <i class="fas fa-lungs fa-5x text-primary"></i>
                <h3>Oxygen Monitoring</h3>
                <p>Real-time tracking of blood oxygen levels for better health management. Our advanced sensors provide precise measurements and deliver alerts when levels fall below optimal thresholds.</p>
            </div>
            <div class="feature">
                <i class="fas fa-heartbeat fa-5x text-danger"></i>
                <h3>Blood Pressure</h3>
                <p>Keep your heart health in check with accurate blood pressure monitoring. Measurements are taken every 15 minutes, ensuring timely updates, and the device boasts medical-grade accuracy to help you stay informed.</p>
            </div>
            <div class="feature">
                <i class="fas fa-thermometer-half fa-5x text-warning"></i>
                <h3>Body Temperature</h3>
                <p>Monitor your body temperature to detect early signs of illness.</p>
            </div>
            <div class="feature">
                <i class="fas fa-heart fa-5x text-success"></i>
                <h3>Heart Rate</h3>
                <p>Track your heartbeat to ensure optimal cardiovascular health.</p>
            </div>
        </div>

        <h2 style="text-align:center; color:#00796b;">Dashboard Insights</h2>
        <p style="text-align:center; max-width: 600px; margin: 0 auto;">Visualize your health data in an easy-to-read dashboard with weekly and monthly summaries, and stay informed with instant alerts.</p>

        <div class="cta">
            <button>Get Started Now</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Smart Health Monitor. All rights reserved.</p>
    </footer>
    </body>
</html>
