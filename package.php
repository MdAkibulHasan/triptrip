<!DOCTYPE html>
<html lang="en">

<?php include("./components/_head.php") ?>

<body>
    <nav id="navBar" class="navbar-white">
        <a href="./index.php" class="logo"> triptrip </a>
        <ul class="nav-links">
            <li><a href="./index.php">Popular Places</a></li>
            <li><a href="./listing.php">All packages</a></li>
        </ul>
        <?php
            if (!isset($_SESSION))
                session_start();
            if (isset($_SESSION["logged_in"])) {
                echo ' <a href="./services/_logout.php" class="register-btn">Logout</a>';
            } else {
                echo ' <a href="./registration.php" class="register-btn">Register Now</a>';
            }
            ?>
        <i class="fa-solid fa-bars" onclick="togglebtn()"></i>
    </nav>
    <div class="package-details">
        <div class="package-title">
            <h1>3 days 4 nights at Cox's Bazar</h1>
            <div class="row">
                <div>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>0</span>
                </div>
                <div>
                    <p>Location:<span>Cox's Bazar, Bangladesh</span></p>
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="gallery-img-1"><img src="./assets/images/house-1.png"></div>
            <div><img src="./assets/images/house-2.png"></div>
            <div> <img src="./assets/images/house-3.png"></div>
            <div><img src="./assets/images/house-4.png"></div>
            <div> <img src="./assets/images/house-5.png"></div>
        </div>
        <div class="small-ditails">
            <p>2,4 guests</p>
            <h3>Hotel Check-in: 00/00/0000</h3>
            <h3>Hotel Check-out: 00/00/0000</h3>
            <h4>5500 Taka / Starting Price</h4>
            <div>
                <hr class="line">
                <form class="check-form">
                    <div class="guest-field">
                        <label>Guests</label>
                        <select name="" id="guest-select">
                            <option value="" hidden>Choose guests number</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <button type="submit">Check Availability</button>
                </form>
                <h2>The packages comes with <i class="fa-solid fa-chevron-down"></i></h2>
                <ul class="details-list">
                    <li><i class="fa-solid fa-hotel"></i>Hotel <br>
                        <span> Hotel is<strong class="brand-inline brand">triptrip </strong> verified with excellent customer service. </span>
                    </li>
                    <li><i class="fa-solid fa-bus-simple"></i>Transport <br>
                        <span>Transportation includes bus tickets from and to Cox's Bazar.</span>
                    </li>
                    <li><i class="fa-solid fa-utensils"></i>Food <br>
                        <span>Breakfast and Dinner included in the package.</span>
                    </li>
                    <li><i class="fa-solid fa-person-hiking"></i>Tour Guide <br>
                        <span>100% trusted local guide is assigned for sight seeing.</span>
                    </li>
                </ul>
                <hr class="line">
                <p class="package-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam ea repudiandae vitae, commodi eius consectetur esse error atque soluta nemo. Quo nemo veritatis a incidunt, velit minus sequi illo molestias, distinctio fugit, cupiditate corrupti asperiores earum est? Sed, maxime, vel sapiente consequuntur laboriosam eaque quo nihil rem sunt labore ducimus mollitia error ad asperiores pariatur aperiam quisquam ullam aliquam, cumque minus amet nobis excepturi repudiandae. Dolores similique voluptate saepe, vel quasi quaerat autem maiores excepturi commodi culpa, reiciendis quisquam, quam porro officia minus animi! Suscipit, nesciunt sint voluptatum accusamus amet quibusdam ducimus, sapiente illo debitis blanditiis quos? Fuga, praesentium harum!</p>
                <hr class="line">
                <div class="map">
                    <h3>Location On</h3>
                    <iframe src="https://maps.google.com/maps?q=cox's%20bazar&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="600" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <b>Cox's Bazar</b>
                    <p>Longest sea beach in the world.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================footer====================== -->
    <div class="container">
        <div class="about-msg">
            <h2>About <span class="brand">triptrip</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eius cumque, provident quaerat aspernatur architecto totam ea corrupti esse repudiandae omnis asperiores voluptas! Error libero nisi adipisci rem, molestiae et iste exercitationem asperiores esse eum facere ipsa voluptatem odit omnis iusto dolor atque non eos maiores. Libero dolor fuga possimus.</p>
        </div>
        <div class="footer">
            <a href="https://www.facebook.com/akibul.hasan.13"><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <hr>
            <p>&copy; All rights reserved.</p>
        </div>
    </div>
    <?php include("./components/_js.php") ?>

</body>

</html>