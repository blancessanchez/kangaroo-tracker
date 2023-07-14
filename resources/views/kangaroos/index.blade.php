@extends('layouts.app')

@section('content')
<div class="container">
    <div class="add-kangaroo col-md-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddKangaroo">
            Add Kangaroo
        </button>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div id="dataGrid"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAddKangaroo" tabindex="-1" role="dialog" aria-labelledby="modalAddKangarooTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addKangarooTitle">Add Kangaroo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="formKangaroo">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nickname">Nickname</label>
                        <input type="text" class="form-control" name="nickname" id="nickname" placeholder="Enter nickname">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="weight">Weight</label>
                        <input type="number" class="form-control" name="weight" id="weight" placeholder="Enter weight">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="height">Height</label>
                        <input type="number" class="form-control" name="height" id="height" placeholder="Enter height">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="">Choose...</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="color">Color</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder="Enter color">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="friendliness">Friendliness</label>
                        <select class="form-control" id="friendliness" name="friendliness">
                            <option value="">Choose...</option>
                            <option value="1">Friendly</option>
                            <option value="2">Independent</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="birthday">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
  </div>
</div>
<x-loading></x-loading>
@endsection

@push('scripts')
    <script type="module">
        $(function() {
            const data = {!! json_encode($kangaroos) !!};
            $('#dataGrid').dxDataGrid({
                dataSource: data,
                columns: [
                    { dataField: 'name', caption: 'Name' },
                    { dataField: 'nickname', caption: 'Nickname' },
                    { dataField: 'weight', caption: 'Weight' },
                    { dataField: 'height', caption: 'Height' },
                    { dataField: 'gender', caption: 'Gender' },
                    { dataField: 'color', caption: 'Color' },
                    { dataField: 'friendliness', caption: 'Friendliness' },
                    { dataField: 'birthday', caption: 'Birthday' },
                ],
                paging: {
                    enabled: true
                },
                pager: {
                    showPageSizeSelector: true,
                    allowedPageSizes: [5, 10, 20],
                    showInfo: true
                }
            });

            $('#formKangaroo').submit(function(e) {
                $('.loading_modal').show();

                e.preventDefault();

                var formData = $(this).serialize();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '/kangaroos',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        // $('#modalAddKangaroo').modal('hide');
                        // $('.modal-backdrop').remove();
                        location.reload();
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });        
    </script>
@endpush