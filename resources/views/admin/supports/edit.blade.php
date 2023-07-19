<h1>Duvida - {{ $support->id }}</h1>

<form action="{{ route('supports.update', $support->id )}}" method="POST">
    @csrf()
    @method('PUT')
    <input type="text" placeholder="Assunto" name='subject' value="{{$support->subject}}">

    <textarea cols="30" rows="5" placeholder="Descricao" name='body'>{{$support->body}}</textarea>
        <button type="submit">Enviar</button>
</form>