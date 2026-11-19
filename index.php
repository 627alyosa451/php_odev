<?php
require_once __DIR__ . '/baglanti.php';

$muzeler = get_db()
    ->query("SELECT * FROM Muzeler ORDER BY KurulusYili ASC")
    ->fetchAll();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Türkiye Müzeler Envanteri</title>
</head>
<body>
    <h1>Müzeler Listesi (<?= count($muzeler) ?>)</h1>
    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Müze Adı</th>
                <th>Şehir</th>
                <th>Tür</th>
                <th>Kuruluş Yılı</th>
                <th>Ziyaret Durumu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($muzeler as $muze): ?>
                <tr>
                    <?php foreach ($muze as $deger): ?>
                        <td><?= htmlspecialchars((string) $deger) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>