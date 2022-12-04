@extends('layout.main')

@section('content')
    <x-breadcrumb
        :values="[__('menu.transaction.menu'), __('menu.transaction.incoming_letter'), __('menu.general.view')]">
        <a href="#" class="btn btn-primary">{{ __('menu.general.print') }}</a>
    </x-breadcrumb>

    <x-letter-card>
        <div class="mt-2">
            <div class="divider">
                <div class="divider-text">{{ __('menu.general.view') }}</div>
            </div>
            <dl class="row mt-3">

                <dt class="col-sm-3">{{ __('model.letter.letter_date') }}</dt>
                <dd class="col-sm-9">Senin, 22 September 2022</dd>

                <dt class="col-sm-3">{{ __('model.letter.received_date') }}</dt>
                <dd class="col-sm-9">Senin, 22 September 2022</dd>

                <dt class="col-sm-3">{{ __('model.letter.reference_number') }}</dt>
                <dd class="col-sm-9">XII/SEP/09/XII/HAHA</dd>

                <dt class="col-sm-3">{{ __('model.letter.agenda_number') }}</dt>
                <dd class="col-sm-9">030</dd>

                <dt class="col-sm-3">{{ __('model.classification.code') }}</dt>
                <dd class="col-sm-9">AB</dd>

                <dt class="col-sm-3">{{ __('model.classification.type') }}</dt>
                <dd class="col-sm-9">Administrasi</dd>

                <dt class="col-sm-3">{{ __('model.letter.from') }}</dt>
                <dd class="col-sm-9">Presiden Joko Widodo</dd>

                <dt class="col-sm-3">{{ __('model.general.created_by') }}</dt>
                <dd class="col-sm-9">M. Iqbal Effendi</dd>

                <dt class="col-sm-3">{{ __('model.general.created_at') }}</dt>
                <dd class="col-sm-9">Senin, 22 September 2022</dd>

                <dt class="col-sm-3">{{ __('model.general.updated_at') }}</dt>
                <dd class="col-sm-9">Senin, 22 September 2022</dd>
            </dl>
        </div>
    </x-letter-card>

@endsection
