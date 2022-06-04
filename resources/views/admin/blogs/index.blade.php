@extends('admin.layouts.app')

@section('content')
    <div class="m-2 rounded">
        <table class="table table-striped table-bordered rounded" id="blogs-table">
            <thead>
            <tr>
                <th></th>
                <th scope="col">Заголовок</th>
                <th scope="col">Описание</th>
                <th scope="col">Баннер</th>
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
            let table = $('#blogs-table').DataTable({
                responsive: true,
                processing: true,
                ajax: '{!! route('admin.blogs.index') !!}',
                columns: [
                    // Responsive control column
                    {
                        data: null,
                        defaultContent: '<i class="fas fa-plus-circle fa-2x"></i>',
                        className: 'control',
                        orderable: false,
                        searchable: false,
                    },
                    {data: 'title'},
                    {data: 'content'},
                    {data: 'banner'},
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Russian.json"
                },
            });
            $('#blogs-table').on('click', 'tbody td.control', function () {
                if (this.classList.contains('opened')) {
                    this.classList.remove('opened');
                    this.innerHTML = '<i class="fas fa-plus-circle fa-2x"></i>';
                }
                else {
                    this.classList.add('opened');
                    this.innerHTML = '<i class="fas fa-minus-circle fa-2x"></i>';
                }
            });
            $('#blogs-table tbody').on('click', 'td:not(.control)', function () {
                let data = table.row(this.parentElement).data();
                window.location.href = window.location.origin + '/admin/blogs/' + data.id+'';
            });
        });
    </script>
@endpush
