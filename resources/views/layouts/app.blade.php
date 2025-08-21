<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD Produtos')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('produtos.index') }}" class="text-xl font-bold text-gray-800 hover:text-blue-600 transition duration-300">
                        <i class="fas fa-box mr-2"></i>CRUD Produtos
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('produtos.index') }}" class="text-gray-600 hover:text-blue-600 transition duration-300">
                        <i class="fas fa-list mr-1"></i>Listar
                    </a>
                    <a href="{{ route('produtos.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                        <i class="fas fa-plus mr-1"></i>Novo Produto
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-6 px-4">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 animate-pulse">
                <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 animate-pulse">
                <i class="fas fa-exclamation-circle mr-2"></i>{{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-white border-t mt-auto">
        <div class="max-w-7xl mx-auto py-4 px-4 text-center text-gray-600">
            <p>&copy; 2025 CRUD Produtos - Desenvolvido com Laravel e Tailwind CSS</p>
        </div>
    </footer>
</body>
</html>

