<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/vendor/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('css/vendor/all.min.css') }}">

        <!-- Scripts -->
        @php
            $manifestPath = public_path('build/manifest.json');
            $manifest = json_decode(file_get_contents($manifestPath), true);
        @endphp
        <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
        <script type="module" src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}"></script>
        
        <!-- Bootstrap JS -->
        <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
        
        <!-- Custom CSS -->
        <style>
            :root {
                --primary-color: #6c5ce7;
                --secondary-color: #a29bfe;
                --accent-color: #fd79a8;
            }
            
            .hero-section {
                background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
                color: white;
                padding: 4rem 0;
                min-height: 60vh;
                display: flex;
                align-items: center;
            }
            
            .hero-image {
                animation: float 3s ease-in-out infinite;
            }
            
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }
            
            .media-card {
                background: white;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
                height: 100%;
            }
            
            .media-card:hover {
                transform: translateY(-5px);
            }
            
            .server-status {
                background: white;
                border-radius: 10px;
                padding: 1.5rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                border-left: 4px solid var(--primary-color);
            }
            
            .server-status.online {
                border-left-color: #00b894;
            }
            
            .server-status.offline {
                border-left-color: #d63031;
            }
            
            .server-status.maintenance {
                border-left-color: #fdcb6e;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
