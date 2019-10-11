<div id="{{ $field['identifier'] }}" class="{{ $field['classes'] ?? '' }}">
    {{ $field['help_text'] }}

<?php foreach($field['children'] as $child)
    <div id="<?php show($child['id']); ?>"
      class="<?php show($child['classes'] ?? ''); ?>"
    >
        <?php foreach($children ?? [] as $child) {
            echo $renderer->render($child);
        } ?>
    </div>
<?php endforeach; ?>
</div>
