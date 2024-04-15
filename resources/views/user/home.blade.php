<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurisimianPulse</title>
    <link rel="icon" href="{{ asset('images/cpc.ico') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Adjust navbar spacing and logo size */
        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }

        /* Adjust navbar links */
        .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa; /* Change color on hover */
        }

        /* Adjust responsive navbar toggler color */
        .navbar-toggler-icon {
            background-color: #fff;
        }

        /* Additional navbar styling */
        .navbar {
            background-color: #09407c; /* Primary color for the navbar */
            transition: background-color 0.3s ease;
        }

        .navbar:hover {
            background-color: #09407c; /* Darker shade on hover */
        }

        /* Font style for PuriPulse */
        .navbar-brand {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Choose appropriate font family */
            font-size: 2rem; /* Adjust font size as needed */
            /* animation: pulse 2s infinite alternate; Witty animation effect */
            letter-spacing: 2px; /* Adjust letter spacing */
            text-shadow: #090b80;
            color: #09407c;
        }

        /* Font style for navbar links */
        .navbar-nav .nav-link {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Choose appropriate font family */
            font-size: 1rem; /* Adjust font size as needed */
        }

        /* Witty animation keyframes */
        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }

         /* Style for announcement text */
         .announcement {
            color: #000000; /* Set color to black */
        }
        .card-title {
            color: #000000; /* Set color to black */
        }
        .card-footer {
            color: #000000; /* Set color to black */
        }
        .card-header {
            color: #090b80;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style: bold;
            font-size: 1rem
        }
        /* Background image for content section */
        .content-section {
            background-image: url('images/pcp.jpg'); /* Specify the path to your background image */
            background-size: cover;
            background-position: center;
            padding: 50px 0; /* Adjust padding as needed */
            color: #ffffff; /* Set text color to white for better readability */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff54;">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="/home">
                <img src="images/cpc.png" alt="PuriPulse Logo">
                <span style="font-weight: bold;">PurisimianPulse</span>
            </a>
            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/create">Add Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user">View Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Log Out</a>
                    </li>
                    <!-- Add more navigation links as needed -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Content Section -->
    <div class="content-section">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <!-- Card Header -->
                        <div class="card-header">
                            Colegio de La Purisima Concepcion
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <!-- Photo Carousel -->
                            <div id="photoCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#photoCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#photoCarousel" data-slide-to="1"></li>
                                    <li data-target="#photoCarousel" data-slide-to="2"></li>
                                    <li data-target="#photoCarousel" data-slide-to="3"></li>
                                    <!-- Add more indicators if needed -->
                                </ol>
                                <!-- Carousel Inner -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/1.jpg" class="d-block w-100" alt="Photo 1" data-toggle="modal" data-target="#photoModal">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/2.jpg" class="d-block w-100" alt="Photo 2" data-toggle="modal" data-target="#photoModal">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/3.jpg" class="d-block w-100" alt="Photo 3" data-toggle="modal" data-target="#photoModal">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/4.jpg" class="d-block w-100" alt="Photo 4" data-toggle="modal" data-target="#photoModal">
                                    </div>
                                    <!-- Add more carousel items with different photos -->
                                </div>
                                <!-- Carousel Controls -->
                                <a class="carousel-control-prev" href="#photoCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#photoCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- Announcement -->
                            <div class="mt-3">
                                <h5 class="card-title">Latest Announcement</h5>
                                <p class="announcement">𝗖𝗢𝗟𝗟𝗘𝗚𝗘 𝗨𝗣𝗗𝗔𝗧𝗘 | Due to the extreme heat index, students are now permitted to enter the school premises with their civilian attire
                                    Per the Memorandum Order no. 3 of the Office of Student Affairs and Services; "𝗔𝗹𝗹 𝗖𝗣𝗖 𝘀𝘁𝘂𝗱𝗲𝗻𝘁𝘀 𝗮𝗿𝗲 𝗮𝗹𝗹𝗼𝘄𝗲𝗱 𝘁𝗼 𝗲𝗻𝘁𝗲𝗿 𝘀𝗰𝗵𝗼𝗼𝗹 𝗽𝗿𝗲𝗺𝗶𝘀𝗲𝘀 𝘄𝗶𝘁𝗵𝗼𝘂𝘁 𝘄𝗲𝗮𝗿𝗶𝗻𝗴 𝘀𝗰𝗵𝗼𝗼𝗹 𝘂𝗻𝗶𝗳𝗼𝗿𝗺𝘀 𝗯𝘂𝘁 𝗺𝘂𝘀𝘁 𝘄𝗲𝗮𝗿 𝗰𝗹𝗼𝘁𝗵𝗲𝘀 𝘁𝗵𝗮𝘁 𝗮𝗿𝗲 𝗮𝗽𝗽𝗿𝗼𝗽𝗿𝗶𝗮𝘁𝗲 𝘁𝗼 𝘁𝗵𝗲 𝗮𝗰𝗮𝗱𝗲𝗺𝗶𝗰 𝗲𝗻𝘃𝗶𝗿𝗼𝗻𝗺𝗲𝗻𝘁." Hence, below are the following civilian attire guidelines. 
                                    𝗧𝗔𝗞𝗘 𝗡𝗢𝗧𝗘: 
                                    • Students must wear their school IDs AT ALL TIMES.
                                    • College students can wear their Departmental/Organizational shirts based on the approved schedule of their deans.
                                    Remember to keep safe and stay hydrated, Purisimians!</p>
                                <!-- Add more announcements as needed -->
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <p class="mb-0">Contact: registrar@purisima.edu.ph | Phone: (036) 621 4192</p>
                            <div class="social-icons mt-2">
                                <a href="https://www.facebook.com/purisima.rxs"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.purisima.edu.ph/"><i class="fas fa-info-circle"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <!-- Add more social media icons as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Modal -->
    <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="" id="modalImage" alt="Full-size Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Script to handle modal image display -->
    <script>
        $(document).ready(function() {
            // Handle click on carousel image to display modal with full-size photo
            $('#photoCarousel .carousel-item img').click(function() {
                var imgSrc = $(this).attr('src');
                $('#modalImage').attr('src', imgSrc);
                $('#photoModal').modal('show');
            });
        });
    </script>
</body>
</html>
