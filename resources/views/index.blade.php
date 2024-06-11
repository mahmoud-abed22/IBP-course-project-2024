<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500&display=swap" rel="stylesheet" />
    <title>Blood Bank</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="/assets/photos/logo2.jpg" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main"
                aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="main">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link p-lg-3" aria-current="page" href="#">HOMEPAGE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-lg-3" href="#about">ABOUTUS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-lg-3" href="#instructions">INSTRUCTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-lg-3" href="#what">WHATWEDO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-lg-3" href="#footer">Contact US</a>
                    </li>

                </ul>

                <a class="btn btn-primary rounded-pill main-btn" href="{{ route('login') }}"> Login &#10084;
                </a>
            </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/photos/header3p.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/photos/header2p.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/photos/header1p.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section id="about">


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/assets/photos/about.jpg" alt="Blood Donations" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h1>About US</h1>
                    <p>
                        we are dedicated to collecting and providing life-saving blood donations to
                        those in need. Our goal is to make a positive impact on the community and save lives through the
                        generosity of donors like you.
                    </p>
                    <p>
                        We adhere to the highest standards of safety and quality control to ensure a seamless and secure
                        donation process. Our experienced medical professionals and state-of-the-art facilities
                        guarantee your
                        well-being and that of the recipients.
                    </p>
                    <p>
                        Join us today and become a part of our life-saving community. Together, we can make a difference
                        and
                        create a healthier world, one blood donation at a time.
                    </p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Donate Now</a>
                </div>
            </div>
        </div>

    </section>
    <section id="what" class="hero">
        <div class="container">
            <h1>What We Do</h1>
            <p>From the time of its establishment in 1868, the Turkish Red Crescent, besides contributing to the
                development of social
                welfare has been providing, presenting and offering various and important services for social solidarity
                such as shelter
                and protection to the poor and needy, aids for nourishment and health care , blood, disaster operations,
                international
                aids, social services, health, first aid, education and youth, housing, immigration and refugee
                protection as well as
                operating mineral water facilities.</p>
        </div>
    </section>

    <section id="what-we-do">

        <div class="container">
            <div class="row p-4">
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="/assets/photos/p1.jpg" alt="Image 1">
                        <p>The Turkish Red Crescent has one of the best disaster organizations of the world with its
                            disaster response and disaster
                            logistic system that it has extended nation wide.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="/assets/photos/p2.jpg" alt="Image 2">
                        <p>
                            The Turkish Red Crescent aims to meet all the blood needs of our country from safe and
                            continuous donators with its
                            Regional Blood Centers, Blood Donation Centers and mobile blood donation vehichels
                        </p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="/assets/photos/p3.jpg" alt="Image 3">

                        <p>The Turkish Red Crescent has lent a hand to 137 countries from its establishment to the
                            present and in the last 10 years
                            it had disaster operations in 78 different countries in times of natural and human related
                            disasters.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="/assets/photos/p4.jpg" alt="Image 3">

                        <p>The Turkish Red Crescent is with the people needing help not only in times of disaster but in
                            365 days a year..</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="/assets/photos/p5.jpg" alt="Image 3">

                        <p>The Turkish Red Crescent solves diversified health problems with its qualified health
                            personnel in the hospitals and
                            medical centers with modern technology.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="/assets/photos/p6.jpg" alt="Image 3">

                        <p>The Turkish Red Crescent targets the first aid awairness to become widespread in the
                            community with the educational
                            programs it arranges and organizes in First Aid Centers within its body..</p>
                    </div>





                </div>
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="/assets/photos/p7.jpg" alt="Image 3">

                        <p>The Turkish Red Crescent carries out educational works for the development of being a Red
                            Crescent person and
                            the
                            concept and culture of people helping each other to develop in early ages. The Turkish Red
                            Crescent
                            encourages the youth
                            to become Red Crescent volunteers through Turkish Red Crescent branches, Youth
                            Organizations, University
                            Libraries and
                            Communities.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="/assets/photos/p8.jpg" alt="Image 3">

                        <p>
                            The Turkish Red Crescent’s Immigration and Refugee Services Directorate provides services to
                            the refugees
                            who take
                            shelter in our country in their enterances and exits and housing and shelters and at the
                            stage of their
                            deportation.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="/assets/photos/p9.jpg" alt="Image 3">

                        <p>The excess revenue from the sale of Kizılay Mineral Water is used for social aid and disaster
                            response
                            services of the
                            Turkish Red Crescent..</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="instructions">
        <div class="container">
            <h1 class="text-center">Instructions for Donating Blood</h1>
            <h2>Before Your Donation:</h2>
            <ul>
                <li>Avoid fatty foods, such as fried or greasy foods, on the day of donation.</li>
                <li>Get a good night's sleep and eat a healthy meal before your donation.</li>
                <li>Drink plenty of fluids, especially water, to stay hydrated.</li>
                <li>Wear comfortable clothing with sleeves that can be easily rolled up.</li>
                <li>Bring a valid identification document, such as a driver's license or passport.</li>
            </ul>

            <h2>On the Day of Donation:</h2>
            <ul>
                <li>Arrive on time for your appointment.</li>
                <li>Inform the staff if you have any health conditions or are taking any medications.</li>
                <li>Answer all the screening questions honestly and accurately.</li>
                <li>Undergo a brief medical examination, including checking your blood pressure, hemoglobin level, and
                    temperature.</li>
            </ul>

            <h2>After Your Donation:</h2>
            <ul>
                <li>Rest for a few minutes and have a snack or drink provided by the donation center.</li>
                <li>Avoid any strenuous physical activity or heavy lifting for the next 24 hours.</li>
                <li>Keep the bandage on your arm for at least four to six hours.</li>
                <li>Drink plenty of fluids and stay hydrated.</li>
            </ul>

            <p class="small">Please note that these instructions may vary depending on the donation center and country.
                It's
                always best to consult with the specific organization you plan to donate to for their guidelines.</p>
        </div>



    </section>
    <section id="blood-groups">

        <div class="container">
            <h2>Blood Group Compatibility</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Blood Group</th>
                        <th>Can Donate To</th>
                        <th>Can Receive From</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A+</td>
                        <td>A+, AB+</td>
                        <td>A+, A-, O+, O-</td>
                    </tr>
                    <tr>
                        <td>A-</td>
                        <td>A+, A-, AB+, AB-</td>
                        <td>A-, O-</td>
                    </tr>
                    <tr>
                        <td>B+</td>
                        <td>B+, AB+</td>
                        <td>B+, B-, O+, O-</td>
                    </tr>
                    <tr>
                        <td>B-</td>
                        <td>B+, B-, AB+, AB-</td>
                        <td>B-, O-</td>
                    </tr>
                    <tr>
                        <td>AB+</td>
                        <td>AB+</td>
                        <td>A+, A-, B+, B-, AB+, AB-, O+, O-</td>
                    </tr>
                    <tr>
                        <td>AB-</td>
                        <td>AB+, AB-</td>
                        <td>A-, B-, AB-, O-</td>
                    </tr>
                    <tr>
                        <td>O+</td>
                        <td>A+, B+, AB+, O+</td>
                        <td>O+, O-</td>
                    </tr>
                    <tr>
                        <td>O-</td>
                        <td>All Blood Groups</td>
                        <td>O-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>






    <footer id="footer" class="text-center text-white mt-lg-5">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/kizilay"
                    role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/Kizilay" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-youtube"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/kizilay/"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/company/turkkizilay/"
                    role="button"><i class="fab fa-linkedin-in"></i></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <span class="text-white" style="color:#eee">Blood_Donation.com</span>
        </div>
        <!-- Copyright -->
    </footer>

</body>

</html>













<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/all.min.js"></script>


</body>

</html>