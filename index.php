<?php
 
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_mobile = "";
    $visitor_address = "";
    $visitor_message = "";
     
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['visitor_mobile'])) {
        $visitor_mobile = filter_var($_POST['visitor_mobile'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['visitor_address'])) {
        $visitor_address = filter_var($_POST['visitor_address'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    }
     
    $inquiry .= "Full Name: " . $visitor_name . "\r\n<br/>";
    $inquiry .= "Email Address: " . $visitor_email . "\r\n<br/>";
    $inquiry .= "Mobile Number: " . $visitor_mobile . "\r\n<br/>";
    $inquiry .= "Address: " . $visitor_address . "\r\n<br/>";
    $inquiry .= "Message: " . $visitor_message . "\r\n<br/>";
    
    $subject = "Enquiry from Elsativo website";
    $recipient = "info@elsativo.com";
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_name . "<". $visitor_email .">\r\n";
     
    if(mail($recipient, $subject, $inquiry, $headers)) {
        $success = "Thank you! We will get in touch with you soon."; 
    } else {
        $success = "Message Sending Failed, try again."; 
    }
     
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>El Sativo</title>
    <meta name="keywords"
        content="elsativo tequila, elsativo, tequila, agave, double gold award, organic tequila, jalisco" />
    <meta name="description"
        content="El Sativo is a USDA Organic Tequila and has Double Gold Award Winning Treasures" />
    <link rel="icon" href="./assets/img/favicon.png" type="image/png" sizes="16x16" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/font.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <!-- main body -->
    <section class="main-body d-none">
        <!-- Header section -->
        <nav class="navbar navbar-expand-sm sticky-top navbar-light">
            <a class="navbar-brand" href="/">
                <img src="./assets/img/logo-elsativo.png" alt="El Sativo Tequila" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#ourStory">
                            Our Story
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#libations">Cocktails</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-1 mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#charity">Charity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactUs">Connect</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /Header section -->

        <!-- Main content -->
        <ul class="list-group mt-1 mb-0 social-icons">
            <li class="list-group-item">
                <a href="https://www.facebook.com/elsativotequila/"><i class="icon-facebook"></i></a>
            </li>
            <li class="list-group-item">
                <a href="https://www.instagram.com/elsativotequila/"><i class="icon-instagram"></i></a>
            </li>
            <!-- <li class="list-group-item">
          <a href="#"><i class="icon-twitter"></i></a>
        </li> -->
            <!-- <li class="list-group-item">
          <a href="#"><i class="icon-pinterest"></i></a>
        </li> -->
            <!-- <li class="list-group-item">
          <a href="#"><i class="icon-linkedin"></i></a>
        </li> -->
            <!-- <li class="list-group-item">
          <a href="#"><i class="icon-youtube"></i></a>
        </li> -->
        </ul>
        <div id="parallax1" class="parallaxParent pb-md-5">
            <div class="parallax-img" style="background-image: url(./assets/img/banner-1.jpg);">
                <div class="scroll-down" onclick="scrollDown()"></div>
            </div>
        </div>
        <div class="page-section pt-md-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-snippet">
                            <div>
                                <img class="medals" src="./assets/img/medals.png"
                                    alt="Double Gold medal, Best of class medal" />
                            </div>
                            <h2 class="pb-2 pt-3 anim-underline">
                                2020 Tequila of the Year
                            </h2>
                            <p>
                                El Sativo is a new innovative tequila that lifts the spirits
                                and stands apart from the crowd. Our sweet agave dances in
                                waterfalls of stone fruit soaking in memorable days and
                                fun-filled nights. Every bottle sold gives back to Ocean
                                Conservancy. It's So Sativo, #Sosativo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <section class="container-fuild text-center mt-5 pt-md-5 pb-5">
                <h2 class="mb-md-3 pb-2">
                    <i class="icon-instagram align-middle"></i>
                    @elsativotequila
                </h2>

                <div id="curator-feed-default-layout" class="pt-md-3 pb-3">
                    <a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a>
                </div>
            </section>
        </div>
        <div id="ourStory" class="page-section spacer s1 pt-md-5">
            <div class="box1 blue pb-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 text-center pt-5 d-md-none d-lg-none d-xl-none">
                            <img src="./assets/img/our-journey.jpg" alt="Our Journey" />
                        </div>
                        <div class="col-xl-4 offset-xl-1 col-md-6 pt-md-5 pt-3 d-flex align-content-center flex-wrap">
                            <div class="section-snippet">
                                <h2 class="pb-2 anim-underline">Our Journey</h2>
                                <p>
                                    Originating from a spirited family with over 25 years in the
                                    tequila industry, El Sativo is a sipping waterfall of stone
                                    fruits and amazing notes found only in the lowlands of
                                    Amititan, Jalisco, known as the sacred grounds of Tequila. 
                                    A Single Estate masterpiece and the winner of two 2020
                                    double gold awards, including Tequila of the Year (San
                                    Francisco Spirits World Competition).
                                </p>
                                <p>
                                    El Sativo sets itself apart by utilizing a special
                                    distillation method that naturally highlights the Agave
                                    plant’s precious resources known to have Mood Lifting and
                                    Energy Boosting properties that exemplify #SoSativo.
                                </p>
                                <p>
                                    We are proud to be OK Kosher certified and our bottles are
                                    100% Smart Combustible Recycled Glass with Organic Soluble
                                    Labels. Every Bottle Sold Gives Back To Ocean Conservancy.
                                </p>
                                <p>Truly &quot;A Better Tequila for a Better World.&quot;</p>
                            </div>
                        </div>
                        <div
                            class="col-md-6 offset-xl-1 pr-md-0 text-center pt-5 d-none d-md-block d-lg-block d-xl-block">
                            <img src="./assets/img/our-journey.jpg" alt="Our Journey" />
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row pt-3">
                        <div class="col-md-6 text-center pt-5 pl-md-0">
                            <img src="./assets/img/single-estate-agave-new2.jpg" alt="100% Single Estate Agave" />
                        </div>
                        <div class="col-xl-4 offset-xl-1 col-md-6 pt-md-5 pt-3 d-flex align-content-center flex-wrap">
                            <div class="section-snippet">
                                <h2 class="pb-2">100% "Single Estate" Agave</h2>
                                <p>
                                    Single Estate grown on the Volcanic Belt, our agaves are
                                    planted, nurtured, and harvested solely in our fields and
                                    never sourced.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="parallax2" class="parallaxParent pt-5 pb-md-5 mt-3">
            <div class="parallax-img" style="background-image: url(./assets/img/banner-our-journey.jpg);">
                <div class="container overlay-text d-none d-md-block d-lg-block d-xl-block">
                    <p class="banner-text">
                        The agave shortage has hit the Mexico so hard, yet we've been able
                        to flourish due to our all organic approach and practices. El
                        Sativo Tequila is certified organic by the USDA and EU. 100%
                        Non-GMO and Kosher by Rabbinical Law.
                    </p>
                </div>
            </div>
        </div>
        <div class="container d-md-none d-lg-none d-xl-none">
            <p class="pt-1 text-center">
                The agave shortage has hit the Mexico so hard, yet we've been able to
                flourish due to our all organic approach and practices. El Sativo
                Tequila is certified organic by the USDA and EU. 100% Non-GMO and
                Kosher by Rabbinical Law.
            </p>
        </div>
        <div class="spacer s1">
            <div class="box2 blue pb-5">
                <div class="container-fluid">
                    <div class="row pt-3">
                        <div class="col-md-6 offset-md-1 pt-5 d-md-none d-lg-none d-xl-none">
                            <img src="./assets/img/jimador-cropped.jpg" alt="Agave cultivation" />
                        </div>
                        <div class="col-xl-4 offset-xl-1 col-md-6 pt-md-5 pt-3 d-flex align-content-center flex-wrap">
                            <div class="section-snippet">
                                <h2 class="pb-2">We cut no corners</h2>
                                <p>
                                    Cultivation is carried out without pesticides or fungicides.
                                    Only organic fertilizers are used. The organic certification
                                    process is vital, complex and time consuming because the
                                    process is different from common tequila.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 offset-xl-1 pt-5 pr-md-0 d-none d-md-block d-lg-block d-xl-block">
                            <img src="./assets/img/jimador-cropped.jpg" alt="Agave cultivation" />
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row pt-3">
                        <div class="col-md-6 pt-5 pl-md-0">
                            <img src="./assets/img/cooking.jpg" alt="Cooking, filtration & fermentation" />
                        </div>
                        <div class="col-xl-4 offset-xl-1 col-md-6 pt-md-5 pt-3 d-flex align-content-center flex-wrap">
                            <div class="section-snippet">
                                <h2 class="pb-2">Cooking, filtration &amp; fermentation</h2>
                                <p>
                                    We slowly steam our blue agaves for 24-48 hours in our small
                                    batch stone ovens. No autoclaves. No diffusers. Fermenting
                                    with our environmentally occurring yeast.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="parallax3" class="parallaxParent pt-md-5 pb-md-5 mt-3 d-none d-md-block d-lg-block d-xl-block">
            <div class="parallax-img" style="background-image: url(./assets/img/banner-our-journey2.jpg);">
                <div class="container overlay-text d-none d-md-block d-lg-block d-xl-block">
                    <div class="row">
                        <div class="col-md-5 offset-md-7">
                            <p class="banner-text text-white">
                                El Sativo purifies and filters our well water through 135 feet
                                of volcanic rock for some of the cleanest water on the planet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="parallax3" class="parallaxParent pt-md-5 pb-md-5 mt-3 d-md-none d-lg-none d-xl-none">
            <div class="parallax-img" style="
            background-image: url(./assets/img/banner-our-journey2-mobile.jpg);
          "></div>
        </div>
        <div class="container d-md-none d-lg-none d-xl-none">
            <p class="pt-1 text-center">
                El Sativo purifies and filters our well water through 135 feet of
                volcanic rock for some of the cleanest water on the planet.
            </p>
        </div>
        <div class="spacer s3">
            <div class="box3 blue">
                <div class="container-fluid">
                    <div class="row pt-md-3">
                        <div class="col-md-6 offset-md-1 pt-5 pr-md-0 d-md-none d-lg-none d-xl-none">
                            <img src="./assets/img/innovation.jpg" alt="One of a kind innovation" />
                        </div>
                        <div class="col-xl-4 offset-xl-1 col-md-6 pt-md-5 pt-3 d-flex align-content-center flex-wrap">
                            <div class="section-snippet">
                                <h2 class="pb-2">One of a kind innovation</h2>
                                <p>
                                    There are naturally occurring plant benefits found in the
                                    agave known to boost energy and mood while reducing
                                    inflammation for a much better drinking experience. We pull
                                    out these particular raw ingredients prior to cooking and
                                    maintain until distillation. This improves the molecular
                                    structure, a marvel of stimulated tequila.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 offset-xl-1 pt-5 pr-md-0 d-none d-md-block d-lg-block d-xl-block">
                            <img src="./assets/img/innovation.jpg" alt="One of a kind innovation" />
                        </div>
                    </div>
                </div>
                <div class="container-fluid pb-md-5">
                    <div class="row pt-3">
                        <div class="col-md-6 pt-5 pl-md-0">
                            <img src="./assets/img/future.jpg" alt="Sustainability & future forward" />
                        </div>
                        <div class="col-xl-4 offset-xl-1 col-md-6 pt-md-5 pt-3 d-flex align-content-center flex-wrap">
                            <div class="section-snippet">
                                <h2 class="pb-2">Sustainability &amp; future forward</h2>
                                <p>
                                    Our family believes the key to a better tomorrow is
                                    sustainability. With the future in our hands we will
                                    continue to move forward as we expand and build a new
                                    distillery powered by solar and green energy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="libations" class="page-section pt-5">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-xl-12">
                                <h2 class="pt-5 pb-2">Cocktails</h2>
                                <p class="text-uppercase">
                                    We do the heavy mood lifting for you
                                </p>
                                <p>
                                    El Sativo sets itself apart by utilizing a special
                                    distillation method that naturally highlights the Agave
                                    plant’s precious resources known to have Mood Lifting and
                                    Energy Boosting properties that exemplify #SoSativo. We are
                                    proud to be OK Kosher certified and our bottles are 100%
                                    Smart Combustible Recycled Glass with organic soluble
                                    labels.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container-fuild">
                        <div class="row m-0 pb-5 libations">
                            <div class="column pr-md-1">
                                <div class="container-recipe">
                                    <img src="./assets/img/el-sativo-smash.jpg" alt="Sativa Smash" />
                                    <span class="btn-custom btn-recipe">View Recipe</span>
                                    <div class="drink-recipe d-table w-100 h-100">
                                        <div class="recipe-info d-table-cell align-middle">
                                            <h4 class="mb-3">Sativa Smash</h4>
                                            <h6 class="custom-heading">Ingredients</h6>
                                            <ol>
                                                <li>2 oz. El Sativo</li>
                                                <li>3/4 fresh lemon</li>
                                                <li>3/4 light agave syrup*</li>
                                                <li>5-6 pieces of mint</li>
                                            </ol>
                                            <h6 class="custom-heading">Preparation</h6>
                                            <ol>
                                                <li>
                                                    Add all ingredients to a Shaker Tin, slap the mint
                                                    before dropping in. Ice, Shake and Fine Strain over
                                                    Crushed Ice. Garnish with a Mint Sprig.
                                                </li>
                                                <li>
                                                    * Agave Syrup: 1 Part Light Agave, 1 Part Water.
                                                    Bring to a boil and let simmer. Refrigerate after
                                                    cooling.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column pr-md-1">
                                <div class="container-recipe">
                                    <img src="./assets/img/el-sativo-smash3.jpg" alt="Cantaritos" />
                                    <span class="btn-custom btn-recipe">View Recipe</span>
                                    <div class="drink-recipe d-table w-100 h-100">
                                        <div class="recipe-info d-table-cell align-middle">
                                            <h4 class="mb-3">Cantaritos</h4>
                                            <h6 class="custom-heading">Ingredients</h6>
                                            <ol>
                                                <li>2 oz El Sativo Blanco</li>
                                                <li>1/2 oz fresh lime</li>
                                                <li>1/2 oz fresh lemon</li>
                                                <li>1/4 oz fresh orange juice</li>
                                                <li>1/4 oz ruby red grapefruit</li>
                                                <li>3/4 light agave</li>
                                            </ol>
                                            <h6 class="custom-heading">Preparation</h6>
                                            <ol>
                                                <li>
                                                    Add all ingredients into a shaker tin. Ice, shake
                                                    and strain over ice. Top with grapefruit soda (Fever
                                                    Tree recommended). Garnish with a lime and lemon
                                                    wheel.
                                                </li>
                                                <li>
                                                    * Agave Syrup: 1 Part Light Agave, 1 Part Water.
                                                    Bring to a boil and let simmer. Refrigerate after
                                                    cooling.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div id="charity" class="page-section spacer s4 pt-5 pb-5">
            <div class="box4 blue">
                <div class="container text-center">
                    <h2 class="pt-5 pb-2">Charity</h2>
                    <p class="text-uppercase">
                        From soil to sea: A Better Tequila A Better World
                    </p>
                    <div class="row">
                        <div class="col-md-4 pt-5">
                            <img class="icon-charity" src="./assets/img/icon-charity-1.png" alt="EL Sativo Bottle" />
                            <h6 class="custom-heading pt-4">Our bottle and our liquid</h6>
                            <p>
                                100% recycled smart combustible glass, Organic soluble label
                                (Pesticide free), Certified USDA organic Tequila, 100% NON-GMO
                                and certified Kosher, Volcanic rock filtered water
                            </p>
                        </div>
                        <div class="col-md-4 pt-5">
                            <img class="icon-charity" src="./assets/img/icon-charity-2.png" alt="EL Sativo Mission" />
                            <h6 class="custom-heading pt-4">Our mission and vision</h6>
                            <p>
                                We are committed to improving our environment, helping to
                                build awareness and pushing to find remedies for the
                                preservation of our planet. El Sativo means "Sown in Seeds",
                                anything planted, nurtured and grown is life. We are
                                partnering with multiple organizations, giving back to save
                                our resources for future generations.
                            </p>
                        </div>
                        <div class="col-md-4 pt-5">
                            <img class="icon-charity" src="./assets/img/icon-charity-3.png" alt="EL Sativo charity" />
                            <h6 class="custom-heading pt-4">
                                We give back, we care about the planet, we create
                                sustainability and responsibility
                            </h6>
                            <p>
                                Every bottle sold gives back to the ocean conservancy and
                                clean water relief.
                            </p>
                            <a href="https://oceanconservancy.org/" target="_blank" class="btn-custom">Click here to
                                Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="parallax4" class="parallaxParent pt-md-5 pb-md-5">
            <div class="parallax-img" style="background-image: url(./assets/img/banner-charity.jpg);"></div>
        </div>

        <section id="contactUs" class="page-section mb-5">
            <div class="banner-contact pt-5 pb-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center">
                            <img class="mt-4 img-contact bottle" src="./assets/img/banner-contact.png"
                                alt="El Sativo Bottle" srcset="" />
                        </div>
                        <div class="col-md-6 mt-4">
                            <h2 class="pb-2">Come Sip with Us</h2>
                            <form method="post">
                                <div class="form-group text-left">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="John Doe" name="visitor_name" maxlength="50"
                                        pattern="[A-Z\sa-z]{3,20}" required />
                                </div>
                                <div class="form-group text-left">
                                    <label for="exampleFormControlInput2">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2"
                                        placeholder="name@example.com"
                                        pattern="[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z]{2,3}"
                                        name="visitor_email" required />
                                </div>
                                <div class="form-group text-left">
                                    <label for="exampleFormControlInput3">Mobile Number</label>
                                    <input type="tel" onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                        class="form-control" id="exampleFormControlInput3" placeholder="+16366622655"
                                        minlength="4" maxlength="15" name="visitor_mobile" />
                                </div>
                                <div class="form-group text-left">
                                    <label for="exampleFormControlInput4">Address</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput4"
                                        placeholder="Your Address" name="visitor_address" maxlength="200" />
                                </div>
                                <div class="form-group text-left">
                                    <label for="exampleFormControlTextarea5">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"
                                        placeholder="Your message" name="visitor_message" maxlength="500"></textarea>
                                </div>
                                <div class="form-group text-left">
                                    <button class="btn-custom" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </form>
                            <?php echo $success; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /Main content -->

        <!-- Footer -->
        <footer class="pt-5 pb-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 text-center">
                        <img class="logo-footer mb-3" src="./assets/img/logo-elsativo.png" alt="El Sativo Tequila" />
                    </div>
                    <div class="col-md-8 text-center">
                        <h6 class="custom-heading">Please drink responsibly</h6>
                        <!-- <div class="d-flex">
                <ul
                  class="mb-0 list-inline mx-auto justify-content-center list-top"
                >
                  <li class="list-inline-item nav-item-footer">
                    <a href="#">Privacy policy</a>
                  </li>
                  <li class="list-inline-item nav-item-footer">
                    <a href="#">Terms of use</a>
                  </li>
                  <li class="list-inline-item nav-item-footer">
                    <a href="#contactUs">Contact us</a>
                  </li>
                </ul>
              </div> -->
                        <div class="d-flex">
                            <ul class="list-inline mx-auto justify-content-center">
                                <li class="list-inline-item nav-item-footer text-uppercase">
                                    <a class="custom-heading"
                                        href="https://www.facebook.com/elsativotequila/"><strong>Facebook</strong></a>
                                </li>
                                <li class="list-inline-item nav-item-footer text-uppercase">
                                    <a class="custom-heading"
                                        href="https://www.instagram.com/elsativotequila/"><strong>Instagram</strong></a>
                                </li>
                                <!-- <li class="list-inline-item nav-item-footer text-uppercase">
                    <a class="custom-heading" href="#">
                      <strong>Twitter</strong></a
                    >
                  </li> -->
                                <!-- <li class="list-inline-item nav-item-footer text-uppercase">
                    <a
                      class="custom-heading"
                      href="https://in.pinterest.com/elsativo/"
                    >
                      <strong>Pinterest</strong></a
                    >
                  </li>
                  <li class="list-inline-item nav-item-footer text-uppercase">
                    <a class="custom-heading" href="#">
                      <strong>Youtube</strong></a
                    >
                  </li> -->
                                <!-- <li class="list-inline-item nav-item-footer text-uppercase">
                    <a
                      class="custom-heading"
                      href="https://www.linkedin.com/company/elsativo/"
                    >
                      <strong>LinkedIn</strong></a
                    >
                  </li> -->
                            </ul>
                        </div>

                        <p class="mb-0 copyright pt-2">©2020 by Elsativo.</p>
                    </div>
                    <div class="col-md-2 text center"></div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
    </section>
    <!-- /main-body -->
    <div id="loader-wrapper" class="loader-wrapper">
        <span class="loader"><img class="img-medal" src="./assets/img/badge.png" alt="Best of Class Medal" /></span>
    </div>

    <!-- age modal window -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-3 pb-4">
                <div class="modal-header">
                    <img src="./assets/img/logo-elsativo.png" alt="El Sativo Tequila" />
                </div>
                <div class="modal-body">
                    <p>
                        Please verify that you are 21 years of age or older by Clicking on
                        our beautiful organic blue agave.
                    </p>
                    <a href="javascript:void(0)" class="cont-medal position-relative" onclick="checkAge()"><img
                            class="img-medal" src="./assets/img/agave.png" alt="Organic blue agave" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /age modal window -->
    <script type="text/javascript">
    (function() {
        var i,
            e,
            d = document,
            s = "script";
        i = d.createElement("script");
        i.async = 1;
        i.src =
            "https://cdn.curator.io/published/015a77ae-2e52-420d-8ad3-ad607d1cb5f3.js";
        e = d.getElementsByTagName(s)[0];
        e.parentNode.insertBefore(i, e);
    })();
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
    // init controller
    var controller = new ScrollMagic.Controller({
        globalSceneOptions: {
            triggerHook: "onEnter",
            duration: "200%"
        },
    });

    // build scenes
    new ScrollMagic.Scene({
            triggerElement: "#parallax1"
        })
        .setTween("#parallax1 > div", {
            y: "80%",
            ease: Linear.easeNone
        })
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#parallax2"
        })
        .setTween("#parallax2 > div", {
            y: "80%",
            ease: Linear.easeNone
        })
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#parallax3"
        })
        .setTween("#parallax3 > div", {
            y: "80%",
            ease: Linear.easeNone
        })
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#parallax4"
        })
        .setTween("#parallax4 > div", {
            y: "80%",
            ease: Linear.easeNone
        })
        .addTo(controller);
    </script>
</body>

</html>