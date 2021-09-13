@extends('layouts.main')

@section('title', 'Editando:' . $event->title)

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $event->title }}</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" name="image" id="image" class="form-control-file">
        <img src="/img/events/{{ $event->image }}" alt="{{$event->title }}" class="img-preview">
        </div>
    <div class="form-group">
        <label for="title">Evento:</label>
        <input type="text" name="title" id="title" placeholder="Nome do evento" class="form-control"
        value="{{ $event->title}}">
    </div>

    <div class="form-group">
        <label for="date">Data do Evento:</label>
        <input type="date" name="date" id="date" class="form-control" value="{{ $event->date->format('Y-m-d') }}">
    </div>

    <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" name="city" id="city" placeholder="Nome do evento" class="form-control" value="{{ $event->city }}">
</div>

    <div class="form-group">
        <label for="title">O evento é privado?</label>
        <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Descrição do Evento</label>
        <textarea class="form-control" name="description" id="description" placeholder="Descreva aqui o que vai acontecer no evento">{{ $event->description }}</textarea>
    </div>


    <div class="form-group">
        <label for="title">Adicione items de infraestrutura</label>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
        </div>

        <div class="form-group">
            <input type="checkbox" name="items[]" value="Palco"> Palco
        </div>

        <div class="form-group">
            <input type="checkbox" name="items[]" value="cerveja grátis"> cerveja grátis
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Brindes"> Brindes
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Open food"> Open food
        </div>
    </div>
    <input type="submit" value="Editar evento" class="btn btn-primary">
</form>
</div>


@endsection