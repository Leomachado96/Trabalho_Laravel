<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px; 
            border: 1px solid #ddd; 
        }
        th {
            background-color: #919198; 
        }
    </style>
</head>
<body>
    <div class="table">
        <h1>Lista de Tarefas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Completa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarefas as $tarefa)
                    <tr>
                        <td>{{ $tarefa->id }}</td>
                        <td>{{ $tarefa->nome }}</td>
                        <td>{{ $tarefa->email }}</td>
                        <td>{{ $tarefa->telefone }}</td>
                        <td>{{ $tarefa->descricao }}</td>
                        <td>{{ $tarefa->completa ? 'Sim' : 'Não' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>