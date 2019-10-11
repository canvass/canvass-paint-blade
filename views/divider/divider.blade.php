<div id="{{ $field['identifier'] }}" class="{{ $field['classes'] ?? '' }}">
@if($field['label'] ?? false)
    <h2>{{ $label }}</h2>
@else
    <hr>
@endif

@if($field['help_text'] ?? false)
    @include('canvass_paint::help_text/help_text')
@endif
</div>
