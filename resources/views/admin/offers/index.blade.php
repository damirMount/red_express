@extends('admin.layouts.app')

@section('content')
    <div class="col-auto d-flex justify-content-end">
        <a href="{{ route('admin.offers.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
    </div>
    <div class="m-2 rounded">
        <table class="table table-striped table-bordered rounded" id="offers-table">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Город</th>
                    <th scope="col">За 1 кг</th>
                    <th scope="col">За 1 кубометр</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <style>
        #blogs-table {
            width: 100% !important;
        }
        .control {
            text-align: center;
            color: green;
            padding: 15px!important;
        }
        .control.opened {
            color: red;
        }
        #blogs-table tr:hover {
            cursor: pointer;
        }
    </style>
@endpush

@push('scripts')
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" defer></script>
    <script>
        $(function () {
            let table = $('#offers-table').DataTable({
                responsive: true,
                processing: true,
                ajax: '{!! route('admin.offers.index') !!}',
                columns: [
                    // Responsive control column
                    {
                        data: null,
                        defaultContent: '<i class="fas fa-plus-circle fa-2x"></i>',
                        className: 'control',
                        orderable: false,
                        searchable: false,
                    },
                    {data: 'country'},
                    {data: 'kg_field'},
                    {data: 'cbm_field'},
                    // {data: 'actions'},
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Russian.json"
                },
            });
            $('#offers-table').on('click', 'tbody td.control', function () {
                if (this.classList.contains('opened')) {
                    this.classList.remove('opened');
                    this.innerHTML = '<i class="fas fa-plus-circle fa-2x"></i>';
                }
                else {
                    this.classList.add('opened');
                    this.innerHTML = '<i class="fas fa-minus-circle fa-2x"></i>';
                }
            });
            $('#offers-table tbody').on('click', 'td:not(.control)', function () {
                let data = table.row(this.parentElement).data();
                window.location.href = window.location.origin + '/admin/offers/' + data.id + '/edit';
            });
        });
    </script>
@endpush
