<x-layout title="Add nova senha">
    <form action="/senhas/salvar" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <input type="submit">
    </form>
</x-layout>