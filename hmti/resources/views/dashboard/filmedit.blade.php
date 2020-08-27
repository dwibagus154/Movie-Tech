@extends('../layouts/dashboard')

@section('title','User Profile')


@push('head-script')
@if (Auth::user()->isadmin === null)
<script>
    window.location = 'http://127.0.0.1:8000/movie'
</script>

@endif
@endpush

@section('sidebar')
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('./home') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ url('./user') }}">
            <i class="material-icons">person</i>
            <p>User Profile</p>
        </a>
    </li>
    <li class="nav-item active ">
        <a class="nav-link" href="{{ url('./movie')}}">
            <i class="material-icons">movie</i>
            <p>sophistication</p>
        </a>
    </li>
</ul>
@endsection

@section('header', "Edit Sophistication")

@section ('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title">Edit Sophistication</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('movie') . '/' . $film->id }}">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="bmd-label-floating">Name</label>
                            <input type="text" class="form-control" name="title" value="{{ $film->title, old('title') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="bmd-label-floating">Link</label>
                            <input type="text" class="form-control" name="link" value="{{ $film->link, old('link') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Description</label>
                            <textarea class="form-control" rows="5" name="deskripsi">{{$film->deskripsi}}</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Update Sophistication</button>
            </form>
        </div>
    </div>
</div>
@endsection