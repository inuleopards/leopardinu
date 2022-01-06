<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // fetching api record from get request
        $response = Http::get('https://api.pancakeswap.info/api/v2/pairs');
        return $response;
        $response = $response['data']['0xbA2aE424d960c26247Dd6c32edC70B295c744C43_0xbb4CdB9CBd36B01bD1cBaEBF2De08d9173bc095c'];
        return view('welcome', [
            'liquidity' => $response['liquidity'],
            'liquidity_BNB' => $response['liquidity_BNB'],
        ]);
    }
}
