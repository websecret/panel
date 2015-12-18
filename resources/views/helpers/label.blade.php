<span class="help-block">
    @if(is_array($text))
        @foreach($text as $value)
            {{{ $value }}}<br/>
        @endforeach
    @else
        {{{ $text }}}
    @endif
</span>