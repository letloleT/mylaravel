@extends('layouts.app')

@section('content')
    <body class="bg">
        <!--Main Navigation-->
        <header>
            @include("inc.navbar")
        </header>

        <div class="top">
            <img src="https://wallpapercave.com/wp/wp2019258.jpg" alt="">
            <div class="content">
                <center><h1>Ultimate AC</h1>
                <p>Let's Make A Bid!</p><center>
            </div>
        </div>
        </br>

        <!--_________________________________________CONTAINER____________________________________________-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="view overlay z-depth-1-half">
                        <img src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid" alt="">
                        <div class="mask rgba-white-light"></div>
                    </div>
                    
                </div>
                <div class="col-sm-8">
                    <h2>Some awesome heading</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</br>Blanditiis pariatur quod ipsum atque quam dolorem</br>
                        voluptate officia sunt placeat consectetur alias fugit cum </br>praesentium ratione sint mollitia, perferendis
                        natus quaerat!</p>
                    {{-- <a href="#" class="btn btn-info">Get it now!</a> --}}
                </div>
              </div></br>
              
        </div><!--END OF CONTAINER-->

        </br>
        <div class="container"><center><div class="fa-3x">
            <i class="fas fa-spinner fa-spin"></i>
            <i class="fas fa-spinner fa-spin"></i>
            <i class="fas fa-spinner fa-spin"></i>
          </div></br></br>
        
        
        <h2>Auction Categories</h2>
        <p>From a wide range of categories,</br>
            we provide a platform to cater for any good</br>
            up for bidding.</p>
        </br>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/280221/pexels-photo-280221.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image cap">
                <div class="overlay">Property</div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/707046/pexels-photo-707046.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image cap">
                <div class="overlay">Vehicles</div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/162240/bull-calf-heifer-ko-162240.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Card image cap">
                <div class="overlay">Livestock</div>
            </div>
        </div><!--END OF CARD-DECK-->
        </br></br>
        <!--Second row of cards-->
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/415350/pexels-photo-415350.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image cap">
                <div class="overlay">Jewellrey</div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/205316/pexels-photo-205316.png?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image cap">
                <div class="overlay">Tech</div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/102127/pexels-photo-102127.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image cap">
                <div class="overlay">More</div>
            </div><!--END OF CARD-DECK-->
       
        </br></br>
        
    </div><!--end of container-->
        </br>
        {{-- <div class="row">
            <div class="col align-self-center">
                <a href="#" class="btn btn-info">More...</a></br>
            </div>
        </div> --}}
        <!--_____________________________________________FORM________________________________________________-->
        <div class="container carouselExampleIndicators">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://images.wallpaperscraft.com/image/kitten_face_window_fluffy_92898_1920x1080.jpg" alt="First slide">
                    </div> 
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.wallpaperscraft.com/image/kitten_face_window_fluffy_92898_1920x1080.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.wallpaperscraft.com/image/kitten_face_window_fluffy_92898_1920x1080.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </br>
        <div class="container-form">
            <div class="row justify-content-center">
                <div class="col-4">
                    {{-- <div class="form-control col-md-5">   --}}
                        <form action="{{action('testing@store')}}" method="post">
                            <div class="form-group has-feedback-left">
                                <input class="form-control" type="text"  name="firstname" placeholder="Firstname...">
                                {{-- <span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span>  --}}
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text"  name="lastname" placeholder="Lastname...">  
                                <!--span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span-->
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text"  name="email" placeholder="Email...">
                                {{-- <span class="icon-envelope">
                                    <i class="fa fa-envelope"></i>
                                </span> --}}
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text"  name="tel" placeholder="Tel...">
                                {{-- <span class="icon is-small is-left">
                                    <i class="fas fa-phone"></i>
                                </span>  --}}  
                            </div>
            
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>

                            <input type="submit" name="Subscribe" value="Subscribe" class='btn btn-info'>
                        </form>
                    {{--</div> <!--END OF FORM-CONTROL--> --}}
                </div><!--End of col-sm-8-->
                <div class="col-4">
                    </br>
                    <center><h5>SUBSCRIBE TO OUR NEWSLETTER</h5>
                    <p>Stay updated with our latest auctions.</p></center>
                </div>
            </div> <!--End of row-->
        </div>
    </br>
        <!--_________________________________________FOOTER____________________________________________-->
        <!--Footer-->
        <footer class="page-footer accent-4 center-on-small-only">
            <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">
                <!--First column-->
                <div class="col-lg-3 col-md-6 ml-auto">
                    <h5 class="title mb-3">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->

                    <hr class="w-100 clearfix d-sm-none">

                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3">Links</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3">Links</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3">Links</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2018 Copyright: <a href="#"> Lets.Design</a>

            </div>
        </div>
        <!--/.Copyright-->

        </footer>
        <!--/.Footer-->
@endsection