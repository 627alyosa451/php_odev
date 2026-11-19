<?php
require_once __DIR__ . '/baglanti.php';

$kitaplar = get_db()
    ->query("SELECT * FROM Kitaplar ORDER BY KitapAdi")
    ->fetchAll();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kütüphane Kataloğu</title>
</head>
<body>
    <h1>Kitaplar (<?= count($kitaplar) ?>)</h1>
    <table border="1" cellpadding="4" cellspacing="0">
        <thead>
            <tr>
                <th>Kitap ID</th>
                <th>Yazar ID</th>
                <th>Kitap Adı</th>
                <th>Yayınevi ID</th>
                <th>Sayfa Sayısı</th>
                <th>Konu ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kitaplar as $kitap): ?>
                <tr>
                    <?php foreach ($kitap as $deger): ?>
                        <td><?= htmlspecialchars((string) $deger) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>