@extends('layouts.app')

@section('content')
    <div id="grid"></div>
    <br />

    <div id="grid_product"></div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('#grid').kendoGrid({
                columns: [{
                    field: 'FirstName',
                    title: 'First Name'
                },
                {
                    field: 'LastName',
                    title: 'Last Name'
                }],
                dataSource: {
                    data: [{
                        FirstName: 'Joe',
                        LastName: 'Smith'
                    },
                    {
                        FirstName: 'Jane',
                        LastName: 'Smith'
                    }]
                },
                    pageable: {
                    pageSize: 2
                }
            });

            $('#grid_product').kendoGrid({
                columns: [{
                    field: 'sku',
                    title: 'SKU'
                },
                {
                    field: 'name',
                    title: 'Name'
                },
                {
                    field: 'sell_price',
                    title: 'Sell Price'
                },
                {
                    field: 'category_id',
                    title: 'Category'
                }],
                dataSource: {
                    data: {!! json_encode($products) !!}
                },
                pageable: {
                    pageSize: 10
                }
            });
        });
    </script>
@endpush
