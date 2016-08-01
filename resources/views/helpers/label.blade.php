<span class="help-block">
    @if(is_array($text))
        {!! implode('<br>', $text) !!}
    @else
        {!! $text !!}
    @endif
</span>
