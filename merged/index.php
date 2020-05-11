<?php
  session_start(); // must be before any output
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>studyBites - Main Page</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/general_styles.css" />
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="/images/favicon.ico" />

    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">
                <img src="/images/logo.png" width="110" height="30" class="d-inline-block align-top" alt="" />
            </a>

            <!-- <a class="navbar-brand" href="#">studyBits</a> -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       My Profile
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="my_courses.php">My Courses</a>
                        <a class="dropdown-item" href="settings.php">Settings</a>
                        <a class="dropdown-item" href="accomplishments.php">Accomplishments</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index_signed_out.html">Sign Out</a>
                      </div>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link" href="About.html">About</a>
                    </li>


                    <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Type to search courses" aria-label="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="jumbotron jumbotron-fluid banner">
            <div class="container">
                <h1 class="display-4">Welcome to <span class="website-title"><strong>studyBites</strong></span>!</h1>
                <p class="lead">Start by searching our database of courses.</p>

                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="photography, cooking..." aria-label="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="album py-5 bg-light">
            <div class="container">
                <h2>Our most loved courses</h2>
                <br />
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="/images/course_thumb.png" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text">Course description goes here. Write a concise introduction. Don't forget to insert tags so that we can filter them. You may also include course's star rating.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Go to Course</button>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted">10 hrs</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="/images/course_thumb.png" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text">
                                    Course description goes here. Write a concise introduction. Don't forget to insert tags so that we can filter them. You may also include course's star rating.
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Go to Course</button>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted">10 hrs</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="/images/course_thumb.png" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text">Course description goes here. Write a concise introduction. Don't forget to insert tags so that we can filter them. You may also include course's star rating.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Go to Course</button>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted">10 hrs</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="/images/course_thumb.png" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text">Course description goes here. Write a concise introduction. Don't forget to insert tags so that we can filter them. You may also include course's star rating.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Go to Course</button>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted">10 hrs</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="/images/course_thumb.png" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text">Course description goes here. Write a concise introduction. Don't forget to insert tags so that we can filter them. You may also include course's star rating.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Go to Course</button>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted">10 hrs</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="/images/course_thumb.png" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text">Course description goes here. Write a concise introduction. Don't forget to insert tags so that we can filter them. You may also include course's star rating.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Go to Course</button>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted">10 hrs</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="/images/course_thumb.png" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text">Course description goes here. Write a concise introduction. Don't forget to insert tags so that we can filter them. You may also include course's star rating.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Go to Course</button>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted">10 hrs</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="/images/course_thumb.png" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text">Course description goes here. Write a concise introduction. Don't forget to insert tags so that we can filter them. You may also include course's star rating.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Go to Course</button>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted">10 hrs</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="/images/course_thumb.png" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text">Course description goes here. Write a concise introduction. Don't forget to insert tags so that we can filter them. You may also include course's star rating.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Go to Course</button>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted">10 hrs</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-muted">
            <div class="container">
                <br />
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>&copy; <strong>studyBites</strong> 2020 - a final project for CMPS 278 at The American University of Beirut.</p>
                <!-- <p>This website utilizes HTML/CSS, Twitter's Bootstrap and Javascript for the front-end.
        It has PHP on the back-end.</p> -->
                <br />
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
