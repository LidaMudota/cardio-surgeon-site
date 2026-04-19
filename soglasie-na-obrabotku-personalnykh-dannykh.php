<?php
require __DIR__ . '/includes/init.php';
$meta = ['title' => 'Согласие на обработку персональных данных', 'description' => 'Согласие на обработку персональных данных.'];
$pageTitle = 'Согласие на обработку персональных данных';
$pageSubtitle = 'Отдельный документ согласия субъекта персональных данных.';
$documentPath = __DIR__ . '/content/legal/personal-data-consent.txt';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
require __DIR__ . '/includes/legal-document.php';
?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
