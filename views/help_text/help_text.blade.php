@if($field['help_text'] ?? false)
<p id="{{ $field['identifier'] }}_help_text" class="help-text">
    {{ $field['help_text'] }}
</p>
@endif
