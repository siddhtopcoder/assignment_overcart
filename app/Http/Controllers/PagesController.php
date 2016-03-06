<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function MainPage(){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "http://offline-news-api.herokuapp.com/stories");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      $data = json_decode($result,true);
      return View('MainPage')->with('data',$data);
    }

    public function Informations($id){
      $send = [];
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "http://offline-news-api.herokuapp.com/stories");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      $data = json_decode($result,true);
      foreach($data as $traverse){
        if($traverse['guid'] == $id){
          $send['guid'] = $traverse['guid'];
          $send['author'] = $traverse['author'];
          $send['title'] = $traverse['title'];
          $send['date'] = $traverse['date'];
          $send['body'] = $traverse['body'];

          return View('Information')->with('send',$send);

        }
      }
    }
}
