<!DOCTYPE html>
<html>

<head>
    <title>Create Student</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex justify-center flex-col items-center h-screen bg-gray-400">

    <form class="flex w-[80%] sm:w-[70%] md:w-[65%] flex-col p-8 justify-center border-2 text-xl rounded-xl bg-gradient-to-r from-black-300 via-blue-300 to-blue-600 shadow-xl" action="/students" method="POST">
        @csrf
        <h1 class="text-center text-2xl font-bold mb-4">Create Student</h1>

        <div class="flex justify-center items-center py-4 gap-4">
            <label class="font-bold text-lg text-red-800">Name:</label>
            <input type="text" class="border-b-2 focus:outline-none focus:border-blue-500" name="name">
        </div>

        <div class="flex justify-center items-center py-4 gap-4">
            <label class="font-bold text-lg text-red-800">Email:</label>
            <input type="email" class="border-b-2 focus:outline-none focus:border-blue-500" name="email">
        </div>
        
        <div class="flex justify-center items-center py-4 gap-4">
            <label class="font-bold text-lg text-red-800">Age:</label>
            <input type="number" class="border-b-2 focus:outline-none focus:border-blue-500" name="age">
        </div>

        <div class="flex py-4 justify-center font-bold">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full" type="submit">Save</button>
        </div>
    </form>

</body>

</html>