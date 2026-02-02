<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>check</title>
</head>
<body>
    <div class="bg-black flex justify-center items-center max-w-screen h-screen">
    <form action="{{ route('login') }}" method="post" class="w-100 h-100 border border-white rounded-lg flex flex-col justify-center bg-white px-[5%]">
        @csrf
        <h1 class="w-full font-bold text-[18px] mb-10">Enter your dynamic password!</h1>
        <input type="text" name="password" class="w-full h-12.5 bg-slate-400 border border-slate-400 rounded-sm text-black px-3" placeholder="PASSWORD">
        <input type="submit" value="login" class="w-full h-12.5 bg-slate-600 border border-slate-600 rounded-sm text-black text-center my-5">
    </form>
    </div>
</body>
</html>