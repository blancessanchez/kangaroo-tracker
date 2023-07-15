@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="add-kangaroo">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddKangaroo">
                Add Kangaroo
            </button>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="dataGrid"></div>
            </div>
        </div>
    </div>
@endsection

@push('modals')
    <x-kangaroo.modal-add />
    <x-kangaroo.modal-edit />
    <x-loading />
@endpush

@push('scripts')
    <script >
        var kangaroos = @json($kangaroos);
        var genderEnum = @json($genderEnum);
        var friendlinessEnum = @json($friendlinessEnum);
    </script>
@endpush
