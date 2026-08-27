<?php

require_once "conexao.php";

$sql = "SELECT * FROM inscricoes ORDER BY data_envio DESC";

$stmt = $pdo->query($sql);

$inscricoes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/dist/output.css">
    <title>Painel Administrativo</title>
</head>
<body class="bg-gray-100">
    <main class="max-w-7xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-[#071d41] mb-6">
            Inscrições Recebidas
        </h1>
        <div class="overflow-x-auto bg-white shadow">
            <table class="w-full text-left">
                <thead class="bg-[#0e2347] text-white">
                    <tr>
                        <th class="p-4">ID</th>
                        <th class="p-4">Nome</th>
                        <th class="p-4">Sobrenome</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Tipo</th>
                        <th class="p-4">Mensagem</th>
                        <th class="p-4">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscricoes as $inscricao): ?>
                        <tr class="border-b">
                            <td class="p-4">
                                <?= $inscricao["id"] ?>
                            </td>
                            <td class="p-4">
                                <?= htmlspecialchars($inscricao["nome"]) ?>
                            </td>
                            <td class="p-4">
                                <?= htmlspecialchars($inscricao["sobrenome"]) ?>
                            </td>
                            <td class="p-4">
                                <?= htmlspecialchars($inscricao["email"]) ?>
                            </td>
                            <td class="p-4">
                                <?= htmlspecialchars($inscricao["tipo"]) ?>
                            </td>
                            <td class="p-4">
                                <?= htmlspecialchars($inscricao["mensagem"]) ?>
                            </td>
                            <td class="p-4">
                                <?= $inscricao["data_envio"] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>