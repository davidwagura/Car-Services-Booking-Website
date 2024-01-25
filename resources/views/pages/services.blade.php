<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'LSAP')}}</title>

    </head>
    <body> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .service-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: calc(50% - 20px);
            box-sizing: border-box;
        }

        .service-card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <header>
        <h1>Car Service Station</h1>
    </header>

    <section>
        <div class="service-card">
        <img src="{{ asset('oil-to-car-engine') }}" alt="oil change">
            <h2>Oil Change</h2>
            <p>We provide quick and efficient oil change services using high-quality oils and filters.</p>
        </div>

        <div class="service-card">
            <img src= "{{ asset('wheel-service.webp') }}" alt="Tire Rotation Service">
            <h2>Tire Rotation</h2>
            <p>Extend the life of your tires with our professional tire rotation service.</p>
        </div>

        <div class="service-card">
            <img src="{{ asset('inspection') }}" alt="Brake Inspection Service">
            <h2>Brake Inspection</h2>
            <p>Ensure your safety with our thorough brake inspection services, identifying and addressing potential issues.</p>
        </div>

        <div class="service-card">
            <img src="{{ asset('auto-repair-shop') }}" alt="Engine Diagnosis Service">
            <h2>Engine Diagnosis</h2>
            <p>Our advanced diagnostic tools help identify and solve engine-related problems efficiently.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Your Car Service Station</p>
    </footer> 
  </body>
</html>
