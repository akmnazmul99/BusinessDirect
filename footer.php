<footer class="footer">
    <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="footer-text">Business Direct © 2017. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="msg-panel-box">
    <div class="quick-msg-img in-out"> 
        <img src="images/enquiry-here.png"/>
    </div>
    <form class="form-class" action="#" method="post">
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
</body>
</html>
<script>
    $(document).ready(function () {
        $(".quick-msg-img").click(function (event) {
            event.preventDefault();
            if ($(this).hasClass("in-out")) {
                $(".msg-panel-box").stop().animate({left: "0px"}, 500);
            } else {
                $(".msg-panel-box").stop().animate({left: "-300px"}, 500);
            }
            $(this).toggleClass("in-out");
            return false;
        });
    });
</script>
