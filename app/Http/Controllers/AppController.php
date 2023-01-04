<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{

    public   $datta = [
        "key1" =>'samer',
        "key2" =>'sdasda',
        "key3" => 'litel one'];

    public function getArayy($datta){

        return $datta;


    }
    public function ShowData($key){

        $this->datta;
        return $this->datta[$key];

    }
    public function Send(){


        return view("showproduct",["data"=>$this->datta]);

    }




}
