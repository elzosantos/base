<x-mail::message>
# Dúvida respondida

Assunto da Duvida {{ $reply->support_id }} foi respondido:
 
{{ $reply->content }} 

<x-mail::button :url="route('replies.index', $reply->support_id)">
Ver
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>


 