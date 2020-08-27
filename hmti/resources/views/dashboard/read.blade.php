@extends('../layouts/dashboard')

@push('head-script')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

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
@section('header', "Detail Sophistication")
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Name</h4>
                        <p class="card-category">{{$film->title}}</p>
                    </div>
                    <div class="card-body">
                        <div id="typography" style="margin-bottom: 30px;">
                            <div class="card-title">
                                <h2>Description</h2>
                            </div>
                            <div>
                                {{$film->deskripsi}}
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{$film->link}}" target="_blank">for further explanation</a>
                    </div>
                </div>
                <div class="card" style="margin-top: 150px;">
                    <div class="card-header card-header">
                        <h3 class="card-title">{{ $total_comment }} Comment</h3>
                    </div>
                    @foreach ($comments as $comment)
                    <div class="media">
                        <img src=" {{ asset('dashboard/images') . '/' .$comment->user->avatar }}" class="align-self-start rounded-circle mr-3" style="width: 25px; height: 25px; margin-left: 10px;" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $comment->user->name}}</h5>
                            <p style="margin-top: -15px;"><small>{{ $comment->created_at->diffForHumans()}}</small></p>
                            <div class="row" style="margin-top: -15px;">
                                <div class="col-lg-9">
                                    <p>{!! $comment->isi !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <hr>
                </div>
                <div class="card" style="margin-top: 100px;">
                    <div class="card-header card-header">
                        <h4 class="card-title">Give a Comment</h4>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Your Comment</label>
                                        <textarea class="form-control my-editor" rows="5" name="isi"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="user_id" value="{{ Auth::user()->id}}" style="display: none;">
                            <input type="text" name="film_id" value="{{ $film->id }}" style="display: none;">
                            <button type="submit" class="btn btn-info ">Create a Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@push('end-script')
<script>
    var editor_config = {
        path_absolute: "/",
        selector: "textarea.my-editor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback: function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>

@endpush