<div class="card mb-4">
    <div class="card-header pb-0">
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <div class="card-title">
                <h5 class="text-nowrap mb-0 fw-bold">{{ $letter->reference_number }}</h5>
                <small class="text-black">
                    {{ $letter->type == 'incoming' ? $letter->from : $letter->to }} |
                    <span
                        class="text-secondary">{{ __('model.letter.agenda_number') }}:</span> {{ $letter->agenda_number }}
                    |
                    {{ $letter->classification?->type }}
                </small>
            </div>
            <div class="card-title d-flex flex-row">
                <div class="d-inline-block mx-2 text-end text-black">
                    <small class="d-block text-secondary">{{ __('model.letter.letter_date') }}</small>
                    {{ $letter->formatted_letter_date }}
                </div>
                @if($letter->type == 'incoming')
                    <div class="mx-3">
                        <a href="{{ route('transaction.disposition.index', $letter) }}"
                           class="btn btn-primary btn">{{ __('model.letter.dispose') }} <span>({{ $letter->dispositions->count() }})</span></a>
                    </div>
                @endif
                <div class="dropdown d-inline-block">
                    <button class="btn p-0" type="button" id="dropdown-{{ $letter->type }}-{{ $letter->id }}"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    @if($letter->type == 'incoming')
                        <div class="dropdown-menu dropdown-menu-end"
                             aria-labelledby="dropdown-{{ $letter->type }}-{{ $letter->id }}">
                            @if(!\Illuminate\Support\Facades\Route::is('*.show'))
                                <a class="dropdown-item"
                                   href="{{ route('transaction.incoming.show', $letter) }}">{{ __('menu.general.view') }}</a>
                            @endif
                            <a class="dropdown-item"
                               href="{{ route('transaction.incoming.edit', $letter) }}">{{ __('menu.general.edit') }}</a>
                            <form action="{{ route('transaction.incoming.destroy', $letter) }}" class="d-inline"
                                  method="post">
                                @csrf
                                @method('DELETE')
                                <span
                                    class="dropdown-item cursor-pointer btn-delete">{{ __('menu.general.delete') }}</span>
                            </form>
                        </div>
                    @else
                        <div class="dropdown-menu dropdown-menu-end"
                             aria-labelledby="dropdown-{{ $letter->type }}-{{ $letter->id }}">
                            @if(!\Illuminate\Support\Facades\Route::is('*.show'))
                                <a class="dropdown-item"
                                   href="{{ route('transaction.outgoing.show', $letter) }}">{{ __('menu.general.view') }}</a>
                            @endif
                            <a class="dropdown-item"
                               href="{{ route('transaction.outgoing.edit', $letter) }}">{{ __('menu.general.edit') }}</a>
                            <form action="{{ route('transaction.outgoing.destroy', $letter) }}" class="d-inline"
                                  method="post">
                                @csrf
                                @method('DELETE')
                                <span
                                    class="dropdown-item cursor-pointer btn-delete">{{ __('menu.general.delete') }}</span>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <hr>
        <p>{{ $letter->description }}</p>
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <small class="text-secondary">{{ $letter->note }}</small>
            @if(count($letter->attachments))
                <div>
                    @foreach($letter->attachments as $attachment)
                        <a href="{{ $attachment->path_url }}" target="_blank">
                            @if($attachment->extension == 'pdf')
                                <i class="bx bxs-file-pdf display-6 cursor-pointer text-primary"></i>
                            @elseif(in_array($attachment->extension, ['jpg', 'jpeg']))
                                <i class="bx bxs-file-jpg display-6 cursor-pointer text-primary"></i>
                            @elseif($attachment->extension == 'png')
                                <i class="bx bxs-file-png display-6 cursor-pointer text-primary"></i>
                            @endif
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
        {{ $slot }}
    </div>
</div>
