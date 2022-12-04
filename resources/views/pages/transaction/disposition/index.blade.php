@extends('layout.main')

@section('content')
    <x-breadcrumb
        :values="[__('menu.transaction.menu'), 'XII/SEP/09/XII/HAHA', __('menu.transaction.disposition_letter')]">
        <a href="{{ route('transaction.disposition.create', 1) }}" class="btn btn-primary">{{ __('menu.general.create') }}</a>
    </x-breadcrumb>

    <div class="alert alert-primary alert-dismissible" role="alert">
        {{ __('model.disposition.notice_me', ['reference_number' => 'XII/SEP/09/XII/HAHA']) }} <a href="{{ route('transaction.incoming.show', 1) }}" class="fw-bold">{{ __('menu.general.view') }}</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @for($i = 0; $i < 5; $i++)
        <x-disposition-card/>
    @endfor
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">2</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="javascript:void(0);">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">5</a>
            </li>
            <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
            </li>
        </ul>
    </nav>
@endsection
