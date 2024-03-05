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
    <div class="container event-shedule ">
        <div class="col-sm-2">
            <div class="nav flex nav-pills" role="tablist" aria-orientation="vertical">
                <a  type="button" class="nav-link" data-toggle="modal" data-target="#feedbackModal">
                    Add Event
                </a>
            </div>
            <!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="feedback" method="post" action="{{route}}">
            @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="feedbackModalLabel">Give feedback</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="feedback__header">
              <p>What do you think of the editing tool?</p>
            </div>
            <div class="feedback__emo">
              <!-- Emojis code -->
            </div>
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
              <label for="description">Description:</label>
              <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="date">Date:</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
              <label for="location">Location:</label>
              <input type="text" class="form-control" id="location" name="location">
            </div>
            <div class="form-group">
                <label for="location">price:</label>
                <input type="text" class="form-control" id="price" name="price">
              </div>
              <div class="form-group">
                <label for="location">place number:</label>
                <input type="text" class="form-control" id="nb_place" name="nb_place">
              </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Send">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
        </div>
        {{-- end modal --}}
        <div class="row">
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
                                <form action="{{ route('destroy', $event->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                            @endforeach

    </div>






    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- ======= Contact Us Section ======= -->
        </div>
    </div>

@endsection
