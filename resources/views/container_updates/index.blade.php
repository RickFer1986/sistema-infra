@extends('layouts.app')

@section('content')
<div class="container mt-4"">
    
    <div class="row">
        <div class="col-12">
            <h2 class="my-4">Lista de Updates dos Container</h2>
            
            <!-- Botão para mostrar o formulário -->
            <button class="btn btn-primary mb-3" id="showFormBtn">Stack</button>

            <!-- Formulário para registrar novos updates -->
            <div id="updateForm" style="display: none;">
                <form action="{{ route('container_updates.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="client_name" class="form-label">Cliente:</label>
                        <input type="text" id="client_name" name="client_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="worker_name" class="form-label">Worker:</label>
                        <input type="text" id="worker_name" name="worker_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="update_date" class="form-label">Data da Atualização:</label>
                        <input type="date" id="update_date" name="update_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="analyst_name" class="form-label">Analista:</label>
                        <input type="text" id="analyst_name" name="analyst_name" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Registrar</button>
                </form>
            </div>

            <table class="table table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Versão</th>
                        <th>Data de Atualização</th>
                        <th>Analista</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($updates as $update)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $update->client_name }}</td>
                        <td>{{ $update->worker_name }}</td>
                        <td>{{ $update->updated_at->format('d/m/Y H:i') }}</td>
                        <td>{{ $update->analyst_name }}</td>
                        <td>
                            @if($update->status == 'success')
                                <span class="badge badge-success" style="background-color: green; color: black;">Sucesso</span>
                            @else
                                <span class="badge badge-danger" style="background-color: red; color: black;">Falha</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('container_updates.show', $update->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('container_updates.edit', $update->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('container_updates.destroy', $update->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Botão Voltar para Início -->
    <div class="mt-4">
        <a href="/" class="btn btn-secondary">Voltar para Início</a>
    </div>
</div>

<script>
    document.getElementById('showFormBtn').addEventListener('click', function() {
        const form = document.getElementById('updateForm');
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    });
</script>
@endsection
