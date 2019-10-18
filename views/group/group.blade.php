<fieldset id="{{ $field['identifier'] }}" class="{{ $field['wrap_classes'] ?? '' }}">
    <legend>{{ $field['label'] }}</legend>

    @include('canvass_paint::help_text/help_text')

    <?php
    $parent_name = $field['name'];

    if ('checkbox-group' === $field['type']) {
        $parent_name .= '[]';
    }

    foreach($field['children'] ?? [] as $child):
        $child['name'] = $parent_name;
    ?>

        @include("canvass_paint::{$child['general_type']}/{$child['general_type']}", [
            'field' => $child
        ])

    <?php endforeach; ?>
</fieldset>
