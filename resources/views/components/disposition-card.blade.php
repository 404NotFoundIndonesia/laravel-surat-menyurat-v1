<div class="card mb-4">
    <div class="card-header pb-0">
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <div class="card-title">
                <h5 class="text-nowrap mb-0 fw-bold">{{ $disposition->status?->status }}</h5>
                <small class="text-black">{{ $disposition->to }}</small>
            </div>
            <div class="card-title d-flex flex-row">
                <div class="d-inline-block mx-2 text-end text-black">
                    <small class="d-block text-secondary">{{ __('model.disposition.due_date') }}</small>
                    {{ $disposition->formatted_due_date }}
                </div>
                <div class="dropdown d-inline-block">
                    <button class="btn p-0" type="button" id="dropdown-disposition-{{ $disposition->id }}" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-disposition-{{ $disposition->id }}">
                        <a class="dropdown-item"
                           href="{{ route('transaction.disposition.edit', [$letter, $disposition]) }}">{{ __('menu.general.edit') }}</a>
                        <form action="{{ route('transaction.disposition.destroy', [$letter, $disposition]) }}" class="d-inline"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <span
                                class="dropdown-item cursor-pointer btn-delete">{{ __('menu.general.delete') }}</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <hr>
        <p>{{ $disposition->content }}</p>
        <small class="text-secondary">{{ $disposition->note }}</small>
        {{ $slot }}
    </div>
</div>
