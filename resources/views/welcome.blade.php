<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Posko Bencana IDN</title>
</head>
<body>
    <header>
        <nav class="container mx-auto items-center px-24 flex justify-between py-8">
            <h1 class="text-3xl">Yayasan IDN</h1>
            <div class="flex items-center">
                <p class="mx-2"><a href="" class="text-slate-700 hover:text-black">Login</a></p>
                <img src="{{ url('/header/facebook.svg')}}" class="w-8" alt="">
            </div>
        </nav>
    </header>
    <main class="container mx-auto px-24">
<article class="flex justify-between items-center my-24">
    <div>
        <h2 class="text-blue-500">POS KOMANDO</h2>
        <p>PENANGANAN BENCANA ALAM DARI YAYASAN IDN</p>
    </div>
    <img src="{{ url('/header/intro.svg')}}" class="w-80" alt="">
</article>
    </main>
</body>
</html>