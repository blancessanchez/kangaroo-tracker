@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
                <div id="dataGrid"></div>
            </div>
        </div>
    </div>
</div>
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
        });        
    </script>
@endpush