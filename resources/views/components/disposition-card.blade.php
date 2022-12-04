<div class="card mb-4">
    <div class="card-header pb-0">
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <div class="card-title">
                <h5 class="text-nowrap mb-0 fw-bold">Rahasia</h5>
                <small class="text-black">Presiden Joko Widodo</small>
            </div>
            <div class="card-title d-flex flex-row">
                <div class="d-inline-block mx-2 text-end text-black">
                    <small class="d-block text-secondary">{{ __('model.disposition.due_date') }}</small>
                    Senin, 22 Maret 2022
                </div>
                <div class="dropdown d-inline-block">
                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                        <a class="dropdown-item"
                           href="{{ route('transaction.disposition.edit', [1,1]) }}">{{ __('menu.general.edit') }}</a>
                        <a class="dropdown-item" href="javascript:void(0);">{{ __('menu.general.delete') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt fuga hic in magnam modi
            repellat soluta suscipit unde, voluptate voluptatum!</p>
        <small class="text-secondary">Makan jangan lupa!</small>
        {{ $slot }}
    </div>
</div>
