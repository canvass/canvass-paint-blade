<div id="{{ $field['identifier'] }}" class="{{ $field['classes'] ?? '' }}">
    {{ $field['help_text'] }}

@foreach($field['children'] as $child)
    <div id="{{ $child['identifier'] }}"
      class="{{ $child['classes'] ?? '' }}"
    >
        {!! $child['help_text'] ?? '' !!}

        @foreach($child['children'] as $nested_child)
            @include("canvass_paint::{$nested_child['general_type']}/{$nested_child['general_type']}", [
                'field' => $nested_child
            ])
        @endforeach
    </div>
@endforeach
</div>
