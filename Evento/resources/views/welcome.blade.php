@extends('layouts/navigation')
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet'>
<style>
    body {
    height: auto;
    background: #F4F7F8;
    overflow: auto;
    color: rgb(var(--color));
    width: 100%;
    color: #1c1a26;
    padding-top: 50px;
    padding-bottom: 60px;
}
* {
    list-style: none;
    outline: none;
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    box-sizing: border-box;
}
.con-cards {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    overflow: auto;
    width: 100%;
    padding-top: 10px;
    padding-bottom: 30px;
    padding-left: 20px;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
}
.con-cards:after {
    content: '';
    position: relative;
    min-width: 50px;
    height: 10px;
    background: transparent;
}
.con-cards::-webkit-scrollbar {
    height: 0px;
}
.card {
    box-shadow: 0px 10px 30px 0px rgba(0,0,0,.05);
    padding: 15px;
    border-radius: 35px;
    width: 260px;
    min-width: 260px;
    position: relative;
    margin: 0px 15px;
    background: #fff;
    scroll-snap-align: center;
    transition: all .25s ease;
    border: 2px solid #fff;
}
.add-active {
    /* transform: translate(0, -10px); */
    box-shadow: 0px 10px 30px 0px rgba(254, 160, 26, .2);
    border: 2px solid #fea01a;
}
.add-active .add {
    display: none;
}
.add-active .con-image img:not(.bg) {
    transform: scale(1.15);
}
.add-active .con-input-btns {
    display: flex;
}
.con-star {
    position: absolute;
    right: 0px;
    top: 0px;
    margin: 30px;
    font-size: 1.2rem;
}
.con-image {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 200px;
    border-radius: 30px;
    background: #f5f5f5;
}
.con-image img {
    width: 250px;
    z-index: 20;
    transition: all .25s ease;
}
.con-image .bg {
    position: absolute;
    transform: translate(10px, 30px);
    z-index: 10;
    filter: blur(20px);
    opacity: .4;
}
.con-text {
    width: 100%;
    padding: 10px 0px;
    opacity: .5;
    font-size: .8rem;
}
.con-text h3 {
    padding: 5px 0px;
}
.con-price {
    width: 100%;
    text-align: center;
    font-weight: bold;
    padding: 10px;
    font-size: 1.1rem;
    padding-top: 0px;
}
.add {
    width: 100%;
    padding: 15px;
    background: linear-gradient(130deg, #FF5722 0%,#FF5722 100%);
    border: 0px;
    border-radius: 20px;
    color: #fff;
    font-weight: bold;
    font-size: 1rem;
}
.con-input-btns {
    display: flex;
    align-items: center;
    justify-content: center;
    display: none;
}
.con-input-btns input {
    padding: 10px;
    flex: 1;
    width: calc(100% - 100px);
    height: 49px;
    border: 0px;
    border-bottom: 2px solid #f5f5f5;
    text-align: center;
    font-size: 1.3rem;
}
.con-input-btns button {
    padding: 10px;
    min-width: 49px;
    height: 49px;
    border: 0px;
    border-radius: 20px;
    background: linear-gradient(130deg, #fdc527 0%, #fea01a 100%);
    color: #fff;
    font-size: 1.4rem;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .25s ease;
}
.con-input-btns button:active {
    transform: scale(.8);
}
</style>
@section('content');
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Bettter digital Events with Us</h1>
          <h2>Experience Unforgettable Moments, One Event at a Time.</h2>
          <div>
            <a href="#ticket" class="btn-get-started scrollto">Buy Ticket</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                <!-- Replace the existing image with the image of a microphone -->
                <img src="https://cdn.pixabay.com/photo/2017/05/26/18/06/microphone-2347986_960_720.jpg" class="img-fluid" alt="Microphone Image" data-aos="zoom-in">
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <h3 data-aos="fade-up">Event Booking</h3>
                <p data-aos="fade-up" data-aos-delay="100">
                    Welcome to our event booking platform! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.
                </p>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-ticket"></i>
                        <div>
                            <a href="#" class="getstarted scrollto">Buy Ticket</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Section -->


      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Services</h2>
            <p>Check out the great services we offer</p>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->
        <!--schedules-sec-->
   <section class="schedule-sec w-100 float-left padding-top padding-bottom">
    <div class="container">
       <div class="schedule-inner-sec text-center">
          <div class="generic-title">
             <h2 class="wow bounceInUp" data-wow-duration="2s">Our Event Schedules</h2>
             <p class="wow bounceInUp" data-wow-duration="2s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <br>
                sint occaecat cupidatat non proident.</p>
          </div>


    <!-- ======= shedule Section ======= -->
    {{-- <div class="col-lg-10">
        <div class="row">
            <div class="d-flex flex-wrap" style="gap:30px; justify-content:center;">
                @foreach ($events as $event)
                <div class="speaker-wrap mb-3" style="width: 40%; flex: 0 0 auto;">
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
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="con-cards-1 con-cards">
                    <!-- Première série de cartes -->
                    <!-- Répétez ce bloc pour chaque carte -->
                    @foreach ($events as $event)
                    <div class="card">
                        <div class="con-star">
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="con-image">
                            <img class="img" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/files/1.png" alt="">
                            <img class="bg" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/files/1.png" alt="">
                        </div>
                        <div class="con-text">
                            <h3>{{$event->title}}</h3>
                            <p>{{$event->categorie->name}}</p>
                        </div>
                        <div class="con-price">{{$event->date}}</div>
                        <div class="con-price" style="color:red;">{{$event->price}}DH</div>
                        <div class="con-btn">
                            <button class="add">Add to cart</button>
                            <div class="con-input-btns">
                                <button class="less"><i class='bx bx-minus'></i></button>
                                <input value="1" type="text">
                                <button class="plus"><i class='bx bx-plus'></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Fin du bloc de carte -->
                    <!-- Répétez ce bloc pour chaque carte -->
                    @endforeach
                </div>




    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Contact Us</h2>
            <p>Contact us the get started</p>
          </div>

          <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Us Section -->
@endsection
