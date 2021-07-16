@extends('dashboard.base')

@section('content')
<dashboard :data="{{ json_encode($data) }}"></dashboard>
@endsection

