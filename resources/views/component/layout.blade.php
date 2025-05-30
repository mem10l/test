<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="/" class="navbar-brand">Laravel</a>
                <ul class="navbar-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('contacts.index') }}">Contacts</a></li>
                    <li><a href="{{ route('books.index') }}">books</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main-content">
        <div class="container">
            {{ $slot }}
        </div>
    </main>
</body>
</html>
