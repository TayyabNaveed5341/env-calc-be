<?php

use App\Repositories\ApplianceRepository;
use App\Http\Resources\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('appliances', function(){
    return ApplianceRepository::all();
});

Route::post('consumption', function(Request $r){
    
    return [
        "upgrades"=>[
            [
                "name"=>"upg 1",
                "estimated_saving"=>"23",
                "link"=>""
            ], [

                "name"=>"upg 2",
                "estimated_saving"=>"34",
                "link"=>""
            ]
        ],
        "investment"=>5678, // currency
        "roi"=>9, // years
        "saving"=>90, // % on bill
        "bill_after"=>123 // currency
    ];
    //new Recommendation();
});
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
