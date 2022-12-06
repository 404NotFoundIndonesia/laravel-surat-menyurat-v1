@extends('layout.main')

@section('content')
    <x-breadcrumb
        :values="[__('navbar.profile.settings')]">
    </x-breadcrumb>

    <div class="row">
        <div class="col">
            {{-- Tab --}}
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.show') }}">{{ __('navbar.profile.profile') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);">{{ __('navbar.profile.settings') }}</a>
                </li>
            </ul>

            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('settings.update') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            @foreach($configs as $config)
                                @continue($config->code == 'language')
                                <div class="col-md-6">
                                    <x-input-form :name="$config->code" :value="$config->value ?? ''" :label="__('model.config.' . $config->code)"/>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">{{ __('menu.general.update') }}</button>
                            <button type="reset" class="btn btn-outline-secondary">{{ __('menu.general.cancel') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
