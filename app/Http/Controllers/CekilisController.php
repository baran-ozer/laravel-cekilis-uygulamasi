<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class CekilisController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function cekilisSayfasi (Request $request)
    {
        $kullaniciListesi = $request->input('kullaniciListesi');
        $kullaniciArray = explode(', ', $kullaniciListesi);

        if ($request->input('Temizle') == 'on'){
            DB::delete('delete from users');
        }
        
        if ($kullaniciArray[0] != ''){
            foreach ($kullaniciArray as $kullanici){
                list($kullanici_adi, $gender, $department, $driver_license) = explode(' - ', $kullanici);
                $driver_license == 'Sürücü Belgesi Var' ?  $driver_license = 1 :  $driver_license = 0;

                DB::insert('insert into users (username, gender, department, driver_license) values (?, ?, ?, ?)', 
                [$kullanici_adi, $gender, $department, $driver_license]);
            }
        }
        

        $users = DB::select('select * from users');

        return view('cekilis', ['users' => $users]);
    }

    public function KazananSec (Request $request)
    {
        $cinsiyet = $request->input('cinsiyet');
        $calistigi_birim = $request->input('calistigi_birim');

        $sürücü_belgesi = $request->input('sürücü_belgesi');
        $sürücü_belgesi ? $sürücü_belgesi = 1 : $sürücü_belgesi = 0;

        $kazanan = DB::table('users')
        ->where('gender', $cinsiyet)
        ->where('department', $calistigi_birim)
        ->where('driver_license',  $sürücü_belgesi)
        ->inRandomOrder()
        ->first(); // Database'den rastgele bir kayıt getiriyoruz

        return view('sonuc', ['kazanan' => $kazanan]);
    }
    
}
