<div class="row">
    <input
        type="{{ $row['type'] ?? 'text' }}"
        name="{{ $row['name'] ?? 'field' . $index }}"
        id="{{ $row['id'] ?? $row['name'] ?? 'field' . $index }}"
        @if(isset($row['attributes']))
            @foreach($row['attributes'] as $argument)
                {{ $loop->index }}={{ $argument }}
            @endforeach
        @endif

        @if (!isset($row['attributes']) || !isset($row['attributes']['placeholder']))
            placeholder=" "
        @endif
    >

    @if (isset($row['label']))
        <label for="{{ $row['id'] ?? $row['name'] ?? 'field' . $index }}">{{ $row['label'] }}</label>
    @endif
</div>