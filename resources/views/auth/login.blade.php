<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-8 shadow-lg rounded-lg w-96">

    <h2 class="text-2xl font-bold mb-4">Login</h2>

    @if(session('error'))
        <div class="bg-red-200 text-red-700 p-2 mb-3 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form action="/login" method="POST">
        @csrf

        <label class="block mb-2">Email</label>
        <input type="email" name="email" class="w-full p-2 border rounded mb-3">

        <label class="block mb-2">Password</label>
        <input type="password" name="password" class="w-full p-2 border rounded mb-3">

        <button class="bg-blue-600 text-white w-full py-2 rounded">Login</button>
    </form>

    <p class="mt-3 text-sm">Belum punya akun? <a href="/register" class="text-blue-600">Register</a></p>
</div>

</body>
</html>
