<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facedes\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facedes\Validator;
use Illuminate\Foundation\Aunt\RegisterUsers;

class LatihanJson extends Controller
{
    public function getData1(){
        $ambildata = array( "name" => "Kristina",
                        "url" => "https://www.google.com",
                        "rank" => 1,
                        "socialmedia" => array(
                            "facebook"=> "",
                            "twitter" => "",
                            "instagram" => "",
                            "youtube" => "",
                            "github" => ""
                        ));
        $ambil = json_encode($ambildata);
        dd($ambil);
        }
       
        public function getData2(){
        $ambildata = array(
        "first_name" => "kristina",
        "last_name" => "tina",
        "location" => "Yogyakarta",
        "online" => true,
        "followers" => 982
        );
        $ambil=json_encode($ambidata);
        dd($ambil);
    }

    public function getData3(){
        $ambildata = array(
        "first_name" => "Sammy",
        "last_name" => "Shark",
        "location" => "Ocean",
        "websites" => array(
            [
            "description" => "work",
            "URL" => "https://www.digitalocean.com/"
            ],
          [
            "desciption" => "tutorials",
            "URL" => "https://www.digitalocean.com/community/tutorials"
          ]
          ),
        "social_media" => array(
          [
            "description" => "twitter",
            "link" => "https://twitter.com/digitalocean"
          ],
          [
            "description" => "facebook",
            "link" => "https://www.facebook.com/DigitalOceanCloudHosting"
          ],
          [
            "description" => "github",
            "link" => "https://github.com/digitalocean"
          ]
        ));
      $ambil=json_encode($ambildata);
      dd($ambil);
}
public function getData4(){
 $ambildata = array (
     "employees"=> array(
        ["firstName"=>"John", "lastName"=>"Doe"],
        ["firstName"=>"Anna", "lastName"=>"Smith"],
        ["firstName"=>"Peter","lastName"=>"Jones"]
 ));
        $ambil=json_encode($ambildata);
        dd($ambil);
        }
        public function getData5(){
            $ambildata= array(
                "matapelajaran"=> array(
            "subject" => "Matematika",
            "kelas" => array(
                [
                    "X" => "Argo",
                    "Jadwal" => "Senin"
                ],
                [
                    "XI" => "JJS",
                    "Jadwal" => "Selasa"
                ],
                [
                    "XII" => "Halim",
                    "Jadwal" => "Rabu"
                ]
                ));
                
                $ambil=json_encode($ambildata);
                dd($ambil);
}
}