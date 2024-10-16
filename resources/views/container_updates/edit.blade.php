<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Atualização</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Atualização do Container</h2>
        
        <!-- Formulário de edição -->
        <form action="{{ route('container_updates.update', $containerUpdate->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="client_name">Cliente</label>
                <input type="text" class="form-control" id="client_name" name="client_name" value="{{ $containerUpdate->client_name }}" required>
            </div>

            <div class="form-group">
                <label for="worker_name">Versão</label>
                <input type="text" class="form-control" id="worker_name" name="worker_name" value="{{ $containerUpdate->worker_name }}" required>
            </div>

            <div class="form-group">
                <label for="update_date">Data de Atualização</label>
                <input type="date" class="form-control" id="update_date" name="update_date" value="{{ $containerUpdate->update_date }}" required>
            </div>

            <div class="form-group">
                <label for="analyst_name">Analista</label>
                <input type="text" class="form-control" id="analyst_name" name="analyst_name" value="{{ $containerUpdate->analyst_name }}" required>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('container_updates.index') }}" class="btn btn-secondary">Cancelar</a>
                <a href="{{ route('container_updates.index', $containerUpdate->id) }}" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
