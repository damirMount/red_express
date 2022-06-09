@extends('admin.layouts.app')

@section('content')
    <section>
        <div class="container bg-light first-wrapper">
            <div class="row">
                <div class="col-12 d-flex">
                    <a class="btn btn-primary ml-1" href="{{ route('admin.offers.edit', $offer) }}"><i
                            class="fas fa-pen"></i></a>
                    <form id="form-{{ $offer->id }}" class="pl-3" name="delete-form" method="POST"
                          action="{{ route('admin.offers.destroy', $offer) }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteConfirm(this)" data-id="{{ $offer->id }}"
                                title="{{ __('Удалить') }}"
                                class="btn n btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
                <div class="col-12 mt-2">
                    <div class="card">
                        <div class="card-header h4">
                            <div class="row">
                                <div class="col-2">
                                    <span class="font-size-16">Страна:</span>
                                </div>
                                <div class="col-2 p-0">
                                    <span class="font-size-18 font-weight-bold">{{ $offer->country }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-header h4">
                            <div class="col-2">
                                <span>Страна:</span>
                            </div>
                            <div class="col-2 p-0">
                                {{ $offer->country }}
                            </div>
                            <span>За 1 кг:</span>
                            {{ $offer->kg_field }}
                        </div>
                        <div class="card-header h4">
                            <span>За 1 кубометр:</span>
                            {{ $offer->cbm_field }}
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
