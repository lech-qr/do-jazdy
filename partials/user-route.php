<section id="user-route" class="fit">   
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Twoja trasa - <span>Nazwa trasy</span></h1>
            </div>
            <div class="col-lg-3">
                <button class="btn btn_3 float-right" type="button" data-toggle="modal" data-target=".form-ex">Wyznacz punkt początkowy</button>
                <button class="btn btn_3 float-right" type="button" data-toggle="modal" data-target=".form-ex">Wyznacz&nbsp;punkt&nbsp;docelowy / wskaż&nbsp;kod&nbsp;obiektu</button>

                <br/><br/><br/>
                <br/><br/><br/>
                <br/><br/><br/>
                                
                <form class="form_2" method="POST" action="#">
                    <div class="checkbox_1">
                        <label class="cont">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Jestem kierowcą
                        </label>
                    </div> 
                    <br/>
                    <label>
                        Ilość miejsc
                        <input type="text" />
                    </label> 
                    <br/><br/>
                    <div class="checkbox_1">
                        <label class="cont">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            Jestem pasażerem
                        </label>
                    </div>  
                    <br/>
                    <label>
                        Odległość do wsiadania
                        <input type="text" placeholder="m"/>
                    </label>                    
                </form>
                
                <p>Jeśli jeździsz inną trasą, wyznacz ją i zapisz.</p>

            </div>
            <div class="col-lg-9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4715.133852323212!2d22.558890930405553!3d51.24200282714642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4722576ec3f9eebf%3A0x8d4621fecbbc504f!2sSzko%C5%82a%20Muzyczna%20I%20i%20II%20stopnia%20im.%20Tadeusza%20Szeligowskiego!5e0!3m2!1spl!2spl!4v1580225157203!5m2!1spl!2spl" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <p>Aby sprawdziś czy są oczekujący pasażerowie na Twojej trasie musisz ustawić swój harmonogram czasu pracy - pomimo tej samej lokalizacji możecie pracować w róźnych godzinach.</p>
                    </div>
                    <div class="col-lg-2">
                        <button onclick="location.href='/planowanie-przejazdow'" class="btn btn_3 float-right" type="submit">Dodaj nową trasę</button>
                    </div>
                    <div class="col-lg-2">
                        <button onclick="location.href='/planowanie-przejazdow'" class="btn btn_3 float-right" type="submit">Zapisz</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>