@extends('admin.app', ['title' => 'users'])

@section('maincontent')
    
    @include('admin.page.user.form', ['action' => 'create'])

@endsection