<div id="{{ $field['identifier'] }}_wrap"
     class="{{ $field['wrap_classes'] ?? config(
        'canvass.defaults.field.wrap_classes', ''
     ) }}"
>

    @php
    $hide_label = $hide_label ?? false;
    @endphp

    @if(! $hide_label)
        @include('canvass_paint::label/label')
    @endif
