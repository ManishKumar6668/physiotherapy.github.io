<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
    <?php
    if (!empty($_POST["send"])) {
        $userfName = $_POST["userfName"];
        $userlName = $_POST["userlName"];
        $userEmail = $_POST["userEmail"];
        $userPhone = $_POST["userPhone"];
        $userMessage = $_POST["userMessage"];
        $toEmail = "manishyashahmedia@gmail.com";

        $mailHeaders = "Name: " . $userfName . $userlName.
            "\r\n Email: " . $userEmail .
            "\r\n Phone: " . $userPhone .
            "\r\n Message: " . $userMessage . "\r\n";

        if (mail($toEmail, $userfName, $mailHeaders)) {
            $message = "Your contact information is received successfully.";
        }
    }

    ?>
    <!-- Contact Form Section Starts-->
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mb-5" data-aos="fade">



                <form method="post" name="emailContact" class="p-5 bg-white" style="margin-top: -150px;">


                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name <em>*</em></label>
                                <input type="text" id="fname" name="userfName" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Last Name</label>
                                <input type="text" id="lname" name="userlName" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email <em>*</em></label>
                                <input type="email" id="email" name="userEmail" class="form-control" required>
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Contact Number <em>*</em></label>
                                <input type="tel" id="subject" name="userPhone" class="form-control" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Message <em>*</em></label>
                                <textarea name="userMessage" id="message" cols="30" rows="7" class="form-control"
                                    placeholder="Write your notes or questions here." required></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" name="send"
                                    class="btn btn-pill btn-primary btn-md text-white">
                                <?php if (!empty($message)) { ?>
                                    <div class="success">
                                        <strong><?php echo $message; ?></strong>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-md-5" data-aos="fade" data-aos-delay="100">

                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">Mamta villa ground floor vivekanand road palta 743122
                            Chanduria South, Near - 47 T Railgate , Simurali , Nadia,
                            West Bengal</p>

                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">+91 7596917747</a></p>

                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                    </div>

                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">More Info</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14686.848035304874!2d88.50740605551678!3d23.034344095224082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8c057b0dbbb2b%3A0xd873760d0e85f9f4!2sSimurali%2C%20West%20Bengal%20741248!5e0!3m2!1sen!2sin!4v1679552204064!5m2!1sen!2sin"
                            width="350" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p><a href="#" class="btn btn-primary px-4 py-2 text-white btn-pill btn-sm">Learn More</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Section Ends-->
</body>

</html>