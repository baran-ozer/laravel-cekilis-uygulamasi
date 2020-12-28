<div style="text-align: center; margin-top: 200px;">
    @php
        if(isset($kazanan -> username)){
            echo("<h1> Kazanan : ". ($kazanan -> username). "</h1>");
        }else {
            echo("<h1>Kriterleri Sağlayan Katılımcı Bulunamadı</h1>");
        }
    @endphp
</div>
   
