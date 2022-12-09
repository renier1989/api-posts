<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Api-Posts</title>
    <script>
        tailwind.config = {
              theme: {
                extend: {
                  colors: {
                    clifford: '#da373d',
                  }
                }
              }
            }
    </script>
</head>

<body class="bg-gray-700 text-gray-600">
    <div class=" container mx-auto px-4">
        <div class="text-3xl font-bold text-white mt-5">
            Posts Publicados
        </div>
        <div class="grid  grid-cols-3 py-10">
            @foreach ($posts as $post)
            <div clasS="bg-white hover:bg-blue-100  border border-gray-200 p-5">
                <h2 class="font-bold text-lg mb-4">
                    {{$post->title}}
                </h2>
                <p class="text-xs">{{$post->excerpt}}</p>
                <p class="text-xs text-right">{{$post->published_at}}</p>
            </div>
            @endforeach
        </div>
        <div class="mb-10">
            {{$posts->links()}}
        </div>
    </div>
</body>
</html>