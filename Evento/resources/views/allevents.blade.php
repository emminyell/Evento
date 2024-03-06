@extends('layouts/navigation')

@section('content');
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Google fonts(Open sans and poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- external css -->
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <div class="container event-shedule my-5 pt-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                        Day 01
                        <div>18 November 2020</div>
                    </a>
                    <a class="nav-link" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">
                        Day 04
                        <div>21 November 2020</div>
                    </a>
                </div>
            </div>
            <div class="col-lg-8">

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel" aria-describedby="day-1-tab">
                            @foreach ($events as $event)
                            <div class="speaker-wrap">
                                <div class="text pl-md-5">
                                <span class="time">{{$event->date}}</span>
                                <h2>{{$event->title}}</h2>
                                <p>{{$event->description}}</p>
                                <h5 class="speaker-name">
                                    <a href="#">{{$event->user->name }}</a>
                                    <span class="position">{{$event->categorie->name}}</span>
                                </h5>
                            </div>
                            
                        </div>
                        @endforeach
                        </div>
                    </div>
            </div>




    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
@endsection
