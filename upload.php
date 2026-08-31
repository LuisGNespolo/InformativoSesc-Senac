<?php
require_once __DIR__ . '/../config/database.php';

const EXTENSOES_PERMITIDAS = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
const TAMANHO_MAX_BYTES    = 5 * 1024 * 1024; // 5 MB

/**
 * Processa o upload de um campo <input type="file">.
 * Retorna o nome do arquivo salvo, ou null se nenhum arquivo novo foi enviado.
 * Lança RuntimeException em caso de erro de validação.
 */
function processarUpload(string $campo, ?string $arquivoAntigo = null): ?string
{
    if (empty($_FILES[$campo]) || $_FILES[$campo]['error'] === UPLOAD_ERR_NO_FILE) {
        return null;
    }

    $arquivo = $_FILES[$campo];

    if ($arquivo['error'] !== UPLOAD_ERR_OK) {
        throw new RuntimeException('Erro ao enviar o arquivo (código ' . $arquivo['error'] . ').');
    }

    if ($arquivo['size'] > TAMANHO_MAX_BYTES) {
        throw new RuntimeException('A imagem deve ter no máximo 5 MB.');
    }

    $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
    if (!in_array($extensao, EXTENSOES_PERMITIDAS, true)) {
        throw new RuntimeException('Formato não permitido. Use JPG, PNG, WEBP ou GIF.');
    }

    $tipoMime = mime_content_type($arquivo['tmp_name']);
    $tiposValidos = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
    if (!in_array($tipoMime, $tiposValidos, true)) {
        throw new RuntimeException('O arquivo enviado não parece ser uma imagem válida.');
    }

    if (!is_dir(UPLOAD_DIR)) {
        mkdir(UPLOAD_DIR, 0755, true);
    }

    $nomeFinal = uniqid('img_', true) . '.' . $extensao;
    $destino   = UPLOAD_DIR . $nomeFinal;

    if (!move_uploaded_file($arquivo['tmp_name'], $destino)) {
        throw new RuntimeException('Não foi possível salvar a imagem no servidor.');
    }

    // Remove a imagem antiga, se houver, para não acumular arquivos órfãos.
    if ($arquivoAntigo) {
        $caminhoAntigo = UPLOAD_DIR . $arquivoAntigo;
        if (is_file($caminhoAntigo)) {
            @unlink($caminhoAntigo);
        }
    }

    return $nomeFinal;
}

function removerImagem(?string $arquivo): void
{
    if ($arquivo && is_file(UPLOAD_DIR . $arquivo)) {
        @unlink(UPLOAD_DIR . $arquivo);
    }
}