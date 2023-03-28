<?php
include('header.php');

?>
<html>
    <div class="container location-cont">
        <ul class="location-list">
            <li class="bold"><a href="index.php">Home / &nbsp;</a></li>
            <li>Our Offices</li>
            <ul>
    </div>
    <div class="container">
        <h1>Our Offices</h1>
        <div class="location-card-wrapper">
            <div class="location-card">
                <img class="location-card-img" src="img/contact_assets/asset 1.jpeg">
                <div class="location-card-content">
                    <h2 class="location-card-header"><a>London Office</a></h2>
                    <p class="location-card-text">Unit G6,
                        <br>
                        Pixel Business Centre,
                        <br>
                        110 Brooker Road, Waltham Abbey
                        <br>
                        London
                        <br>
                        EN9 1JH
                    </p>
                    <h3 class="location-card-phone">02045 397354<h3>
                            <button class="btn btn-contact"> VIEW MORE</button>
                </div>
                <div class="location-card-map">
                    <div style="overflow:hidden;max-width:100%;width:500px;height:500px;">
                        <div id="google-maps-display" style="height:100%; width:100%;max-width:100%;"><iframe
                                style="height:100%;width:100%;border:0;" frameborder="0"
                                src="https://www.google.com/maps/embed/v1/place?q=Brooker+Road,+Waltham+Abbey+EN9+1JH,+UK&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location-card">
                <img class="location-card-img" src="img/contact_assets/asset 2.jpeg">
                <div class="location-card-content">
                    <h2 class="location-card-header"><a>Cambridge Office</a></h2>
                    <p class="location-card-text">Unit 1.31,
                        <br>
                        St John's Innovation Centre,
                        <br>
                        Cowley Road, Milton,
                        <br>
                        Cambridge
                        <br>
                        CB4 0WS
                    </p>
                    <h3 class="location-card-phone">01223 37 57 72<h3>
                            <button class="btn btn-contact"> VIEW MORE</button>
                </div>
                <div class="location-card-map">
                    <div style="overflow:hidden;max-width:100%;width:500px;height:500px;">
                        <div id="google-maps-display" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                                src="https://www.google.com/maps/embed/v1/place?q=CB4+0WS+&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location-card">
                <img class="location-card-img" src="img/contact_assets/asset 3.jpeg">
                <div class="location-card-content">
                    <h2 class="location-card-header"><a>Wymondham Office</a></h2>
                    <p class="location-card-text">Unit 15,
                        <br>
                        Penfold Drive,
                        <br>
                        Gateway 11 Business Park
                        <br>
                        Wymondham, Norfolk
                        <br>
                        NR18 0WZ
                    </p>
                    <h3 class="location-card-phone">01603 70 40 20<h3>
                            <button class="btn btn-contact"> VIEW MORE</button>
                </div>
                <div class="location-card-map">
                    <div style="overflow:hidden;max-width:100%;width:500px;height:500px;">
                        <div id="google-maps-display">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                                src="https://www.google.com/maps/embed/v1/place?q=Penfold+Drive,+Wymondham+NR18+0WZ,+UK&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location-card">
                <img class="location-card-img" src="img/contact_assets/asset 4.jpeg">
                <div class="location-card-content">
                    <h2 class="location-card-header"><a>Great Yarmouth Office</a></h2>
                    <p class="location-card-text">Suite F23,
                        <br>
                        Beacon Innovation Centre,
                        <br>
                        Beacon Park, Gorleston
                        <br>
                        Great Yarmouth, Norfolk
                        <br>
                        NR31 7RA
                    </p>
                    <h3 class="location-card-phone">01493 60 32 04<h3>
                            <button class="btn btn-contact"> VIEW MORE</button>
                </div>
                <div class="location-card-map">
                    <div style="overflow:hidden;max-width:100%;width:500px;height:500px;">
                        <div id="google-maps-display" style="height:100%; width:100%;max-width:100%;"><iframe
                                style="height:100%;width:100%;border:0;" frameborder="0"
                                src="https://www.google.com/maps/embed/v1/place?q=Gorleston-on-Sea,+Great+Yarmouth+NR31+7RA,+UK&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="contact-form-container container">
                <div class = "contact-email-details">
                    <p><strong>Email us on:</strong>
                    <br>
                    </p>
                    <h3 class="contact-page-email">sales@netmatters.com</h3>
                    <p><strong>Business Hours:</strong></p>
                    <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
                    <p><strong>Out of Hours IT Support<em style="font-style: normal" class="fa fa-chevron-down rotate"></em></strong></p>
                    
                </div>
                <div class="contact-page-form">
                    <div class = "contact-form-row">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <span class ="form-space"></span>
                    <div class="form-group">
                        <label for="company-name">Company Name</label>
                        <input type="text" class="form-control" id="company-name"> 
                    </div>
                    </div>  
                    <div class = "contact-form-row">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <span class ="form-space"></span>
                    <div class="form-group">
                        <label for="Your Telephone Number">Your Telephone</label>
                        <input type="text" class="form-control" id="phone">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="5"></textarea>
                    </div>

                </div>
            </div>
    </div>  
    <?php include('src/footer.php');
?>
</html>