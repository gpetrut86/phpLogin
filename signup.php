<?php
include_once 'header.php';
?>
<section class="vh-100 bg-dark text-light">
    <div class=" container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>


                                <?php
                                if (isset($_GET['error'])) {
                                    if ($_GET['error'] == "emptyinput") {
                                        echo '<div class="alert alert-danger" role="alert">
                                            Fill in all the required fields
                                            </div>';
                                    } elseif ($_GET['error'] == "invaliduid") {
                                        echo '<div class="alert alert-danger" role="alert">
                                          chose a proper username
                                            </div>';
                                    } elseif ($_GET['error'] == "stmtfailed") {
                                        echo '<div class="alert alert-danger" role="alert">
                                             something went wrong, try again
                                            </div>';
                                    } elseif ($_GET['error'] == "usernametaken") {
                                        echo '<div class="alert alert-danger" role="alert">
                                            username arleady taken
                                            </div>';
                                    } elseif ($_GET['error'] == "none") {
                                        echo '<div class="alert alert-success" role="alert">
                                            You have successfully registered
                                            </div>';
                                    }
                                }
                                ?>


                                <form action="includes/signup.inc.php" class="mx-1 mx-md-4" method="POST">

                                    <div class="d-flex flex-row align-items-center mb-4">

                                        <div class="form-outline flex-fill mb-0">
                                            <input name="name" type="text" id="form3Example1c" class="form-control" />
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                        </div>
                                    </div>

                                    <?php
                                    if (isset($_GET['error']) && $_GET['error'] == "invalidemail") {
                                        echo '<div class="alert alert-danger" role="alert">
                                            chose a proper email
                                                </div>';
                                    }
                                    ?>
                                    <div class="d-flex flex-row align-items-center mb-4">

                                        <div class="form-outline flex-fill mb-0">
                                            <input name="email" type="email" id="form3Example3c" class="form-control" />
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">

                                        <div class="form-outline flex-fill mb-0">
                                            <input name="uid" type="text" id="form3Example3c" class="form-control" />
                                            <label class="form-label" for="form3Example3c">Your Username</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">

                                        <div class="form-outline flex-fill mb-0">
                                            <input name="pwd" type="password" id="form3Example4c" class="form-control" />
                                            <label class="form-label" for="form3Example4c">Password</label>
                                        </div>
                                    </div>

                                    <?php
                                    if (isset($_GET['error']) && $_GET['error'] == "passwordsdontMantch") {
                                        echo '<div class="alert alert-danger" role="alert">
                                          Passwords dos not match
                                            </div>';
                                    }
                                    ?>

                                    <div class="d-flex flex-row align-items-center mb-4">

                                        <div class="form-outline flex-fill mb-0">
                                            <input name="pwdrepeat" type="password" id="form3Example4cd" class="form-control" />
                                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                        </div>
                                    </div>



                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <p>You arleady have an acount?&nbsp&nbsp </p>

                                        <a href="login.php"> Login</a>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="img/undraw_sign_in_re_o58h.svg" class="img-fluid" alt="Sample image">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include_once 'footer.php';
?>