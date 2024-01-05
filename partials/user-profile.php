<section id="user-profile">   
    <div class="container mt-7">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 user-name">
                        <img src="img/he.jpg" alt="User name" class="aos-init" data-aos="fade-right" data-aos-delay="0" data-aos-once="true" />
                        <p class="aos-init" data-aos="fade-left" data-aos-delay="0" data-aos-once="true">Marcin Tomaszewski</p>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="row flex-wrap">
                            <div class="col-lg-3">                       
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-notifications-tab" data-toggle="pill" href="#v-pills-notifications" role="tab" aria-controls="v-pills-notifications" aria-selected="true">Powiadomienia<img src="/img/profile/notifications.svg" alt="Powiadomienia" /></a>
                                    <a class="nav-link" id="v-pills-route-tab" data-toggle="pill" href="#v-pills-route" role="tab" aria-controls="v-pills-route" aria-selected="false">Moje trasy<img src="/img/profile/route.svg" alt="Moje trasy" /></a>
                                    <a class="nav-link" id="v-pills-calendar-tab" data-toggle="pill" href="#v-pills-calendar" role="tab" aria-controls="v-pills-calendar" aria-selected="false">Kalendarz<img src="/img/profile/calendar.svg" alt="Kalendarz" /></a>
                                    <a class="nav-link" id="v-pills-group-tab" data-toggle="pill" href="#v-pills-group" role="tab" aria-controls="v-pills-group" aria-selected="false">Moja grupa<img src="/img/profile/group.svg" alt="Moja grupa" /></a>
                                    <a class="nav-link" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false">Moje konto<img src="/img/profile/account.svg" alt="Moje konto" /></a>
                                </div>
                            </div>                
                            <div class="col-lg-9">                       
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">
                                        <?php include 'partials/user/notifications.php';?>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-route" role="tabpanel" aria-labelledby="v-pills-route-tab">
                                        <?php include 'partials/user/route.php';?>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-calendar" role="tabpanel" aria-labelledby="v-pills-calendar-tab">
                                        <?php include 'partials/user/calendar.php';?>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-group" role="tabpanel" aria-labelledby="v-pills-group-tab">
                                        <?php include 'partials/user/group.php';?>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                                        <?php include 'partials/user/account.php';?>
                                    </div>
                                </div>              
                            </div>                           
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>       
</section>