<div id="{{ $field['identifier'] }}_wrap" class="field-wrap">

    <?php $hide_label ?? $hide_label = false; ?>

    @if(! $hide_label)
        @include('canvass_paint::label/label')
    @endif
