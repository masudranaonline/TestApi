<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-6">Contact Information</h2>

       {{ Form::open([
            'url' => '/students/store',
            'method' => 'POST',
            'enctype' => 'multipart/form-data'
       ])}}
             <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Number -->
        <div class="mb-4">
            <label for="number" class="block text-sm font-medium text-gray-600">Number</label>
            <input type="tel" id="number" name="number" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Address -->
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-600">Address</label>
            <textarea id="address" name="address" rows="3" class="mt-1 p-2 w-full border rounded-md"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
            Submit
        </button>
       {{ Form::close()}}
    </div>

</body>

</html>
