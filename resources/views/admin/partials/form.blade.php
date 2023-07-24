@csrf()
<input type="text" placeholder="Assunto" name='subject' value="{{ $support->subject ?? old('subject') }}">
<textarea cols="30" rows="5" placeholder="Descricao" name='body'> {{ $support->body ?? old('body') }}</textarea>
<button type="submit">Enviar</button>