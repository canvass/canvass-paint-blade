@include('canvass_paint::field/field_open')

    <input id="{{ $field['identifier'] }}" class="{{ $field['classes'] ?? '' }}"
       type="{{ $field['type'] }}" name="{{ $field['name'] }}"
       @if($field['value'] ?? false)
           value="{{ $field['value'] }}"
       @endif
       @if($field->hasAttribute('required'))
           required="required"
       @endif
       @if($field->hasAttribute('placeholder'))
           placeholder="{{ $field->getAttribute('placeholder') }}"
       @endif
       @if($field->hasAttribute('size'))
           size="{{ $field->getAttribute('size') }}"
       @endif
    >

@include('canvass_paint::field/field_close')
