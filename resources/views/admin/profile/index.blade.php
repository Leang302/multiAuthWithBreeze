@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile Page</h1>
        </div>

        <div class="section-body">
            <div class="card-header">
                <h4>Update user profile</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.profile.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="{{ auth()->user()->email }}">
                    </div>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        <div class="section-body">
            <div class="card-header">
                <h4>Update Password</h4>

            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Current password</label>
                    <input type="text" name="current_password" class="form-control">
                </div>
                <div class="form-group">
                    <label>New password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirm password</label>
                    <input type="text" name="password_confirmation" class="form-control">
                </div>
                <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </section>
@endsection
