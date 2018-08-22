<?php  $count = 1; ?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>No.</td>
            <td>Kategori</td>
        </tr>
    </thead>
    <tbody>
    @foreach($list as $key => $value)
        <tr>
            <td width='20%'>{{ $count++}}</td>
            <td>{{ $value->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>  
                </div>
            </div>
        </div>
    
@endsection
