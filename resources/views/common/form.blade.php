@push('styles')
<link rel="stylesheet" type="text/css" href="./css/form.css">
@endpush

<form action="{{ $action }}" method="{{ $method ?? 'post' }}" name="{{ $name ?? '' }}">
    @if(isset($csrf) && $csrf)
        {{ csrf_field() }}
    @endif

    @for($index = 0; $index < count($rows); $index++)
        @include('common.form-row', ['index' => $index, 'row' => $rows[$index]])
    @endfor
    <br>
    @foreach($buttons as $button)
        @include('common.form-button', ['button' => $button])
    @endforeach
</form>