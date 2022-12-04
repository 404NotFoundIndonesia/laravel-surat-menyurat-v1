@extends('layout.main')

@section('content')
    <x-breadcrumb
        :values="[__('menu.agenda.menu'), __('menu.agenda.outgoing_letter')]">
    </x-breadcrumb>

    <div class="card mb-5">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <x-input-form name="start_date" :label="__('menu.agenda.start_date')" type="date"/>
                </div>
                <div class="col">
                    <x-input-form name="end_date" :label="__('menu.agenda.end_date')" type="date"/>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="filter_by" class="form-label">{{ __('menu.agenda.filter_by') }}</label>
                        <select class="form-select" id="filter_by" name="filter_by">
                            <option value="created_at" selected="">{{ __('model.general.created_at') }}</option>
                            <option value="received_date">{{ __('model.letter.received_date') }}</option>
                            <option value="letter_date">{{ __('model.letter.letter_date') }}</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="filter_by" class="form-label">{{ __('menu.general.action') }}</label>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-primary">{{ __('menu.general.filter') }}</button>
                                <button class="btn btn-primary">{{ __('menu.general.print') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>{{ __('model.letter.agenda_number') }}</th>
                    <th>{{ __('model.letter.reference_number') }}</th>
                    <th>{{ __('model.letter.to') }}</th>
                    <th>{{ __('model.letter.letter_date') }}</th>
                </tr>
                </thead>
                @if(false)
                <tbody>
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>030</strong></td>
                    <td class="fw-bold">
                        <a href="{{ route('transaction.outgoing.show', 1) }}}">XII/SEP/09/XII/HAHA</a>
                    </td>
                    <td>Wakil Presiden Ma'ruf Amin</td>
                    <td>Senin, 22 Maret 2022</td>
                </tr>
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>030</strong></td>
                    <td class="fw-bold">
                        <a href="{{ route('transaction.outgoing.show', 1) }}}">XII/SEP/09/XII/HAHA</a>
                    </td>
                    <td>Wakil Presiden Ma'ruf Amin</td>
                    <td>Senin, 22 Maret 2022</td>
                </tr>
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>030</strong></td>
                    <td class="fw-bold">
                        <a href="{{ route('transaction.outgoing.show', 1) }}}">XII/SEP/09/XII/HAHA</a>
                    </td>
                    <td>Wakil Presiden Ma'ruf Amin</td>
                    <td>Senin, 22 Maret 2022</td>
                </tr>
                </tbody>
                @else
                    <tbody>
                    <tr>
                        <td colspan="4" class="text-center">
                            {{ __('menu.general.empty') }}
                        </td>
                    </tr>
                    </tbody>
                @endif
                <tfoot class="table-border-bottom-0">
                <tr>
                    <th>{{ __('model.letter.agenda_number') }}</th>
                    <th>{{ __('model.letter.reference_number') }}</th>
                    <th>{{ __('model.letter.to') }}</th>
                    <th>{{ __('model.letter.letter_date') }}</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

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
