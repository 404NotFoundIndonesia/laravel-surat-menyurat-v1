<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <div>
                <h5 class="card-title mb-0 text-uppercase">{{ $extension }}</h5>
                <small>
                    <a href="/" class="fw-bold">XII/SEP/09/XII/HAHA</a>
                </small>
            </div>
            @if(strtolower($extension) == 'pdf')
                <i class="bx bxs-file-pdf display-5"></i>
            @elseif(strtolower($extension) == 'jpg')
                <i class="bx bxs-file-jpg display-5"></i>
            @elseif(in_array(strtolower($extension), ['jpeg', 'png']))
                <i class="bx bxs-file-image display-5"></i>
            @else
                <i class="bx bxs-file display-5"></i>
            @endif
        </div>
        <div class="accordion mt-3" id="accordion-{{ str_replace('.', '-', $filename) }}">
            <div class="accordion-item card">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-id-{{ str_replace('.', '-', $filename) }}" aria-expanded="false" aria-controls="accordion-id-{{ str_replace('.', '-', $filename) }}">
                    {{ $filename }}
                </button>
                <div id="accordion-id-{{ str_replace('.', '-', $filename) }}" class="accordion-collapse collapse text-center" data-bs-parent="#accordion-{{ str_replace('.', '-', $filename) }}" style="">
                    @if(strtolower($extension) == 'pdf')
                        <button class="btn my-3 btn-primary">{{ __('menu.general.download') }}</button>
                    @elseif(in_array(strtolower($extension), ['jpg', 'jpeg', 'png']))
                        <img src="{{ $path }}" width="100%" alt="Picture">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
