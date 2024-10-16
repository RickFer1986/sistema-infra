<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Atualização</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Detalhes da Atualização do Container</h2>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Cliente</h5>
                <p class="card-text">{{ $containerUpdate->client_name }}</p>

                <h5 class="card-title">Versão</h5>
                <p class="card-text">{{ $containerUpdate->worker_name }}</p>

                <h5 class="card-title">Data de Atualização</h5>
                <p class="card-text">{{ $containerUpdate->update_date }}</p>

                <h5 class="card-title">Analista</h5>
                <p class="card-text">{{ $containerUpdate->analyst_name }}</p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('container_updates.index') }}" class="btn btn-primary">Voltar</a>
            <a href="{{ route('container_updates.edit', $containerUpdate->id) }}" class="btn btn-warning">Editar</a>

            <!-- Formulário para deletar o registro -->
            <form action="{{ route('container_updates.destroy', $containerUpdate->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar esta atualização?')">Deletar</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
