<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Register</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body class="bg-gray-100">

        <div class="flex items-center justify-center min-h-screen bg-gray-100">

            <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow-md">

                <div>

                    <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">User information</h2>

                </div>

                <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">

                    @csrf

                    <div class="space-y-4">

                        <div>

                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>

                            <input id="name" name="name" type="text" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                        </div>

                        <div>

                            <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>

                            <input id="email-address" name="email" type="email" autocomplete="email" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                        </div>

                        <div>

                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>

                            <input id="password" name="password" type="password" autocomplete="new-password" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                        </div>

                        <div>

                            <label for="car_registration_number" class="block text-sm font-medium text-gray-700">Car Registration Number</label>

                            <input id="car_registration_number" name="car_registration_number" type="text" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                        </div>

                    </div>

                    <div>

                        <button type="submit" class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                            Register

                        </button>

                    </div>

                    <div>

                        <p>Already have an account?  <a lass="font-medium text-indigo-600 hover:text-indigo-500" href="/login">Login</a></p>

                    </div>

                </form>

            </div>

        </div>

    </body>

</html>
