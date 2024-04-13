<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="assets/x-icon" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <!-- <iframe src="process_form.php" style="display: none;"></iframe> -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item  mx-1">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" aria-current="page" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown  mx-1">
                        <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="services.php">Volunteering</a></li>
                            <li><a class="dropdown-item" href="services.php#services2">Become a Member</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  mx-1">
                        <a class="nav-link" aria-current="page" href="index.php#gallery">Gallery</a>
                    </li>
                    <li class="nav-item  mx-1">
                        <a class="nav-link" aria-current="page" href="index.php#news">Latest News</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!--=======================================================================-->

    <!-- Contact form & details -->
    <section class="contact-section py-4">
        <div class="container">
            <h2 class="contact-heading serif-font">Contact</h2>
            <p class="contact-subheading">For any suggestions or queries feel free to contact us through any of the
                modes provided below.</p>
            <div class="row m-auto">
                <div class="col-lg-6">
                    <div class="contact-detail-div ">
                        <h3 id="contact-txt">We'd love to hear from you!</h3>
                        <p class="contact-detail-head"><i class="fas fa-phone-alt"></i> Phone</p>
                        <p>+91 9636262697 <br> +91 9799311457 </p>
                        <p class="contact-detail-head"> <i class="fas fa-envelope"></i> Email</p>
                        <p>karmaessential@gmail.com</p>
                        <p class="contact-detail-head"><i class="fas fa-map-marker-alt"></i> Address</p>
                        <p>KARMA ESSENTIAL, KAVIRAJ JI KA BARA, INSIDE SOJATI GATE, <br> JODHPUR, RAJASTHAN <br>342001
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-div">
                        <form id="contactform" action="process_data.php" method="post" class="form-tag">
                            <div class="mb-3">
                                <label for="" class="form-label">Full Name</label>
                                <input type="text" name="full_name" class="form-control" id="full_name"
                                    placeholder="Name" required />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="name@example.com" required />
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 phone-input-div">
                                    <label for="" class="form-label">Phone</label>
                                    <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" class="form-control"
                                        placeholder="Phone Number" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">City / Town</label>
                                    <input type="text" name="city" id="city" class="form-control"
                                        placeholder="Place of Residence" required />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">You want to join our organisation as a:</label>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="choice" id="choice"
                                        value="Volunteer" required>
                                    <label class="form-check-label" for="choice_volunteer">Volunteering</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="choice" id="choice"
                                        value="Beneficiary" required>
                                    <label class="form-check-label" for="choice_member">Become a member</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Why you want to join our organisation?</label>
                                <textarea class="form-control" name="msg" id="msg" rows="3"
                                    placeholder="Enter your message" required></textarea>
                            </div>
                            <button class="btn btn-primary " id="btn_submit" name="btn_submit">Send Message</button>
                            <span id="spinLoader" style=" display:none;"><i class="fa fa-spinner fa-spin"
                                    style="font-size: 24px; margin: 0 10px; color: #0ac05e;"></i></span>
                            <div id="err-box"
                                style="padding: 4px 8px; background: #f7d0d0; border: 1px solid #f36464; margin: 18px 0; display:none">
                            </div>
                            <div id="success-box"
                                style="padding: 4px 8px; background: rgb(193 241 205); border: 1px solid rgb(57 187 109); margin: 18px 0; display:none">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=======================================================================-->
    <!-- FOOTER -->
    <footer class="footer">
        <div class="container py-4 text-start">
            <div class="row ">
                <div class="col-md-4 col-sm-6 col-xs-12 px-2 text-light ">
                    <div class="row-col">
                        <div class="footer-logo-img">
                            <img src="assets/footer-logo.png" alt="">
                        </div>
                        <p class=" pt-3"> Pashu Preet Foundation, a non-governmental organization, is dedicated to
                            nurturing street animals through care, healing, and sustenance for their well-being.
                        </p>

                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-xs-12 px-2 text-light">
                    <div class="row-col">
                        <p class="topic text-light pb-3">Quick Links</p>
                        <p><a href="index.php">Home</a></p>
                        <p><a href="about.php">About Us</a></p>
                        <p><a href="services.php">Services</a></p>
                        <p><a href="index.php#news">Latest News</a></p>
                        <p><a href="contact.php">Contact Us</a></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 px-2 text-light">
                    <div class="row-col">
                        <p class="topic text-light pb-3">Contact us</p>
                        <p><i class="fas fa-phone-alt"></i> Phone:</p>
                        <p>+91 9636262697</p>
                        <p>+91 9799311457</p>
                        <p><i class="fas fa-envelope"></i> Email:</p>
                        <p><a>karmaessential@gmail.com</a></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 px-2 text-light">
                    <div class="row-last-col">
                        <p class="topic pb-3">Newsletter</p>

                        <form class="d-flex" onsubmit="subscribeNewsletter(event,this)">
                            <input class="form-control" name="subsForNewsletter" type="email" placeholder="Email"
                                required>
                            <button class="btn btn-light" type="submit"><i class="fab fa-telegram-plane"></i></button>
                        </form>
                        <div class="social-div">
                            <p class="pt-4 topic">Follow Us</p>

                            <a href="https://www.instagram.com/karmaessential.in?igsh=MzRlODBiNWFlZA==" class="p-1"><i
                                    class="fab fa-instagram"></i> </a>
                            <a href="https://www.facebook.com" class="p-1"><i class="fab fa-facebook-f"></i> </a>
                            <a href="http://www.linkedin.com" class="p-1"><i class="fab fa-linkedin-in"></i> </a>
                        </div>
                    </div>
                </div>


            </div>
            <hr>
            <p class="mb-0 text-center">Creativity and Design by Karan Verma</p>

        </div>


    </footer>


    <!-- JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="js/bootstrap.js"></script>
    <script src="js/popper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

    <script>
        // var contact_us_Form = document.getElementById('contactform');
        // var contact_us_Success = document.getElementById('success-box');
        // var contact_us_Err = document.getElementById('err-box');
        // var spinLoader = document.getElementById('spinLoader');

        // contact_us_Form.addEventListener("submit", function (event) {
        //     event.preventDefault();
        //     // spinLoader.style.display = 'inline-block';
        //     contact_us_Form.classList.add("disableElem");
        //     contact_us_Success.style.display = 'none';
        //     contact_us_Err.style.display = 'none';

        //     sendMsg(
        //         contact_us_Form.full_name.value,
        //         contact_us_Form.email.value,
        //         contact_us_Form.phone.value,
        //         contact_us_Form.city.value,
        //         contact_us_Form.choice.value,
        //         contact_us_Form.msg.value,

        //     );
        // });

        // function sendMsg(full_name, email, phone, city, choice, msg) {
        //     var xhttp = new XMLHttpRequest();
        //     xhttp.onreadystatechange = function () {
        //         if (this.readyState == 4) {
        //             if (this.status == 200) {
        //                 var jsonResponse;
        //                 try 
        //                 {
        //                     jsonResponse = JSON.parse(this.responseText);
        //                 } catch (error) 
        //                 {
        //                     console.error("Error parsing JSON:", error);
        //                     // return;
        //                 }
        //                 // if (jsonResponse.action == "Success") {
        //                 //     spinLoader.style.display = 'none';
        //                 //     contact_us_Form.classList.remove("disableElem");
        //                 //     contact_us_Success.style.display = 'block';
        //                 //     contact_us_Err.style.display = 'none';
        //                 //     contact_us_Success.innerHTML = 'Your message has been sent. Thank you.';
        //                 // } else if (jsonResponse.action == "Error") 
        //                 // {
        //                 //     spinLoader.style.display = 'none';
        //                 //     contact_us_Form.classList.remove("disableElem");
        //                 //     contact_us_Success.style.display = 'none';
        //                 //     contact_us_Err.style.display = 'block';
        //                 //     contact_us_Err.innerHTML = jsonResponse.type || 'Something went wrong.';
        //                 // }
        //             } 
        //             else 
        //             {
        //                 console.error('Error: ' + xhttp.status);
        //             }
        //         }
        //     };
        //     xhttp.open("POST", "process_form.php", true);
        //     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        //     var formData = "full_name=" + encodeURIComponent(full_name) + "&email=" + encodeURIComponent(email) + "&phone=" + encodeURIComponent(phone) + "&city=" + encodeURIComponent(city) + "&choice=" + encodeURIComponent(choice) + "&msg=" + encodeURIComponent(msg);
        //     xhttp.send(formData);
        // }




        // function subscribeNewsletter(event, elmForm) {
        //     event.preventDefault();
        //     elmForm.classList.add("disableElem");
        //     var emailInput = elmForm.querySelector('[name="subsForNewsletter"]');
        //     var email = emailInput.value;

        //     var xhttp = new XMLHttpRequest();
        //     xhttp.onreadystatechange = function () {
        //         if (this.readyState == 4 && this.status == 200) {
        //             jsonResp = JSON.parse(this.responseText);
        //             elmForm.classList.remove("disableElem");
        //             emailInput.value = ''; // Clear the input field after submission
        //             if (jsonResp.action == "Success") {
        //                 alert('Thank you for subscribing to our newsletter.')
        //             } else if (jsonResp.action == "Error") {
        //                 alert('Oops! Something went wrong.');
        //             }
        //         }
        //     };
        //     xhttp.open("POST", "https://script.google.com/macros/s/AKfycbzcWEq3G8GvB0A452_bImQiXEU9viVS_rd8vgVoB84-FduIaFHbKDd9WP9wNToISmmxFw/exec", true);
        //     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        //     xhttp.send("email=" + encodeURIComponent(email) + "&type=subscribeNewsletterEWS");
        // }

        $("#contactform").validate({
                rules :{
                    
                },
                messages :{
                    
                },
                
                submitHandler:function(form){
                    var formData = new FormData(form);
                    $.ajax({
                        url : "process_data.php",
                        method : "POST",
                        dataType : "JSON",
                        data : formData,
                        contentType : false,
                        processData : false,
                        success : function(data){
                            var jsonData = JSON.stringify(data);
                            var resultdata = jQuery.parseJSON(jsonData);

                            if(resultdata.status == 1)
                            {
                                alert(resultdata.message);
                                $('#full_name').val('');
                                $('#email').val('');
                                $('#phone').val('');
                                $('#city').val('');
                                $('#choice').val('');
                                $('#msg').val('');
                            }
                            else
                            {
                                alert(resultdata.message);
                            }

                        }
                        

                    })
                }

            })
            
        
    </script>




</body>

</html>