<form id="{{ $identifier }}" class="{{ $classes ?? '' }}"
  method="post" action="{{ $action_url }}"
>
    @csrf

    {!! $introduction ?? '' !!}

    <p class="intro-required-help" aria-hidden="true">
        Fields marked with * are required.
    </p>

    @foreach($fields as $index => $field)
        @includeIf("canvass_paint::{$field['general_type']}/{$field['general_type']}")
    @endforeach

    <div class="{{ ($button_classes ?? false) ?
        'wrap-submit-' . str_replace(' ', ' wrap-submit-', trim($button_classes)) :
        'wrap-submit'
    }}">
        <button class="{{ $button_classes ?? '' }}" type="submit">
            {{ $submit_text ?? 'Submit' }}
        </button>
    </div>
</form>
