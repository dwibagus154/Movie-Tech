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
@section('header', "Profile")

@section('content')

<div class="col-md-8">
    <div class="card card-profile">
        <div class="card-avatar">
            <a href="javascript:;">
                <img class="img" src="{{ url('dashboard/images') . ('/'). Auth::user()->avatar }}" />
            </a>
        </div>
        <div class="card-body">
            @if (Auth::user()->isadmin === 1)
            <h6 class="card-category text-gray">Admin</h6>
            @else
            <h6 class="card-category text-gray">User</h6>
            @endif
            <h4 class="card-title">{{ Auth::user()->name }}</h4>
            <p class="card-description">
                {{ Auth::user()->bio }}
            </p>
            <a href="{{ url('user/edit') .'/'. Auth::user()->id }}" class="btn btn-light btn-round">Edit Your Profile</a>
        </div>
    </div>
</div>

@endsection

@push('end-script')
@if(session('status'))
<script>
    swal("Good job!", "You Updated your Profile", "success");
</script>
@endif
@endpush