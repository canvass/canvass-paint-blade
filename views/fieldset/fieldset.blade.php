<fieldset id="{{ $field['identifier'] }}" class="{{ $field['wrap_classes'] ?? '' }}">
    <legend>{{ $field['label'] }}</legend>

    @if(isset($help_text))
        @include('canvass_paint::help_text/help_text', compact('identifier','help_text'))
    @endif

    <?php foreach($field['children'] ?? [] as $child): ?>
        @include("canvass_paint::{$child['general_type']}/{$child['general_type']}", [
            'field' => $child
        ])
    <?php endforeach ?>
</fieldset>
