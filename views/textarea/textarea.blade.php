@include('canvass_paint::field/field_open')

    <textarea id="{{ $field['identifier'] }}" class="{{ $field['classes'] ?? '' }}"
      name="{{ $field['name'] }}"
       @if($field->hasAttribute('required'))
           required="required"
       @endif
       @if($field->hasAttribute('placeholder'))
           placeholder="{{ $field->getAttribute('placeholder') }}"
       @endif
       @if($field->hasAttribute('rows'))
           rows="{{ $field->getAttribute('rows') }}"
       @endif
       @if($field->hasAttribute('min'))
           minlength="{{ $field->getAttribute('min') }}"
       @endif
       @if($field->hasAttribute('max'))
           maxlength="{{ $field->getAttribute('max') }}"
       @endif
    ></textarea>

@include('canvass_paint::field/field_close')
