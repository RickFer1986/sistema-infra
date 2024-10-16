@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Atualização de Containers</h2>

    <!-- Exibe erros de validação -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('container_updates.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="client_name">Cliente:</label>
            <input type="text" class="form-control" id="client_name" name="client_name" required>
        </div>

        <div class="form-group">
            <label for="worker_name">Worker:</label>
            <input type="text" class="form-control" id="worker_name" name="worker_name" placeholder="Exemplo: 3..2.1" required>
        </div>

        <div class="form-group">
            <label for="update_date">Data de Atualização:</label>
            <input type="date" class="form-control" id="update_date" name="update_date" required>
        </div>

        <div class="form-group">
            <label for="analyst_name">Analista:</label>
            <input type="text" class="form-control" id="analyst_name" name="analyst_name" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
