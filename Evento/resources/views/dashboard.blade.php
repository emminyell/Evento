@extends('layouts/navigation')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-top: 80px">
                    <div class="card-body">
                        {{ __("You're logged in!") }}
                    </div>
            </div>
              <!--schedules-sec-->
   <section class="schedule-sec w-100 float-left padding-top padding-bottom">
    <div class="container">
       <div class="schedule-inner-sec text-center">
          <div class="generic-title">
             <h2 class="wow bounceInUp" data-wow-duration="2s">MY Event </h2>
             <p class="wow bounceInUp" data-wow-duration="2s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <br>
                sint occaecat cupidatat non proident.</p>
          </div>

    <!-- ======= shedule Section ======= -->
    <div class="container event-shedule my-5 pt-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
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
                                    <p>
                                        {{$event->description}}
                                    </p>
                                    <h5 class="speaker-name">
                                        <h6 href="#">{{$event->user->name }}</h6>
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
    <!-- ======= Contact Us Section ======= -->
        </div>
    </div>

@endsection
