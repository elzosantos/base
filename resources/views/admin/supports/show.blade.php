 

@extends('admin.layouts.app')

@section('title', 'Detalhes da Duvida')

@section('header')
<h1 class="text-lg text-black-500"  style="color: rgb(255, 255, 255); ">Detalhes Duvida - {{ $support->id }}</h1>
@endsection

@section('content')


<form action="{{ route('supports.destroy', $support->id )}}" method="POST">
    @csrf()
    @method('DELETE') 
        <button type="submit">Deletar</button>
</form>
@endsection