@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie um evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" name="image" id="image" class="form-control-file">
        </div>
    <div class="form-group">
        <label for="title">Evento:</label>
        <input type="text" name="title" id="title" placeholder="Nome do evento" class="form-control">
    </div>

    <div class="form-group">
        <label for="date">Data do Evento:</label>
        <input type="date" name="date" id="date" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" name="city" id="city" placeholder="Nome do evento" class="form-control">
</div>

    <div class="form-group">
        <label for="title">O evento é privado?</label>
        <select name="private" id="private" class="form-control">
            <option value="0">Sim</option>
            <option value="1" selected>Não</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Descrição do Evento</label>
        <textarea class="form-control" name="description" id="description" placeholder="Descreva aqui o que vai acontecer no evento"></textarea>
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
    <input type="submit" value="Criar evento" class="btn btn-primary">
</form>
</div>


@endsection
