<div>
    @if(count($values))
    <h4 class="fw-bold py-3 mb-4">
        @foreach($values as $value)
            @if($loop->last)
                {{ $value }}
            @else
                <span class="text-muted fw-light">{{ $value }} /</span>
            @endif
        @endforeach
    </h4>
    @endif
</div>
