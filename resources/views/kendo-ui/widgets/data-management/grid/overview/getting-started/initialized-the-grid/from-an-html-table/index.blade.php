@extends('layouts.app')

@section('content')
    <a href="https://docs.telerik.com/kendo-ui/controls/data-management/grid/overview#initialize-the-grid">Reference</a>
    <br />
    <br />

    <table id="grid">
        <colgroup>
            <col />
            <col style="width:100px" />
        </colgroup>
        <thead>
            <tr>
                <th data-field="title" data-filterable="false">Title</th>
                <th data-field="year" data-type="number" data-template="<strong>#=year#</strong>">Year</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Star Wars: A New Hope</td>
                <td>1977</td>
            </tr>
            <tr>
                <td>Star Wars: The Empire Strikes Back</td>
                <td>1980</td>
            </tr>
        </tbody>
    </table>
    <br />

    <table id="grid_product">
        <thead>
            <tr>
                <th data-field="sku">SKU</th>
                <th data-field="name">Name</th>
                <th data-field="sell_price">Sell Price</th>
                <th data-field="category_name">Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sell_price }}</td>
                    <td>{{ optional($product->category)->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
    $(document).ready(function(){
        $('#grid').kendoGrid({
            filterable: true,
            sortable: true,
        });
        
        $('#grid_product').kendoGrid({
            filterable: true,
            sortable: true,
        });
    });
    </script>
@endpush
