@include('canvass_paint::field/field_open', ['hide_label' => true])

    @include('canvass_paint::label/label_open')

        <input id="{{ $field['identifier'] }}"
               class="{{ $field['classes']  ?? '' }}"
               type="{{ $field['type'] }}"
               name="{{ $field['name'] }}"
           @if($field['value'] ?? false)
               value="{{ $field['value'] }}"
           @endif
           @include('canvass_paint::attributes/attributes')
        >

        {{ $field['label'] }}

    @include('canvass_paint::label/label_close')

@include('canvass_paint::field/field_close')
