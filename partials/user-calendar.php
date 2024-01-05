<section id="user-calendar" class="fit">   
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Planowanie przejazdów - <span>zaznacz godziny pracy</span></h1>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <ul class="cal-nav">
                            <li class="left"><a href="#">&lt;</a></li>
                            <li class="right"><a href="#">&gt;</a></li>
                            <li class="today"><a href="#">Dzisiaj</a></li>
                        </ul>                        
                        <div style="overflow:hidden;">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="datetimepicker_01"></div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#datetimepicker_01').datetimepicker({
                                        locale: 'pl',
                                        format: 'L',
                                        inline: true,
                                        sideBySide: true
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <table class="h-per-week">
                            <tr>
                                <th></th>
                                <th><span>Poniedziałek</span></th>
                                <th><span>Wtorek</span></th>
                                <th><span>Środa</span></th>
                                <th><span>Czwartek</span></th>
                                <th><span>Piątek</span></th>
                                <th><span>Sobota</span></th>
                                <th><span>Niedziela</span></th>                                
                            </tr>
                            <tr>
                                <td>07</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>                
            </div>
            <div class="col-lg-12">
                <div class="row footer">
                    <div class="col-lg-7 offset-lg-1">
                        <p>Pamietaj, nawet jeżeli w chwili obecnej nie ma osób szukających wspólnych do-jazdów, poinformujemy Cię jak tylko pojawi się nowy/chętny współtowarzysz podrózy na Twojej trasie. Dziennie rejestruje się do kilkuset nowych użytkowników.</p>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn btn_3 orange float-right" type="button" data-toggle="modal" data-target=".pop-ex">Przypisz harmonogram</button>
                    </div>
                    <div class="col-lg-1">
                        <button class="btn ask float-right" type="submit"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>