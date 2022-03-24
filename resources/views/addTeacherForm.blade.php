@extends('layout.layout')
@section('main_content')
    <div class="container">
        <div class="row">
            <form method="POST" action="">
                @csrf
                <div class="form-group">
                    <label for="teacherName">Teaher Name</label>
                    <input type="text" class="form-control" id="teacherName" name="teacherName" placeholder="Teaher Name">
                </div>
                <div class="form-group">
                    <label for="teacherEmail">Teacher Email</label>
                    <input type="text" class="form-control" id="teacherEmail" name="teacherEmail"
                        placeholder="Another input">
                </div>
                <div class="form-group">
                    <label for="teacherEmail">Teacher Password</label>
                    <input type="password" class="form-control" id="teacherPassword" name="TeacherPassword"
                        placeholder="Another input">
                </div>
                <div class="form-group">
                    <label for="teacherEmail">Teacher Re-password</label>
                    <input type="password" class="form-control" id="teacherRePassword" name="teacherRePassword"
                        placeholder="Another input">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
