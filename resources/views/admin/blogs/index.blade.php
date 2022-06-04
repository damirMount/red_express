@extends('admin.layouts.app')

@section('content')
    <div class="p-3 bg-form card-body-admin">

        <div class="row">
            <div class="col-sm-12 table-responsive">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="blogs-table">
                    <thead class="bg-primary text-light">
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Баннер</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function () {
            $('#blogs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.blogs.index') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'desc', name: 'desc'},
                    {data: 'banner', name: 'banner'},
                    {data: 'actions', name: 'actions', searchable: false, orderable: false},
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Russian.json"
                },
            });
        });
    </script>
@endpush
