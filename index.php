<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>


    <title>Welcome to La Princess World</title>
</head>
<body>
<div class="container-fluid">
    <div class="hero" ">
    <!------------------------------------------------logo-------------------------------------------------------------->
    <div class="logo float-start m-lg-3">
        <h3>LA PRINCESS</h3>
    </div>
    <!---------------------------------------------navigation----------------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-light float-end" id="home">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item menu mx-3">
                            <a class="nav-link active"  aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item menu mx-3">
                            <a class="nav-link active text-light"  aria-current="page" href="#about">About Us</a>
                        </li>
                        <li class="nav-item menu mx-3">
                            <a class="nav-link active text-light" aria-current="page" href="#facilities">Facilities</a>
                        </li>
                        <li class="nav-item menu mx-3">
                            <a class="nav-link active text-light"aria-current="page" href="#contact">Contact Us</a>
                        </li>
                       <button class="btn btn-success mx-2" ><a href="login.php">Login</a></button>
                        <button class="btn btn-success mx-2" ><a href="register.php">Register</a></button>
                    </ul>
                </div>
            </div>
        </nav>
    <!--------------------------------------------------------hero text--------------------------------------------->



    </div>


<div class="hero-text">
    <div class="row">
    <div class="col-3">g</div>
    <div class="col-6">
        <p>la Princess is a fast growing hotel business in town located in an eye catching serene environment fit for a perfect vacation.</p>
        <h2>Perfect for a baecation.</h2>
    </div>
    <div class="col-3"></div>
</div>
</div>
<!------------------------------------------------------check availability form-------------------------------------------->

<!-------------------------------------------------------------------room booking-------------------------------------->
<div class="room-bookings">
    <div class="row room-book">
        <div class="col-1"></div>
        <div class="col-3">
            <div class="card room">
                <img src="images/room1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">La Belle</h5>
                    <h6 class="mb-4">kshs 2000 per night</h6>
                    <div class=" features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        3 Room
                    </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Bathrooms
                    </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Heated indoor swiming pool
                    </span>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Book Now
                    </button>

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card room">
                <img src="images/room2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Blossoms</h5>
                    <h6 class="mb-4">kshs 1000 per night</h6>
                    <div class=" features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Rooms
                    </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Bathroom
                    </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Balcony
                    </span>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Book Now
                    </button>

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card room">
                <img src="images/room4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serene Room</h5>
                    <h6 class="mb-4">kshs 800 per night</h6>
                    <div class=" features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Room
                    </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Bathroom
                    </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Sofa
                    </span>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Book Now
                    </button>

                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<!-------------------------------------------------------form modal-------------------------------->
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Book Room</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Check Room Availability</h5>
                            <div class="row"></div>

                                <label class="form-label" style="font-weight: 500;">Check In</label>
                                <input type="date" class="form-control shadow-none">


                                <label class="form-label" style="font-weight: 500;">Check Out</label>
                                <input type="date" class="form-control shadow-none">


                                <label class="form-label" style="font-weight: 500;">Adult</label>
                                <select class="form-control shadow-none">
                                    <option selected>Choose below</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>


                                <label class="form-label" style="font-weight: 500;">Children</label>
                                <select class="form-control shadow-none">
                                    <option selected>Choose below</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <br>

                                    <button type="submit" class="btn-primary btn-text-white shadow-none">Submit</button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!------------------------------------------------------about la princess-------------------------------------------->
<div class="about-countainer" id="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="images/room3.jpg" class="about-img" alt="">
            </div>
            <div class="col order-5 px-lg-5 about-content">
                <h2>About La Princess</h2>
                <p>la Princess is a fast growing hotel business in town located in an eye catching serene environment fit for a perfect vacation.
                </p>
                <p>The facility boasts of a wide variety of facilities for instance wedding Grounds which can host hundreds of guests,Swimming pool with clean,safe water,for business and other meetings we offer conference halls for them and we got your kids covered with our Kids' Corner facilities from swinging to bouncy castles
                   </p>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------Our Facilities-------------------------------------------->
<h2 class="text-center"  id="facilities"> Our Facilities </h2>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <p class="text-center">A perfect wedding grounds,clean and safe swimming pool,conference halls well-equipped with modern facilities including Wi-Fi and a playground for kids.</p>
    </div>
    <div class="col-3"></div>
</div>
<div class="card-group facilities-container">
    <div class="card facilities">
        <img src="images/wedding.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Wedding Grounds</h5>
            <p class="card-text">It can hold hundreds of guests with a beautiful reception.</p>
        </div>

    </div>
    <div class="card facilities">
        <img src="images/conference.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Conference Halls</h5>
            <p class="card-text">Count us in we have a large hall with a conducive environment and well-equipped with modern conference facilities.</p>
        </div>

    </div>
    <div class="card facilities">
        <img src="images/pool.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Swimming Pool</h5>
            <p class="card-text">It has beautiful outdoor and a heated indoor swimming pool all  available for fun or exercise.</p>
        </div>

    </div>
    <div class="card facilities">
        <img src="images/playground.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Kids' Corner</h5>
            <p class="card-text">Playgrounds are the perfect place for children to engage in free play.We have slides,seesaws and swings.</p>
        </div>

    </div>
</div>





<!-------------------------------------------------------contact us ------------------------------>
<div class="contact-us">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="contact-container" id="contact">
                <h2 class="text-center" > Contact Us </h2>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <p class="text-center">For more information you can contact us below .</p>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            <div class="container py-2">
                <form id="contactForm">

                    <div class="mb-3 mt-2">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Name" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="emailAddress">Email Address</label>
                        <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Submit</button>
        </div>
        <div class="col-3"></div>
    </div>
</div>



<footer class="text-center bg-light" >
    <p>La Princess.com | copyright @ 2022</p>
</footer>
</body>
</html>
