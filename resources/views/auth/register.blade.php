<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-8 shadow-lg rounded-lg w-96">

    <h2 class="text-2xl font-bold mb-4">Register</h2>

    @if(session('success'))
        <div class="bg-green-200 text-green-700 p-2 mb-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="/register" method="POST">
        @csrf

        <label class="block mb-2">Nama</label>
        <input type="text" name="name" class="w-full p-2 border rounded mb-3">

        <label class="block mb-2">Email</label>
        <input type="email" name="email" class="w-full p-2 border rounded mb-3">

        <label class="block mb-2">Password</label>
        <input type="password" name="password" class="w-full p-2 border rounded mb-3">

        <label class="block mb-2">Role</label>
        <select name="role" class="w-full p-2 border rounded mb-3">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>

        <button class="bg-blue-600 text-white w-full py-2 rounded">Register</button>
    </form>

    <p class="mt-3 text-sm">Sudah punya akun? <a href="/login" class="text-blue-600">Login</a></p>
</div>

</body>
</html>
