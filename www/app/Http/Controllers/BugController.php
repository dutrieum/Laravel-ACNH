<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BugController extends Controller
{
    public function bugs() {
      $curl = curl_init();

      curl_setopt_array($curl, [
        CURLOPT_URL => "https://acnhapi.com/v1/bugs",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
      ]);

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        $response = json_decode($response);
        //dd($response);
      }

      return view('bugs', [
        'response' => $response
      ]);
    }

    public function bug($id) {
      $curl = curl_init();

      curl_setopt_array($curl, [
        CURLOPT_URL => "https://acnhapi.com/v1/bugs/".$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
      ]);

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        $response = json_decode($response);
        $months = [
          '1'=>'january',
          '2'=>'february',
          '3'=>'march',
          '4'=>'april',
          '5'=>'may',
          '6'=>'june',
          '7'=>'july',
          '8'=>'august',
          '9'=>'september',
          '10'=>'october',
          '11'=>'november',
          '12'=>'december'
        ];
      }

      return view('bug', [
        'response' => $response,
        'months' => $months
      ]);
    }
}
