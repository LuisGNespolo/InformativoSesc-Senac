<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Ensino Médio SESC SENAC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-100 flex items-center justify-center">
    <div class="w-full max-w-md px-6">

        <div class="bg-slate-700 rounded-2xl shadow-xl p-8">
            <div class="flex justify-center mb-6">
                <img 
                    src="./assets/img/EMI-logo.png" 
                    alt="Logo Ensino Médio SESC SENAC"
                    class="w-40"
                >
            </div>
            <h1 class="text-2xl font-bold text-white text-center">
                Área do Administrador
            </h1>
            <p class="text-slate-300 text-center mt-2 mb-8">
                Entre com seus dados para continuar
            </p>
            <form action="login.php" method="POST">
                <div class="mb-5">
                    <label 
                        for="usuario" 
                        class="block text-sm font-semibold text-white mb-2"
                    >
                        Usuário
                    </label>
                    <input
                        type="text"
                        id="usuario"
                        name="usuario"
                        placeholder="Digite seu usuário"
                        required
                        class="w-full px-4 py-3 rounded-lg bg-white text-slate-800 outline-none focus:ring-2 focus:ring-orange-400"
                    >
                </div>
                <div class="mb-6">
                    <label 
                        for="senha" 
                        class="block text-sm font-semibold text-white mb-2"
                    >
                        Senha
                    </label>
                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="Digite sua senha"
                        required
                        class="w-full px-4 py-3 rounded-lg bg-white text-slate-800 outline-none focus:ring-2 focus:ring-orange-400"
                    >
                </div>
                <button
                    type="submit"
                    class="w-full bg-orange-400 hover:bg-orange-500 text-white font-bold py-3 rounded-lg transition duration-200"
                >
                    Entrar
                </button>

            </form>

            <!-- Voltar -->
            <div class="text-center mt-6">
                <a 
                    href="index.php"
                    class="text-slate-300 hover:text-orange-400 text-sm transition"
                >
                    ← Voltar para o início
                </a>
            </div>

        </div>

    </div>

</body>

</html>