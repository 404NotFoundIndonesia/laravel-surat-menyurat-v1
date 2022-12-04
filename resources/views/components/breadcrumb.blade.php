<div>
    @if(count($values))
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <h4 class="fw-bold py-3 mb-4">
                @foreach($values as $value)
                    @if($loop->last)
                        {{ $value }}
                    @else
                        <span class="text-muted fw-light">{{ $value }} /</span>
                    @endif
                @endforeach
            </h4>
            <div class="py-3">
                {{ $slot }}
            </div>
        </div>
    @endif
</div>
