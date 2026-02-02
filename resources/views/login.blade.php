<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Home</title>
</head>
<body>
    <div class="bg-black flex justify-center items-center max-w-screen h-screen flex-col">
        <h1 class="font-bold text-[40px] text-white ">welcome to your home</h1>
        <a href={{ route('logout') }} class="w-30 h-12.5 bg-slate-600 border border-slate-600 rounded-sm text-black flex justify-center items-center my-5">LOGOUT</a>
    </div>
</body>
</html>