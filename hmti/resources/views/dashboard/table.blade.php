@extends('../layouts/dashboard')

@section('title','Film')

@section('sidebar')
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('./home') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('./user') }}">
            <i class="material-icons">person</i>
            <p>User Profile</p>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('./movie')}}">
            <i class="material-icons">movie</i>
            <p>sophistication</p>
        </a>
    </li>
</ul>
@endsection
@section('header', "Sophistication")

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Sophistication</h4>
                        <p class="card-category">All the advanced technology for making hollywood films</p>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            @if (Auth::user()->isadmin === 1)
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                                Create Sophistication
                            </button>
                            @endif
                            <form action="" class="form-inline" method="GET">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                @if (session('edit'))
                                <div class="alert alert-link">
                                    {{ session('edit') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="table-responsive" style="margin-top: 20px;">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>

                                <tbody>
                                    @foreach($films as $film)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{$film->title}}
                                        </td>
                                        <td>
                                            <div style="display:inline-flex">
                                                <a href="{{ url('./movie/read') .'/' . $film->id }}" class="badge badge-success" style="height: 18px; margin-right:10px"><i class="fa fa-eye"></i></a>

                                                @if (Auth::user()->isadmin === 1)
                                                <a href="{{ url('./movie/edit') .'/' . $film->id }}" class="badge badge-light" style="height: 18px; margin-right:10px"><i class="fa fa-pencil"></i></a>
                                                <div style="margin-top:-5px">
                                                    <form action="{{ url('./movie') .'/' . $film->id }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge badge-danger delete" onclick="confirm('are you sure ?')" type="submit" style="cursor: pointer; color:white; "><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Sophistication</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Name</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Link</label>
                                <input type="text" class="form-control" name="link">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Short Description</label>
                                <textarea class="form-control" rows="5" name="deskripsi"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Create</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection


@push('end-script')
@if(session('Success'))
<script>
    swal("Good job!", "You create the sophistication", "success");
</script>
@elseif(session('comment'))
<script>
    swal("Good job!", "You create the Comment", "success");
</script>
@endif
@endpush