<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Services</title>

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    </head>

    <body class="bg-gray-100 font-sans">

        <header class="bg-gray-800 text-white p-4 text-center">

            <h1 class="text-2xl">Car Service Station</h1>

        </header>

        <section class="max-w-4xl mx-auto my-8 flex flex-wrap justify-between">

            <div class="service-card bg-white border border-gray-300 rounded-lg shadow-lg m-4 p-6 w-full sm:w-1/2">

                <img src="{{ asset('oil-to-car-engine') }}" alt="Oil Change" class="w-full h-auto rounded mb-4">

                <h2 class="text-gray-800 text-xl font-semibold mb-2">Oil Change</h2>

                <p class="text-gray-600">We provide quick and efficient oil change services using high-quality oils and filters.</p>

            </div>

            <div class="service-card bg-white border border-gray-300 rounded-lg shadow-lg m-4 p-6 w-full sm:w-1/2">

                <img src="{{ asset('wheel-service.webp') }}" alt="Tire Rotation Service" class="w-full h-auto rounded mb-4">

                <h2 class="text-gray-800 text-xl font-semibold mb-2">Tire Rotation</h2>

                <p class="text-gray-600">Extend the life of your tires with our professional tire rotation service.</p>

            </div>

            <div class="service-card bg-white border border-gray-300 rounded-lg shadow-lg m-4 p-6 w-full sm:w-1/2">

                <img src="{{ asset('inspection') }}" alt="Brake Inspection Service" class="w-full h-auto rounded mb-4">

                <h2 class="text-gray-800 text-xl font-semibold mb-2">Brake Inspection</h2>

                <p class="text-gray-600">Ensure your safety with our thorough brake inspection services, identifying and addressing potential issues.</p>

            </div>

            <div class="service-card bg-white border border-gray-300 rounded-lg shadow-lg m-4 p-6 w-full sm:w-1/2">

                <img src="{{ asset('auto-repair-shop') }}" alt="Engine Diagnosis Service" class="w-full h-auto rounded mb-4">

                <h2 class="text-gray-800 text-xl font-semibold mb-2">Engine Diagnosis</h2>

                <p class="text-gray-600">Our advanced diagnostic tools help identify and solve engine-related problems efficiently.</p>

            </div>

            <div class="service-card bg-white border border-gray-300 rounded-lg shadow-lg m-4 p-6 w-full sm:w-1/2">

                <img src="{{ asset('battery-service') }}" alt="Battery Replacement Service" class="w-full h-auto rounded mb-4">

                <h2 class="text-gray-800 text-xl font-semibold mb-2">Battery Replacement</h2>

                <p class="text-gray-600">Get your car battery replaced quickly and efficiently by our expert technicians.</p>

            </div>

            <div class="service-card bg-white border border-gray-300 rounded-lg shadow-lg m-4 p-6 w-full sm:w-1/2">

                <img src="{{ asset('car-wash') }}" alt="Car Wash Service" class="w-full h-auto rounded mb-4">

                <h2 class="text-gray-800 text-xl font-semibold mb-2">Car Wash</h2>

                <p class="text-gray-600">Keep your car looking new with our comprehensive car wash services.</p>

            </div>

            <div class="service-card bg-white border border-gray-300 rounded-lg shadow-lg m-4 p-6 w-full sm:w-1/2">

                <img src="{{ asset('ac-service') }}" alt="AC Service" class="w-full h-auto rounded mb-4">

                <h2 class="text-gray-800 text-xl font-semibold mb-2">AC Service</h2>

                <p class="text-gray-600">Stay cool with our thorough air conditioning system maintenance and repair services.</p>

            </div>

        </section>

        <footer class="bg-gray-800 text-white text-center p-4 fixed bottom-0 w-full">

            <p>&copy; 2024 Your Car Service Station</p>

        </footer>

    </body>
    
</html>
