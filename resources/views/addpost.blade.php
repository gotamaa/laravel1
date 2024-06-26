<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center my-8">Add New Post</h1>
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="bg-white p-6 rounded shadow-md">
            <form action="{{ route('addpost') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title</label>
                    <input type="text" name="title" id="title" class="w-full p-2 border  rounded mt-1 @error('title') border-red-500 @enderror" value="{{ old('title') }}">
                    @error('title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-gray-700">Content</label>
                    <textarea name="content" id="content" rows="5" class="w-full p-2 border rounded mt-1 @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
                    @error('content')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Post</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
