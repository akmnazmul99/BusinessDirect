<footer class="footer">
    <div class="footer-wrapper">
        <div class="container">
            <div class="row margin-top-bottom-25px">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="footer-text">Business Direct © 2017. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="quick-msg-section">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-11 col-sm-offset-4 col-sm-8 col-md-offset-8 col-md-4 col-lg-offset-9 col-lg-3">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="small-msg-box"> 
                        <i class="msg-box-i fa fa-envelope-o"> Leave a Message</i> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="large-msg-box"> 
                        <div class="large-msg-box-header">
                            <div class="row">
                                <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10 text-center">
                                    <div class="large-msg-box-header-text">
                                        Support
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                                    <div id="close" class="close-msg-box">
                                        <i class="msg-box-i fa fa-times"></i>
                                    </div>  
                                </div>  
                            </div>
                        </div>
                        <div class="large-msg-box-white-content-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <p>Leave a message and we'll get back to you.</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Name</label>
                                        <input class="form-control" type="text" placeholder="Your Name" name="footer_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Email</label>
                                        <input class="form-control" type="text" placeholder="Your Email" name="footer_email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Conatct Number</label>
                                        <input class="form-control" type="text" placeholder="Your Conatct Number" name="footer_contact_number">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Message</label>
                                        <textarea rows="3" class="form-control" placeholder="Your Message" name="footer_message"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <button class="form-control custom-button" id="quick-msg-send-btn" name="quick-msg-send-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<script>
    $(document).ready(function () {
        $("#small-msg-box").click(function () {
            $("#small-msg-box").hide();
            $("#large-msg-box").show();
        });
        $("#close").click(function () {
            $("#large-msg-box").hide();
            $("#small-msg-box").show();
        });
    });
</script>
