@extends('layout.main')

@section('content')
    <x-breadcrumb
        :values="[__('menu.gallery.menu'), __('menu.gallery.outgoing_letter')]">
    </x-breadcrumb>

    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <div class="col">
            <x-gallery-card
                filename="file-merah-pdf.pdf"
                extension="pdf"
                path="https://avatars.githubusercontent.com/u/51848549?v=4"
            />
        </div>
        <div class="col">
            <x-gallery-card
                filename="file-merah-jpg.jpg"
                extension="jpg"
                path="https://avatars.githubusercontent.com/u/51848549?v=4"
            />
        </div>
        <div class="col">
            <x-gallery-card
                filename="file-merah-png.png"
                extension="png"
                path="https://avatars.githubusercontent.com/u/51848549?v=4"
            />
        </div>
        <div class="col">
            <x-gallery-card
                filename="file-merah-png-2.png"
                extension="png"
                path="https://avatars.githubusercontent.com/u/51848549?v=4"
            />
        </div>
        <div class="col">
            <x-gallery-card
                filename="file-merah-pdf-2.pdf"
                extension="pdf"
                path="https://avatars.githubusercontent.com/u/51848549?v=4"
            />
        </div>
        <div class="col">
            <x-gallery-card
                filename="file-merah-jpg-2.jpg"
                extension="jpg"
                path="https://avatars.githubusercontent.com/u/51848549?v=4"
            />
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
