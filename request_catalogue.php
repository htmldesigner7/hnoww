<?php include 'header.php'; ?>
<section class="hero-section_inner">
    <img class="img-fluid" src="images/home/giftshop-banner.png" alt="him banner">

    <div class="hero_content_inner">
        <h2 class="main_head mb-3">The Gift Shop</h2>
        <p class="para sec_in_mb"> Curated gestures, sculptural objects, thoughtful rituals — for every moment worth
            honouring.</p>
        <a href="#" class="com_btn border-white bg-transparent text-white">ENTER THE WORLD </a>
    </div>
</section>
<section class="mt_60 mb_120">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-center sub_head">To preserve the intimacy of our collection, access to the Digital Catalogue is granted via a unique security key valid for 30 days. Upon request, your personal credentials will be sent to your inbox. Should you wish to revisit the collection after your viewing window has closed, we invite you to renew your request</p>
        </div>
        <div class="ct_form">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ct_input">
                        <label for="fullName" class="sub_head">Full Name</label>
                        <input type="text" id="fullName" name="fullName" placeholder="Enter your Full Name"
                            pattern="[A-Za-z\s]{2,50}" required>
                    </div>
                </div>
                <!-- Email -->
                <div class="col-lg-6">
                    <div class="ct_input">
                        <label for="email" class="sub_head">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your Email Address" required>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-lg-6">
                    <div class="ct_input">
                        <label for="phone" class="sub_head">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your Phone Number"
                            pattern="[\+0-9\s\-]{7,15}" required>
                    </div>
                </div>

                <!-- Enquiry Type (Bootstrap dropdown) -->
                <div class="col-lg-6">
                    <div class="ct_input">
                        <label class="sub_head">Enquiry Type</label>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="enquiryDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Bespoke Commissions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="enquiryDropdown">
                                <li><a class="dropdown-item" href="#">Bespoke Commissions</a></li>
                                <li><a class="dropdown-item" href="#">Product Inquiry</a></li>
                                <li><a class="dropdown-item" href="#">General Question</a></li>
                                <li><a class="dropdown-item" href="#">Order Status</a></li>
                            </ul>
                        </div>

                    </div>
                </div>                

                <!-- Submit -->
                <div class="col-12 text-center pt-4">
                    <button class="com_btn" type="submit">SEND MESSAGE</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>