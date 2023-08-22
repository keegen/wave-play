@extends('theme::layouts.app3')


@section('content')

<form method="post" action="{{ route('airtable.store') }}">
    @csrf
    <!-- Fields for New Vehicles -->
    <input type="text" name="new_vehicles_base_id" placeholder="New Vehicles Base ID">
    <input type="text" name="new_vehicles_table_name" placeholder="New Vehicles Table Name">

    <!-- Fields for Used Vehicles -->
    <input type="text" name="used_vehicles_base_id" placeholder="Used Vehicles Base ID">
    <input type="text" name="used_vehicles_table_name" placeholder="Used Vehicles Table Name">

    <input type="text" name="api_key" placeholder="API Key">
    
    <button type="submit">Save</button>
</form>

@endsection