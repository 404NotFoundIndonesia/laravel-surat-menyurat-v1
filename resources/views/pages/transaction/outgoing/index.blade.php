@extends('layout.main')

@section('content')
    <x-breadcrumb
        :values="[__('menu.transaction.menu'), __('menu.transaction.outgoing_letter')]">
        <a href="{{ route('transaction.outgoing.create') }}" class="btn btn-primary">{{ __('menu.general.create') }}</a>
    </x-breadcrumb>

    @for($i = 0; $i < 5; $i++)
        <x-letter-card/>
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
