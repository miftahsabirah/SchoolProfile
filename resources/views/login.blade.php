<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="h-auto md:flex sm:p-5 lg:p-20 font-poppins bg-gray-100">
        <div class="bg-white rounded-lg shadow-sm overflow-hidden md:flex w-full">
            <div class="relative w-full h-full justify-around items-center">
                <img class="w-full h-full object-cover" src="img/loginImage.png" alt="login image">
            </div>
            <div class="w-full bg-white mx-auto my-auto sm:p-4 lg:p-10">
                <form id="login-form" class="bg-white">
                    <h1 class="text-gray-800 font-bold lg:text-5xl sm:text-2xl sm:mb-6 lg:mb-10 text-left">Hai! Selamat
                        Datang di Website Company Profile Sekolah</h1>
                    <div class="mb-6">
                        <label for="username"
                            class="block sm:mb-1 lg::mb-2 text-lg font-bold text-gray-900 dark:text-white">Email</label>
                        <input type="text" id="username" name="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Email" required>
                    </div>
                    <div class="mb-6">
                        <label for="password"
                            class="block sm:mb-1 lg::mb-2 text-lg font-bold text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Password" required>
                    </div>
                    <p class="text-sm mr-2 hover:text-blue-500 cursor-pointer text-right sm:mt-6 lg:mt-12">Forgot
                        Password?</p>
                    <button type="submit"
                        class="block w-full bg-orange-500 sm:mt-6 lg::mt-12 py-3.5 rounded-md text-white font-semibold mb-2">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        document.getElementById('login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(e.target);
            const jsonData = {
                username: formData.get('username'),
                password: formData.get('password')
            };
            fetch('http://127.0.0.1:8000/api/login', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(jsonData)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.token) {
                        // Handle successful login, maybe store the token
                        console.log('Login successful:', data.token);
                        // Redirect to the /berita page
                        window.location.href = '{{ route('admingaleri') }}'";
                    } else {
                        // Handle login failure
                        console.error('Login failed:', data);
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
</body>

</html>
