<div class="card mb-4">
    <div class="card-header pb-0">
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <div class="card-title">
                <h5 class="text-nowrap mb-0 fw-bold">XII/SEP/09/XII/HAHA</h5>
                <small class="text-black">
                    Presiden Joko Widodo |
                    <span class="text-secondary">{{ __('model.letter.agenda_number') }}:</span> 030 |
                    Administrasi
                </small>
            </div>
            <div class="card-title d-flex flex-row">
                <div class="d-inline-block mx-2 text-end text-black">
                    <small class="d-block text-secondary">{{ __('model.letter.letter_date') }}</small>
                    Senin, 22 Maret 2022
                </div>
                @if(\Illuminate\Support\Facades\Route::is('*.incoming.*'))
                    <div class="mx-3">
                        <a href="{{ route('transaction.disposition.index', 1) }}" class="btn btn-primary btn">{{ __('model.letter.dispose') }}</a>
                    </div>
                @endif
                <div class="dropdown d-inline-block">
                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    @if(\Illuminate\Support\Facades\Route::is('*.incoming.*'))
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            @if(!\Illuminate\Support\Facades\Route::is('*.show'))
                                <a class="dropdown-item"
                                   href="{{ route('transaction.incoming.show', 1) }}">{{ __('menu.general.view') }}</a>
                            @endif
                            <a class="dropdown-item"
                               href="{{ route('transaction.incoming.edit', 1) }}">{{ __('menu.general.edit') }}</a>
                            <a class="dropdown-item" href="javascript:void(0);">{{ __('menu.general.delete') }}</a>
                        </div>
                    @else
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            @if(!\Illuminate\Support\Facades\Route::is('*.show'))
                                <a class="dropdown-item"
                                   href="{{ route('transaction.outgoing.show', 1) }}">{{ __('menu.general.view') }}</a>
                            @endif
                            <a class="dropdown-item"
                               href="{{ route('transaction.outgoing.edit', 1) }}">{{ __('menu.general.edit') }}</a>
                            <a class="dropdown-item" href="javascript:void(0);">{{ __('menu.general.delete') }}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt fuga hic in magnam modi
            repellat soluta suscipit unde, voluptate voluptatum!</p>
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <small class="text-secondary">Makan jangan lupa!</small>
            <div>
                <i class="bx bxs-file-pdf display-6 cursor-pointer text-primary"></i>
                <i class="bx bxs-file-blank display-6 cursor-pointer text-primary"></i>
                <i class="bx bxs-file-image display-6 cursor-pointer text-primary"></i>
            </div>
        </div>
        {{ $slot }}
    </div>
</div>
