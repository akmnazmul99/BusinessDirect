<div class="container margin-top-bottom-25px">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="text-center wow fadeInDown" data-wow-duration="1s">UK Energy Business Suppliers</h1>
        </div>
    </div>
    <div class="suppliers">
        <div class="row form-group margin-top-50px wow fadeInLeftBig" data-wow-duration="1s">
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a1.jpg"><img src="images/suppliers/a1.jpg" alt="a1"/></a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a2.jpg"><img src="images/suppliers/a2.jpg" alt="a2"/></a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a3.jpg"><img src="images/suppliers/a3.jpg" alt="a3"/></a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a4.jpg"><img src="images/suppliers/a4.jpg" alt="a4"/></a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a5.jpg"><img src="images/suppliers/a5.jpg" alt="a5"/></a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a6.jpg"><img src="images/suppliers/a6.jpg" alt="a6"/></a>
            </div>
        </div>
        <div class="row form-group wow fadeInRightBig" data-wow-duration="1s">
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a7.jpg"><img src="images/suppliers/a7.jpg" alt="a7"/></a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a8.jpg"><img src="images/suppliers/a8.jpg" alt="a8"/></a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a9.jpg"><img src="images/suppliers/a9.jpg" alt="a9"/></a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a10.jpg"><img src="images/suppliers/a10.jpg" alt="a10"/></a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a11.jpg"><img src="images/suppliers/a11.jpg" alt="a11"/></a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 form-group">
                <a href="images/suppliers/a12.jpg"><img src="images/suppliers/a12.jpg" alt="a12"/></a>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="footer-text">UK Energy Business © 2017. All Rights Reserved.</p>
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
    $(document).ready(function() {
        $(".quick-msg-img").click(function(event) {
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
