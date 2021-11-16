<?php
    include_once 'header.php';
?>
    <section class="index-intro">
    <?php
        if(isset($_SESSION["useruid"])){
            echo "<p>Hello there ". $_SESSION["useruid"]." you're now login. To continue please click the Profile Page. </p>";
        }
    ?><br><br>
    <!--Showcase-->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1>Become a <span class="text-warning">Student of Champions
                        </span></h1>
                        <h1><p class="lead my-4">
                            Education is our passport to the future, for tomorrow belongs to the people who prepare for it today.
                        </p></h1>
                    </div>
                    <img class="img-fluid w-25 d-none d-sm-block" src="img/img/scholar.png" alt="">
                </div>
            </div>
        </section>
        <!--Learn Sections-->
        <section id="learn" class="p-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                        <img src="img/img/school-history.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md p-5">
                        <h2>History</h2>
                        <p class="lead">
                            The University of Banica (UOB) (Cebuano: Unibersidad sa Banica; Filipino: Pamantasan ng Cebu) is a private, non-sectarian, coeducational basic and higher education institution in Cebu City, Philippines.
                        </p>
                        <p>
                            A group of young person headed by Greg Ian S. Florenosos, formed an alliance and set up an educational institution of what was then called the Banica of Commerce, then later renamed Banica Central College (BCC).
                        </p>
                        <a href="learn.php" class="btn btn-light mt-3">
                            <i class="bi bi-chevron-right"></i> Read More
                        </a>
                    </div>
                </div>
            </div>
        </section>
<!--Core Values-->
        <section id="core-values" class="p-5 bg-dark text-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md p-5">
                        <h2>Core Values</h2>
                        <p class="lead">
                            University of Banica has in place a set of core values that underpin the vision of the school. 
                        </p>
                        <p>
                            The values are unique to our school in that they have been developed by parents, staff and students.
                        </p>
                        <a href="core.php" class="btn btn-light mt-3">
                            <i class="bi bi-chevron-right"></i> Read More
                        </a>
                    </div>
                    <div class="col-md">
                        <img src="img/img/core-values.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
    
<?php
    include_once 'footer.php';
?>
        
        