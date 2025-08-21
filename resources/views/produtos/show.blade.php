@extends('layouts.app')

@section('title', 'Detalhes do Produto')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
            <a href="{{ route('produtos.index') }}" class="text-gray-600 hover:text-gray-800 mr-4 transition duration-200">
                <i class="fas fa-arrow-left text-xl"></i>
            </a>
            <h1 class="text-2xl font-bold text-gray-800">
                <i class="fas fa-eye text-blue-600 mr-2"></i>Detalhes do Produto
            </h1>
        </div>
        <div class="flex space-x-2">
            <a href="{{ route('produtos.edit', $produto) }}" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition duration-200 transform hover:scale-105">
                <i class="fas fa-edit mr-2"></i>Editar
            </a>
            <form action="{{ route('produtos.destroy', $produto) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem certeza que deseja excluir este produto?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-200 transform hover:scale-105">
                    <i class="fas fa-trash mr-2"></i>Excluir
                </button>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="space-y-6">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    <i class="fas fa-info-circle text-blue-600 mr-2"></i>Informações Básicas
                </h3>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">ID</label>
                        <p class="text-lg text-gray-900 font-mono bg-white px-3 py-2 rounded border">{{ $produto->id }}</p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Nome</label>
                        <p class="text-lg text-gray-900 bg-white px-3 py-2 rounded border">{{ $produto->nome }}</p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Preço</label>
                        <p class="text-2xl font-bold text-green-600 bg-white px-3 py-2 rounded border">
                            R$ {{ number_format($produto->preco, 2, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    <i class="fas fa-align-left text-green-600 mr-2"></i>Descrição
                </h3>
                <div class="bg-white p-4 rounded border min-h-[120px]">
                    <p class="text-gray-900 leading-relaxed">{{ $produto->descricao }}</p>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    <i class="fas fa-clock text-purple-600 mr-2"></i>Datas
                </h3>
                
                <div class="space-y-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Criado em</label>
                        <p class="text-sm text-gray-900 bg-white px-3 py-2 rounded border">
                            <i class="fas fa-calendar-plus mr-2 text-green-600"></i>
                            {{ $produto->created_at->format('d/m/Y H:i:s') }}
                        </p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Atualizado em</label>
                        <p class="text-sm text-gray-900 bg-white px-3 py-2 rounded border">
                            <i class="fas fa-calendar-edit mr-2 text-blue-600"></i>
                            {{ $produto->updated_at->format('d/m/Y H:i:s') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

