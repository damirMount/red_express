@extends('admin.layouts.app')

@section('content')
    <section>
        <div class="container bg-light first-wrapper">
            <div class="row">
                <div class="col-12 d-flex">
                    <a class="btn btn-primary ml-1" href="{{ route('admin.blogs.edit', $blog) }}"><i
                            class="fas fa-pen"></i></a>
                    <form id="form-{{ $blog->id }}" class="pl-3" name="delete-form" method="POST"
                          action="{{ route('admin.blogs.destroy', $blog) }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteConfirm(this)" data-id="{{ $blog->id }}"
                                title="{{ __('Удалить') }}"
                                class="btn n btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>

                </div>
                <div class="col-12 mt-2">
                    <div class="card">
                        <div class="card-header h4">
                            {{ $blog->title }}
                        </div>
                        <div class="card-body">
                            <div>
                                {!! $blog->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .card-body img{
            max-width: 100%;
            height: auto;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function deleteConfirm(me) {
            if (confirm('Вы дествительно хотите удалить ?')) {
                let model_id = me.dataset.id;
                $('form#form-' + model_id).submit();
            }
        }
    </script>
@endpush
