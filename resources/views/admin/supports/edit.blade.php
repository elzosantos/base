@extends('admin.layouts.app')

@section('title', 'Editar Tópico')

@section('header')
<h1 class="text-lg text-black-500"  style="color: rgb(255, 255, 255); ">Duvida - {{ $support->id }}</h1>
@endsection

@section('content')
<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @method('PUT')
    @include('admin.supports.partials.form', ['support' => $support])
</form>
@endsection