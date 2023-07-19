<h1>Nova Duvida</h1>

<form action="{{ route('supports.store')}}" method="POST">
    @csrf()
    <input type="text" placeholder="Assunto" name='subject'>

    <textarea cols="30" rows="5" placeholder="Descricao" name='body'></textarea>
        <button type="submit">Enviar</button>
</form>