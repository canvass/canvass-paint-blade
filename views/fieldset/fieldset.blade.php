<fieldset id="{{ $field['identifier'] }}" class="{{ $field['classes'] ?? '' }}">
    <legend>{{ $field['label'] }}</legend>

    @include('canvass_paint::help_text/help_text', compact('identifier','help_text'))

    <?php foreach($field['children'] ?? [] as $child): ?>
        @include("canvass_paint::{$child['general_type']}/{$child['general_type']}", [
            'field' => $child
        ])
    <?php endforeach ?>
</fieldset>
