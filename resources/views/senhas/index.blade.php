<x-layout title="Senhas">
    <a href="/senhas/criar">Adicionar</a>

    <ul>
        @foreach ($senhas as $t)
            <li>{{ $t ->service }}</li>
        @endforeach
    </ul>
</x-layout>