<?php

require_once __DIR__ . '/conexao.php';

$tituloPagina = $tituloPagina ?? 'Admin';
$paginaAtiva  = $paginaAtiva ?? '';

function linkAtivo(string $chave, string $ativa): string
{
    return $chave === $ativa
        ? 'bg-[#c59645] text-[#0e2347] font-semibold'
        : 'text-[#d8d5cc] hover:bg-[#16305c] hover:text-white';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($tituloPagina) ?> · Admin SESC SENAC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: { DEFAULT: '#0e2347', dark: '#071d41', light: '#16305c' },
                        cream: '#f8f5f0',
                        gold: { DEFAULT: '#c59645', light: '#c8a64d' },
                        line: '#ddd8d0',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body class="bg-cream text-[#1c2b3a] min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 shrink-0 bg-navy text-white flex flex-col">
            <div class="px-6 py-6 border-b border-[#26406b]">
                <p class="text-xs tracking-[0.2em] text-gold-light uppercase">Ensino Médio</p>
                <h1 class="text-lg font-bold leading-tight mt-1">SESC SENAC · Admin</h1>
            </div>
            <nav class="flex-1 px-3 py-4 space-y-1 text-sm overflow-y-auto">
                <a href="index.php" class="block px-3 py-2 rounded-md transition <?= linkAtivo('dashboard', $paginaAtiva) ?>">Painel</a>
                <a href="configuracoes.php?aba=hero" class="block px-3 py-2 rounded-md transition <?= linkAtivo('configuracoes', $paginaAtiva) ?>">Hero, Sobre &amp; Curso</a>
                <a href="configuracoes.php?aba=contato" class="block px-3 py-2 rounded-md transition <?= linkAtivo('contato', $paginaAtiva) ?>">Contato</a>

                <p class="px-3 pt-5 pb-1 text-[11px] tracking-[0.15em] uppercase text-[#8ca0c0]">Conteúdo em listas</p>
            </nav>
            <div class="px-6 py-4 border-t border-[#26406b] text-sm">
                <p class="text-[#8ca0c0]">Logado como</p>
                <p class="font-semibold truncate"><?= htmlspecialchars($_SESSION['admin_usuario'] ?? '') ?></p>
                <a href="logout.php" class="inline-block mt-3 text-xs text-gold-light hover:text-white transition">Sair da conta</a>
            </div>
        </aside>

        <!-- Conteúdo -->
        <div class="flex-1 flex flex-col min-w-0">
            <header class="bg-white border-b border-line px-8 py-5">
                <h2 class="text-2xl font-bold text-navy-dark"><?= htmlspecialchars($tituloPagina) ?></h2>
            </header>
            <main class="flex-1 px-8 py-8">
                <?php if (!empty($_SESSION['flash_sucesso'])): ?>
                    <div class="mb-6 px-4 py-3 border border-green-300 bg-green-50 text-green-800 text-sm rounded-md">
                        <?= htmlspecialchars($_SESSION['flash_sucesso']) ?>
                    </div>
                    <?php unset($_SESSION['flash_sucesso']); ?>
                <?php endif; ?>
                <?php if (!empty($_SESSION['flash_erro'])): ?>
                    <div class="mb-6 px-4 py-3 border border-red-300 bg-red-50 text-red-800 text-sm rounded-md">
                        <?= htmlspecialchars($_SESSION['flash_erro']) ?>
                    </div>
                    <?php unset($_SESSION['flash_erro']); ?>
                <?php endif; ?>