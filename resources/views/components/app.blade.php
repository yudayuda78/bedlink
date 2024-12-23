@props(['bg' => 'bg-white', 'title' => 'BEDlink'])
<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-adsense-account" content="ca-pub-9697129609724227">
    <link rel="icon" type="image/x-icon" href="/img/ui/favicon.png">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9697129609724227"
     crossorigin="anonymous"></script>

</head>

<body class="{{ $bg }}">
    {{ $slot }}
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script>
    const toast = document.getElementById('toast');
    setTimeout(() => {
        toast.classList.remove('animate-fade-in');
        toast.classList.add('animate-fade-out');
        setTimeout(() => {
            toast.style.display = 'none';
        }, 400);
    }, 4000);
</script>

</html>

