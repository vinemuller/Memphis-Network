@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex items-center mb-6">
        <a href="{{ route('produtos.show', $produto) }}" class="text-gray-600 hover:text-gray-800 mr-4 transition duration-200">
            <i class="fas fa-arrow-left text-xl"></i>
        </a>
        <h1 class="text-2xl font-bold text-gray-800">
            <i class="fas fa-edit text-yellow-600 mr-2"></i>Editar Produto
        </h1>
    </div>

    <form action="{{ route('produtos.update', $produto) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-tag mr-1"></i>Nome do Produto
                </label>
                <input type="text" 
                       name="nome" 
                       id="nome" 
                       value="{{ old('nome', $produto->nome) }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('nome') border-red-500 @enderror"
                       placeholder="Digite o nome do produto"
                       required>
                @error('nome')
                    <p class="mt-1 text-sm text-red-600">
                        <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="preco" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-dollar-sign mr-1"></i>Preço
                </label>
                <input type="number" 
                       name="preco" 
                       id="preco" 
                       value="{{ old('preco', $produto->preco) }}"
                       step="0.01"
                       min="0"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('preco') border-red-500 @enderror"
                       placeholder="0,00"
                       required>
                @error('preco')
                    <p class="mt-1 text-sm text-red-600">
                        <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label for="descricao" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-align-left mr-1"></i>Descrição
                </label>
                <textarea name="descricao" 
                          id="descricao" 
                          rows="4"
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('descricao') border-red-500 @enderror"
                          placeholder="Digite a descrição do produto"
                          required>{{ old('descricao', $produto->descricao) }}</textarea>
                @error('descricao')
                    <p class="mt-1 text-sm text-red-600">
                        <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
            </div>
        </div>

        <div class="bg-gray-50 p-4 rounded-lg">
            <h3 class="text-sm font-medium text-gray-700 mb-2">
                <i class="fas fa-info-circle mr-1"></i>Informações do Produto
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                <div>
                    <strong>ID:</strong> {{ $produto->id }}
                </div>
                <div>
                    <strong>Criado em:</strong> {{ $produto->created_at->format('d/m/Y H:i') }}
                </div>
            </div>
        </div>

        <div class="flex justify-end space-x-4 pt-6 border-t">
            <a href="{{ route('produtos.show', $produto) }}" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition duration-200">
                <i class="fas fa-times mr-2"></i>Cancelar
            </a>
            <button type="submit" class="px-6 py-3 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition duration-200 transform hover:scale-105">
                <i class="fas fa-save mr-2"></i>Atualizar Produto
            </button>
        </div>
    </form>
</div>
@endsection

