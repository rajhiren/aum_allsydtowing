<?php
	@$_SESSION['rcpage'] = 4;
?>
<!DOCTYPE html>
<html>
    <?php include("head.php");?>

    <body>
        <?php include("header.php");?><!-- .header-wrapper end -->

       <!-- .master-wrapper end -->
        <!-- .header-wrapper.header-transparent end -->

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg08">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact us</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul><!-- .breadcrumb end -->
                        </div><!-- .breadcrumb-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>your inquiry</h3>
                        </div><!-- .custom-heading.left end -->

                        <p>
                            Please fill out all your information and we will call you back as soon as possible
                        </p>

                        <br />

                        <!-- .contact form start -->
                        <form class="wpcf7 clearfix">
                            <fieldset>
                                <label>
                                    <span class="required">*</span> Your request:
                                </label>

                                <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
                                    <option value="I need an offer for contract logistics">I need an offer for contract logistics</option>
                                    <option value="I need an offer for air freight">I need an offer for air freight</option>
                                    <option value="I want to become your partner">I want to become your partner</option>
                                    <option value="I have some other request">I have some other request</option>
                                </select>
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> First Name:
                                </label>

                                <input type="text" class="wpcf7-text" id="contact-name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Last Name:
                                </label>

                                <input type="text" class="wpcf7-text" id="contact-last-name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Email:
                                </label>

                                <input type="url" class="wpcf7-text" id="contact-email">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Message:
                                </label>

                                <textarea rows="8" class="wpcf7-textarea" id="contact-message"></textarea>
                            </fieldset>

                            <input type="submit" class="wpcf7-submit" value="send" />
                        </form><!-- .wpcf7 end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>ALL SYDNEY TOWING</h3>
                        </div><!-- .custom-heading end -->

                        <div id="map"></div>

                        <div class="custom-heading">
                            <h4>company information</h4>
                        </div><!-- .custom-heading end -->

                        <address>
                            All Sydney Towing Pty Ltd,<br>
							3/86 falconer st, West Ryde<br>
                            NSW - 2142 <br />

                        </address>

                        <span class="text-big colored">
                            0423 808 240
                        </span>
                        <br />

                        <a href="mailto:">francis.tannous@hotmail.com</a>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

       <?php include("footer.php");?> <!-- #footer-wrapper end -->


    </body>
</html>
