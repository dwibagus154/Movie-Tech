@extends('../layouts.dashboard')

@section('title', "Dashboard")

@section('sidebar')
<ul class="nav">
    <li class="nav-item active  ">
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
    <li class="nav-item ">
        <a class="nav-link" href="{{ url('./movie')}}">
            <i class="material-icons">movie</i>
            <p>sophistication</p>
        </a>
    </li>
</ul>

@endsection

@section('header', "Dashboard")


@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card" style="padding: 30px;">
            <div class="card-header card-header" style="margin-bottom:30px;">
                <h3 class="card-title" style="text-align: center; ">About Us</h3>
            </div>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-6">
                    <img src="{{ asset('dashboard/images/cgi.jpg')}}" alt="" style="width: 400px; height:200px;">
                </div>
                <div class="col-md-6">
                    <p class="section-description">Hollywood's dominance of the movie industry has been the subject of numerous studies. An interdisciplinary
                        literature review in this thesis identified twenty different single or multiple factor explanations that try to account for major
                        studio dominance at different time periods but cannot comprehensively explain hoy Hollywood acquired and maintained dominance for nine decades.
                        In this website. There are some sophistication in order to create a Holywood film. Futhermore we can discuss about theese shopistication. You can gice a comment for each shopistication</p>
                </div>
            </div>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-6">
                    <img src="{{ asset('dashboard/images/motion.jpg')}}" alt="" style="width: 400px; height:200px;">
                </div>
                <div class="col-md-6">
                    <p class="section-description">Today, there are many different kinds of motion capture. We have access to both optical and non-optical systems (including inertial, magnetic, mechanical). Optical systems operate by tracking physical markers, such as LED lights, reflectors, ping-pong-ball-looking adhesives, or even just face paint.
                        Non-optical systems do not use any sort of physical marker. Instead, they use match-moving software to still track the movement of an actor, but this software operates by identifying key features of a human such as a nose or piece of clothing. Cinematographers create a quick sketch in computer graphics of whatever character they want to bring to life, and they map the skeleton of the character onto the live action footage, accounting for position, scale, orientation, and motion.
                        This is much more affordable since it is mostly software based and requires much less equipment. On a movie set, the digitally animated character is first created, and as they record, they can map this character over the actor using motion capture, so they can see instantly how the movement translates to the character, along with preferred lighting and angles. This is known as virtual cinematography.
                </div>
            </div>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-6">
                    <img src="{{ asset('dashboard/images/facial.jpg')}}" alt="" style="width: 400px; height:200px;">
                </div>
                <div class="col-md-6">
                    <p class="section-description">These technologies threaten to subject us to perpetual, dragnet surveillance in which we are nonconsenting subjects in a never-ending series of investigations. Our face geometries might be captured, retained, and connected to our real-world identities, and combined with information about our income, education, demographics, health, and other data. Our appearance, preferences, and physical locations could be sold to data brokers and advertisers and used to feed automated decision-making tools that control important decisions around our housing, employment, health care, policing, and much more. We could be digitally tracked based on our political activities, religion, or nationality; misidentified as criminals or terrorists; or otherwise blacklisted.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection