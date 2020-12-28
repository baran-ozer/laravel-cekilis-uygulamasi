<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Çekiliş Sayfası</title>

    {{-- JQuery - Bootsrap --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/cekilis.css">
    
    
</head>
<body>
    <form action="{{route('KazananSec')}}" method="get" target="_blank">
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-4" style="margin: auto; width: 50%;">
                <h1 style="text-align: center; border-radius: 2px;"><i>Çekiliş Bilgileri</i></h1> 

                <div style="margin-top: 10px; border: 2px solid rgb(180, 92, 92); background-color: rgb(159, 214, 218)">
                    <div style="text-align: center"><h5><b>Katılımcılar</b></h5></div>
                    @foreach ($users as $key => $value)
                        <ul>
                            {{($value -> username)}} -  {{($value -> gender)}} - {{($value -> department)}} - 
                            {{($value -> driver_license ? 'Sürücü Belgesi Var' : 'Sürücü Belgesi Yok')}}
                        </ul>
                    @endforeach
                </div>
               
                <h4 style="text-align: center; border-radius: 2px; margin-top: 20px; color: rgb(124, 43, 43)"><i><b>Özellikler</b></i></h4> 

                <div style="text-align: center; border: 2px solid rgb(177, 121, 121); background-color:rgb(223, 253, 255); margin-top: 5px;">
                    <div><h6><b>Cinsiyet</h6></b></div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="cinsiyet_kadın" name="cinsiyet" class="custom-control-input" value="Kadın" checked>
                        <label class="custom-control-label" for="cinsiyet_kadın">Kadın</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="cinsiyet_erkek" name="cinsiyet" class="custom-control-input" value="Erkek">
                        <label class="custom-control-label" for="cinsiyet_erkek">Erkek</label>
                    </div>
                </div>
                
                <div style="margin-top: 5px; border: 2px solid rgb(177, 121, 121); background-color: rgb(223, 253, 255)">
                    <div class="anchor col-md-12" style="text-align: center"><h6><b>Çalıştığı Birim</b></h6></div>
                    <select class="btn dropdown-toggle col-md-12"  name="calistigi_birim" style="border: 2px solid rgb(212, 159, 159); background-color: rgb(255, 254, 236)" required>
                        <ul class="items">
                            <option value='İnsan Kaynakları' selected>İnsan Kaynakları</option>
                            <option value='Bilgi İşlem'>Bilgi İşlem</option>
                            <option value='Muhasebe'>Muhasebe</option>
                            <option value='Teknik Destek'>Teknik Destek</option>
                        </ul>
                    </select>
                </div>

                <div style="margin-top: 5px; border: 2px solid rgb(177, 121, 121); background-color: rgb(223, 253, 255)">
                    <div class="" style="text-align: center">
                        <input class="form-check-input" name="sürücü_belgesi" type="checkbox" id="sürücü_belgesi"/> 
                        <label class="form-check-label" for="sürücü_belgesi" id="sürücü_belgesi_text">Sürücü Belgesi Yok</label>
                    </div>
                </div>
                <div style="margin-top: 5px; text-align: center;">
                    <button type="submit" class="btn btn-warning" id="cekilis"><b>Çekiliş Yap</b></button>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="/js/cekilis.js"></script>
</html>