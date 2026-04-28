<?php
if (!isset($workDirectionsData) || !is_array($workDirectionsData)) {
    require __DIR__ . '/work-directions-data.php';
}

$directionMap = [];
?>
<div class="spec-grid" aria-label="Карточки направлений работы">
    <?php foreach ($workDirectionsData as $direction): ?>
        <?php
        $directionId = (string) ($direction['id'] ?? '');
        if ($directionId === '') {
            continue;
        }

        $cardTitle = (string) ($direction['card_title'] ?? '');
        $cardDescription = (string) ($direction['card_description'] ?? '');
        $icon = (string) ($direction['icon'] ?? '');
        $cardClass = $directionId === 'coronary-stenting' ? ' spec-card--heart' : '';

        $directionMap[$directionId] = [
            'title' => (string) ($direction['full_title'] ?? $cardTitle),
            'paragraphs' => array_values(array_filter($direction['paragraphs'] ?? [], static fn ($item) => is_string($item) && $item !== '')),
            'images' => array_values(array_filter($direction['images'] ?? [], static fn ($item) => is_array($item) && !empty($item['src']))),
            'warning' => (string) ($direction['warning'] ?? ''),
            'icon' => $icon,
        ];
        ?>
        <article class="spec-card<?= $cardClass ?>" data-direction-id="<?= htmlspecialchars($directionId, ENT_QUOTES, 'UTF-8') ?>">
            <div class="spec-card__icon" aria-hidden="true">
                <img src="<?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?>" alt="">
            </div>
            <div class="spec-card__content">
                <h3 class="spec-card__title"><?= htmlspecialchars($cardTitle, ENT_QUOTES, 'UTF-8') ?></h3>
                <p class="spec-card__text"><?= htmlspecialchars($cardDescription, ENT_QUOTES, 'UTF-8') ?></p>
                <button class="spec-card__details" type="button" data-direction-open>Подробнее</button>
            </div>
        </article>
    <?php endforeach; ?>
</div>

<div class="direction-modal" data-direction-modal hidden>
    <div class="direction-modal__overlay" data-direction-close></div>
    <div
        class="direction-modal__dialog"
        role="dialog"
        aria-modal="true"
        aria-labelledby="direction-modal-title"
        aria-describedby="direction-modal-text"
    >
        <button class="direction-modal__close" type="button" data-direction-close aria-label="Закрыть окно">
            <span aria-hidden="true">×</span>
        </button>

        <div class="direction-modal__media">
            <img src="" alt="" data-direction-modal-image loading="lazy">
        </div>

        <div class="direction-modal__body">
            <p class="direction-modal__label">Направление работы</p>
            <h3 class="direction-modal__title" id="direction-modal-title" data-direction-modal-title></h3>
            <div class="direction-modal__text" id="direction-modal-text" data-direction-modal-text></div>
            <p class="direction-modal__warning" data-direction-modal-warning hidden></p>
            <div class="direction-modal__gallery" data-direction-modal-gallery hidden></div>
        </div>
    </div>
</div>

<script type="application/json" data-work-directions-json><?= json_encode($directionMap, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
