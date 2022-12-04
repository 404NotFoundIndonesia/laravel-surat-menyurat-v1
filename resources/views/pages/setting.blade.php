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
                    <div class="row">
                        <div class="col-md-6">
                            <x-input-form name="default_password" :label="__('model.config.default_password')"/>
                        </div>
                        <div class="col-md-6">
                            <x-input-form name="page_size" :label="__('model.config.page_size')"/>
                        </div>
                        <div class="col-md-6">
                            <x-input-form name="app_name" :label="__('model.config.app_name')"/>
                        </div>
                        <div class="col-md-6">
                            <x-input-form name="institution_name" :label="__('model.config.institution_name')"/>
                        </div>
                        <div class="col-md-6">
                            <x-input-form name="institution_address" :label="__('model.config.institution_address')"/>
                        </div>
                        <div class="col-md-6">
                            <x-input-form name="institution_phone" :label="__('model.config.institution_phone')"/>
                        </div>
                        <div class="col-md-6">
                            <x-input-form name="institution_email" :label="__('model.config.institution_email')"/>
                        </div>
                        <div class="col-md-6">
                            <x-input-form name="pic" :label="__('model.config.pic')"/>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">{{ __('menu.general.update') }}</button>
                        <button type="reset" class="btn btn-outline-secondary">{{ __('menu.general.cancel') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
