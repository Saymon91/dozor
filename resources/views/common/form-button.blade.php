<div class="row">
    <button
        type="{{ $button['type'] ?? 'button' }}"
        @if (isset($button['value'])) value="{{ $button['value'] }}" @endif>{{ $button['label'] }}
        @if(isset($button['arguments']))
            @foreach($button['arguments'] as $argument)
                {{ $loop->index }}={{ $argument }}
            @endforeach
        @endif
    </button>
</div>