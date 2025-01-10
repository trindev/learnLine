<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f8fc;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .dashboard {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 1200px;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2rem;
            color: #007bff;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 1.2rem;
            margin: 5px 0;
        }

        .card .value {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
<div class="dashboard">
    <div class="header">
        <h1>Health Care Monitoring</h1>
    </div>
    <div class="card-container">
        <div class="card">
            <h2>Body Temperature</h2>
            <p>Current: <span class="value">36.8&#8451;</span></p>
            <p>Normal Range: 36.5&#8451; - 37.5&#8451;</p>
        </div>
        <div class="card">
            <h2>Blood Pressure</h2>
            <p>Systolic: <span class="value">120 mmHg</span></p>
            <p>Diastolic: <span class="value">80 mmHg</span></p>
        </div>
        <div class="card">
            <h2>SpO<sub>2</sub> Level</h2>
            <p>Oxygen Saturation: <span class="value">98%</span></p>
            <p>Normal Range: 95% - 100%</p>
        </div>
    </div>
</div>
</body>
</html>
