<h1>
    Detalhes da Duvida
</h1>

<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descricao: {{ $support->body }}</li>

</ul>

<form action="{{ route('supports.destroy', $support->id )}}" method="POST">
    @csrf()
    @method('DELETE') 
        <button type="submit">Deletar</button>
</form>