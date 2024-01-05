<div class="modal fade form-ex" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Przykładowy popup z formularzem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form_1 row" method="POST" action="#">
                    <!-- Zwykły input -->
                    <div class="col-12">
                        <input type="text" placeholder="Wpisz przykładowy tekst">
                    </div>
                    <!-- Select option -->
                    <div class="col-6">
                        <label for="exampleFormControlSelect1">Przykład pola wyboru</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>                   
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlSelect2">Przykład pola wielokrotnego wyboru</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>                   
                    </div>
                    <!-- Login/email i hasło -->
                    <div class="col-6">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Twój adres email">
                        <small id="emailHelp" class="form-text text-muted">Twój adres email jest jednocześnie loginem</small>                        
                    </div>
                    <div class="col-6">
                        <label for="inputPassword5">Hasło</label>
                        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Twóje hasło">
                        <small id="passwordHelpBlock" class="form-text text-muted">Opis wymagań dotyczących hasła. Np. min. 8 znaków.</small>                        
                    </div>
                    <!-- Checkbox -->
                    <div class="col-6 checkbox_3">
                        <label class="cont">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Przykład checkboxa domyślnie zaznaczonego
                        </label>
                        <label class="cont">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            Przykład checkboxa domyślnie niezaznaczonego
                        </label>                       
                    </div>
                    <div class="col-6 checkbox_4">
                        <label class="cont">One
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <label class="cont">Two
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <label class="cont">Three
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <label class="cont">Four
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>                      
                    </div>
                    <div class="modal-footer col-12">
                        <button class="btn" type="submit">Zatwierdź formularz</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>