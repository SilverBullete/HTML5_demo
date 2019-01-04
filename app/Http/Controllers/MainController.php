<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller{
    public function binarization(Request $request){

    }
    public function download(Request $request){
        $url = "http://127.0.0.1:8080/Main/images/".$request->get('fname');
        $client = new Client(['verify' => false]);
        $response = $client->request('get',$url)->getBody()->getContents();
        Storage::put($request->get('fname'),$response);
    }
}