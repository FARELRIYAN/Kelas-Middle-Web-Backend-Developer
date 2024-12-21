<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto p-4 bg-white shadow-md rounded-lg mt-10">
        <div class="text-center">
            <img src="{{ $data['photo'] }}" alt="Profile Photo" class="w-32 h-32 rounded-full mx-auto">
            <h1 class="text-2xl font-bold mt-4">{{ $data['name'] }}</h1>
            <p class="text-gray-600">{{ $data['bio'] }}</p>
        </div>
        <div class="mt-6">
            <h2 class="text-lg font-semibold">Details</h2>
            <p class="mt-2"><strong>Alamat:</strong> {{ $data['alamat'] }}</p>
            <p class="mt-2"><strong>Sekolah:</strong> {{ $data['sekolah'] }}</p>
        </div>
    </div>
</body>
</html>
