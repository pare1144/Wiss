<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        // $client = new Client();
        $response = Http::get('http://10.100.1.94/wiss-api/ErrorLog/Mockup');
        // $response = $client->request('GET', 'http://10.100.1.94/wiss-api/ErrorLog/Mockup', [
        //     'form_params' => [
        //         'id' => 'id',
        //         'functionName' => 'functionName',
        //         'message' => 'message',
        //         'createby' => 'createBy',
        //         'createdate' => 'createDate',
        //         'createtime' => 'createTime'
        //     ]
        // ]);
        $result = $response->body();
        echo "test";
        print_r($result);
        return view('main')->with($result);
        // dd($result);
    }
}
