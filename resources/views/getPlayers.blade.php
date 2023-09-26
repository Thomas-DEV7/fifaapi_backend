<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Jogadores</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Listagem de Jogadores</h1>
        <table class="table mt-3" id="playersTable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Time</th>
                    <th>Nacionalidade</th>
                    <th>Cod.</th>
                    <!-- Adicione mais colunas conforme necessário -->
                </tr>
            </thead>
            <tbody>
                <!-- Dados dos jogadores serão inseridos aqui -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Adicione os scripts JavaScript do Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Faz uma solicitação AJAX para a rota da API
            $.ajax({
                url: 'http://127.0.0.1:8000/players', // Substitua pela sua rota da API
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    // Manipula os dados recebidos e os exibe na tabela
                    var tableBody = $('#playersTable tbody');
                    $.each(data, function(index, player) {
                        tableBody.append('<tr><td>' + player.name + '</td><td>' + player.team +
                            '</td><td>' + player.nationality + '</td><td>' + player.id +
                            ' </td></tr>');
                        // Adicione mais colunas conforme necessário
                    });
                },
                error: function() {
                    alert('Erro ao buscar dados dos jogadores.');
                }

            });
        });
    </script>
</body>

</html>
