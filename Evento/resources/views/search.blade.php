@extends('layouts/navigation')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div style="margin-top:10rem;">
<form class="search-forms">
    <input type="search" value="" placeholder="Search" id="search_title" class="search-inputs" name="title_s">
    <button type="submit" class="search-buttons">
      <svg class="submit-buttons">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#search"></use>
      </svg>
    </button>
  </div>
 <!--schedules-sec-->
 <section class="schedule-sec w-100 float-left padding-top padding-bottom">
    <div class="container">
       <div class="schedule-inner-sec text-center">
          <div class="generic-title">
             <h2 class="wow bounceInUp" data-wow-duration="2s">Our Events</h2>
             <p class="wow bounceInUp" data-wow-duration="2s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <br>
                sint occaecat cupidatat non proident.</p>
          </div>
    <div class="container ">
            <div class="tab-content">
                <div class="row">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="searchResults">
                    @foreach ($events as $event)
                        <div class="card" >
                            <div>
                                <img src='https://qtxasset.com/cdn-cgi/image/w=850,h=478,f=auto,fit=crop,g=0.5x0.5/https://qtxasset.com/quartz/qcloud4/media/image/livedesignonline/files/sm_ChristFellowship_1.jpg?VersionId=oQWcgrSPyQT0EOCFmZpSHHNK1ShpVZXm' class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$event->title}}</h5>
                                <p class="card-text">{{$event->description}}</p>
                                <p class="card-text">Location: {{$event->location}}</p>
                                <p class="card-text">category: {{$event->categorie->name}}</p>
                                <span class="text-danger">{{$event->price}}DH</span>
                                <p class="card-text"><small class="text-muted">{{$event->date}}</small></p>
                                <a href="#" class="btn btn-primary">Buy Ticket</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>



    <script>

document.addEventListener('DOMContentLoaded', function() {
   var input = document.getElementById('search_title');
   var searchResultContainer= document.getElementById('searchResults');
    input.addEventListener('keyup', function() {
        var title = input.value;

        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/search/event/?title_s=' + title, true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
              searchResultContainer.innerHTML = "";
                searchResultContainer.innerHTML = xhr.responseText;
            } else if (xhr.status != 200) {
                console.error('Error during search:', xhr.statusText);
            }
        };

        xhr.send();
});


});


</script>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
@endsection
