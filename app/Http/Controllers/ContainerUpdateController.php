<?php

namespace App\Http\Controllers;

use App\Models\ContainerUpdate;
use Illuminate\Http\Request;

class ContainerUpdateController extends Controller
{
    /**
     * Lista todas as atualizações
     */
    public function index()
    {
        $updates = ContainerUpdate::all();
        return view('container_updates.index', compact('updates'));
    }

    /**
     * Mostra o formulário para criar uma nova atualização.
     */
    public function create()
    {
        return view('container_updates.create');
    }

    /**
     * Armazena uma nova atualização no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'client_name' => 'required|string|max:255',
            'worker_name' => 'required|string|max:255',
            'update_date' => 'required|date',
            'analyst_name' => 'required|string|max:255',
        ]);

        // Criação de uma nova atualização de container
        $containerUpdate = new ContainerUpdate();
        $containerUpdate->client_name = $request->input('client_name');
        $containerUpdate->worker_name = $request->input('worker_name');
        $containerUpdate->update_date = $request->input('update_date');
        $containerUpdate->analyst_name = $request->input('analyst_name');
        $containerUpdate->save(); // Salva no banco de dados

        // Redireciona para a página de listagem com uma mensagem de sucesso
        return redirect()->route('container_updates.index')->with('success', 'Atualização registrada com sucesso!');
    }

    /**
     * Exibir formulário para editar uma atualização.
     */
    public function edit(ContainerUpdate $containerUpdate)
    {
        return view('container_updates.edit', compact('containerUpdate'));
    }

    public function show($id)
    {
        // Encontre a atualização do container pelo ID
        $containerUpdate = ContainerUpdate::findOrFail($id);
    
        // Retorne a view com os dados da atualização
        return view('container_updates.show', compact('containerUpdate'));
    }

    /**
     * Atualizar uma atualização existente.
     */
    public function update(Request $request, ContainerUpdate $containerUpdate)
    {
        // Validação dos campos
        $request->validate([
            'client_name' => 'required|string|max:255',
            'worker_name' => 'required|string|max:255',
            'update_date' => 'required|date',
            'analyst_name' => 'required|string|max:255',
        ]);

        // Atualiza o registro no banco de dados com os novos valores
        $containerUpdate->update($request->only(['client_name', 'worker_name', 'update_date', 'analyst_name']));

        // Redireciona de volta à página inicial com mensagem de sucesso
        return redirect()->route('container_updates.index')
                     ->with('success', 'Atualização editada com sucesso!');
    }


    /**
     * Deletar uma atualização.
     */
    public function destroy(ContainerUpdate $containerUpdate)
    {
        $containerUpdate->delete();

        return redirect()->route('container_updates.index')
                         ->with('success', 'Atualização deletada com sucesso!');
    }
}
