<section id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="login-panel panel panel-default">
                        <div class="col-lg-12 text-center">
                            <br>
                            <h2>Kalender</h2>
                            <hr class="star-primary">
                        </div>
                        
                        <div class="panel-body">
                            <form class="form-signin" role="form" method="post" action="">
                               <div id="my-calendar"></div>

                        <script type="application/javascript">
                            $(document).ready(function () {
                                $("#my-calendar").zabuto_calendar({
                                    ajax: {
                                        url: "<?php echo base_url(); ?>menu/service",
                                        modal: true
                                    }
                                });
                            });
                        </script>
                               <!-- <fieldset>
                                    
                                    <button class="btn btn-lg btn-success btn-block" type="submit" name="booking" ><span class="menu-title"><strong>BOOKING&nbsp;&nbsp;</strong></span><i class="fa fa-sign-in fa-2x"></i></button>
                                    <br>
                                    <button class="btn btn-lg btn-success btn-block" type="submit" name="payment"><span class="menu-title"><strong>PAYMENT&nbsp;&nbsp;</strong></span><i class="fa fa-credit-card fa-2x"></i></button>

                                </fieldset> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>