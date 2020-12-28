<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ana Sayfa</title>

    {{-- JQuery - Bootsrap --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/cekilis.css">
    
    
</head>
<body>
    <form action="{{route('cekilisSayfasi')}}" method="post">
        @csrf
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-4" style="margin: auto; width: 50%;">
                <h1 style="text-align: center; border-radius: 2px;"><i>Kullanıcı Bilgileri</i></h1> 
                <input type="text" class="form-control" id="kullanici_adi" style="margin-top: 3px" placeholder="Kullanıcı Adı">

                <div style="text-align: center; border: 2px solid rgb(177, 121, 121); background-color:rgb(223, 253, 255); margin-top: 5px;">
                    <div><h6><b>Cinsiyet</h6></b></div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="cinsiyet_kadın" name="cinsiyet" value="Kadın" class="custom-control-input" checked>
                        <label class="custom-control-label" for="cinsiyet_kadın">Kadın</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="cinsiyet_erkek" name="cinsiyet" value="Erkek" class="custom-control-input">
                        <label class="custom-control-label" for="cinsiyet_erkek">Erkek</label>
                    </div>
                </div>
                
                <div style="margin-top: 5px; border: 2px solid rgb(177, 121, 121); background-color: rgb(223, 253, 255)">
                    <div class="anchor col-md-12" style="text-align: center"><h6><b>Çalıştığı Birim</b></h6></div>
                    <select class="btn dropdown-toggle col-md-12"  name="calistigi_birim" style="border: 2px solid rgb(212, 159, 159); background-color: rgb(255, 254, 236)" required>
                        <ul class="items" name="liste">
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
                    <button type="button" class="btn btn-success" id="ekle"><b>Kullanıcı Ekle</b></button>
                </div>

                <div style="margin-top: 10px; border: 2px solid rgb(180, 92, 92); background-color: rgb(159, 214, 218)">
                    <div style="text-align: center"><h5><i>Kullanıcılar</i></h5>
                    </div>
                    <ul>
                    </ul>
                </div>
                
                <div style="margin-top: 5px; border: 2px solid rgb(177, 121, 121); background-color: rgb(223, 253, 255)">
                    <div class="" style="text-align: center">
                        <label for="Temizle" style="color: red"><b>Önceki Kullanıcıları Temizle!!!</b></label>
                        <input type="checkbox" id="Temizle" name="Temizle" value="on" style="height:20px;  background-color: red; ">
                    </div>
                </div>
                
                <div style="margin-top: 5px; text-align: center;">
                    <button type="submit" class="btn btn-warning" id="cekilis"><b>Çekiliş Sayfası</b></button>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="/js/cekilis.js"></script>
</html>
{{-- BARAN ÖZER --}}