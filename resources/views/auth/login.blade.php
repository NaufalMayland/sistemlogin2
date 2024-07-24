
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body class="bg-blue-400">
    <form action="{{ route('login') }}" method="POST" class="flex justify-center items-center h-screen w-auto">
        @csrf
        <div class="space-y-4 bg-slate-50 p-10 drop-shadow rounded">
            <div class="text-2xl text-center">
                <h1>Login</h1>
                <br>
                @if($errors->any())
                <div class="bg-red-300 text-sm p-3 rounded text-left">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="space-y-4">
                <div class="grid">
                    <label for="" class="text-sm">Email</label>
                    <input type="email" value="" id="email" name="email" class="border w-64 text-sm p-1" required>
                </div>
                <div class="grid">
                    <label for="" class="text-sm">Password</label>
                    <input type="password" id="password" name="password" class="border w-64 text-sm p-1" required>
                </div>
            </div>
            <br>
            <div class="grid justify-items-end">
                
                <button class="bg-orange-500 py-1 text-white px-3 rounded" type="submit">login</button>
            </div>
        </div>
    </form>
</body>
</html>
