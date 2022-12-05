@extends('layout.main')

@section('content')
    <x-breadcrumb
        :values="[__('menu.transaction.menu'), __('menu.transaction.incoming_letter'), __('menu.general.view')]">
    </x-breadcrumb>

    <x-letter-card :letter="$data">
        <div class="mt-2">
            <div class="divider">
                <div class="divider-text">{{ __('menu.general.view') }}</div>
            </div>
            <dl class="row mt-3">

                <dt class="col-sm-3">{{ __('model.letter.letter_date') }}</dt>
                <dd class="col-sm-9">{{ $data->formatted_letter_date }}</dd>

                <dt class="col-sm-3">{{ __('model.letter.received_date') }}</dt>
                <dd class="col-sm-9">{{ $data->formatted_received_date }}</dd>

                <dt class="col-sm-3">{{ __('model.letter.reference_number') }}</dt>
                <dd class="col-sm-9">{{ $data->reference_number }}</dd>

                <dt class="col-sm-3">{{ __('model.letter.agenda_number') }}</dt>
                <dd class="col-sm-9">{{ $data->agenda_number }}</dd>

                <dt class="col-sm-3">{{ __('model.classification.code') }}</dt>
                <dd class="col-sm-9">{{ $data->classification_code }}</dd>

                <dt class="col-sm-3">{{ __('model.classification.type') }}</dt>
                <dd class="col-sm-9">{{ $data->classification?->type }}</dd>

                <dt class="col-sm-3">{{ __('model.letter.from') }}</dt>
                <dd class="col-sm-9">{{ $data->from }}</dd>

                <dt class="col-sm-3">{{ __('model.general.created_by') }}</dt>
                <dd class="col-sm-9">{{ $data->user?->name }}</dd>

                <dt class="col-sm-3">{{ __('model.general.created_at') }}</dt>
                <dd class="col-sm-9">{{ $data->formatted_created_at }}</dd>

                <dt class="col-sm-3">{{ __('model.general.updated_at') }}</dt>
                <dd class="col-sm-9">{{ $data->formatted_updated_at }}</dd>
            </dl>
        </div>
    </x-letter-card>

@endsection
