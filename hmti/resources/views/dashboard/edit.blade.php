@extends('../layouts/dashboard')

@section('title','User Profile')

@section('sidebar')
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('./home') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item active ">
        <a class="nav-link" href="{{ url('./user') }}">
            <i class="material-icons">person</i>
            <p>User Profile</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ url('./movie')}}">
            <i class="material-icons">movie</i>
            <p>sophistication</p>
        </a>
    </li>
</ul>
@endsection
@section('header', "Edit Profile")
@section ('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Complete your profile</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('user') . '/' . $user-> id    }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name, old('name') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email, old('email') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">About Me</label>
                            <input class="form-control" rows="5" name="bio" value="{{ $user->bio, old('bio') }}"></input>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('dashboard/images') .'/'. $user->avatar}}" alt="" width="150px" height="150px">
                    <br>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <input type="file" id="avatar" name="avatar">
                    </div>
                </div>

                <button type="submit" class="btn btn-info ">Update Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection