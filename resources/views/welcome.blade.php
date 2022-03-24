@extends('layout.layout')
@section('main_content')
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </thead>
                @foreach ($TeacherData as $item)
                @endforeach
            </table>
        </div>
    </div>
@endsection
