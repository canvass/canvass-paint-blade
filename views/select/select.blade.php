@include('canvass_paint::field/field_open')

    <select id="{{ $field['identifier'] }}" class="{{ $field['classes'] ?? '' }}"
        name="{{ $field['name'] }}"
       @if($field->hasAttribute('required') ?? false)
           required="required"
       @endif
    >
    @if(! empty($field['children']))
        @foreach($field['children'] as $index => $child)
            @include('canvass_paint::option/option')
        @endforeach
    @endif
    </select>

@include('canvass_paint::field/field_close')
