<div id="{{ $field['identifier'] }}" class="{{ $field['classes'] ?? '' }}">
@if($field['label'] ?? false)
    <h2>{{ $field['label'] }}</h2>
@else
    <hr>
@endif

    {!! $child['help_text'] ?? '' !!}
</div>
