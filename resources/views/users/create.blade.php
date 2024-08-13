@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary btn-sm mb-2" href="{{ route('users.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
</div>

@if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
         @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
         @endforeach
      </ul>
    </div>
@endif

<div class="card" style="background-color: #ffffff; border: 1px solid #ddd; border-radius: 8px; padding: 20px;">
    <div class="card-body">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="row">
                <!-- Name and Email side by side -->
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" placeholder="Name" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="email" placeholder="Email" class="form-control"> 
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <!-- Password and Confirm Password side by side -->
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <!-- Role field -->
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>Role:</strong>
                        <select name="roles[]" class="form-control" multiple="multiple">
                            @foreach ($roles as $value => $label)
                                <option value="{{ $value }}">
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <!-- Submit button -->
                <div class="col-md-12 text-left">
                    <button type="submit" class="btn btn-primary btn-sm mt-2 mb-3">
                        <i class="fa-solid fa-floppy-disk"></i> Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
