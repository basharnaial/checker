<?php

use Illuminate\Support\Facades\Route;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// routes/web.php

Route::get('/', function() {
 
    $websites = Service::all();

    foreach($websites as $web){
    try {
    $crawler = Goutte::request('GET', $web['url']);
    $check = $crawler->filter($web['fillter'])->first();
    // dump($check->attr('src'));
    dump($web['name'] . ' ' . $web['url'] . ' الموقع/النظام يعمل بشكل جيد');

     if($web['img'] != $check->attr('src')){
     
        $mailData = [
            "name" => "Website Down | موقع متعطل" . "\r\n"  . $web['name'],
            "dob" => "عزيزي مسؤول تقنية نظم المعلومات , نفيدك أن الموقع متعطل يرجى إتخاذ إجراء بذلك " . "\r\n" ."رابط الموقع:" . $web['url']
        ];

        $update = \DB::table('services')->where('url', $web['url'])->update( [ 'status' => 0]); 



        // $doaction = Service::where('url',$web['url'] );
        // $doaction->status = 2;
        // $doaction->save();

        Mail::to("bashar@etmaam.com.sa")->send(new TestEmail($mailData));
        // Mail::to("mohammed.a@etmaam.com.sa")->send(new TestEmail($mailData));
        dump("تم إرسال تقرير بالمشكلة!");
        
    }else{
        $update = \DB::table('services')->where('url', $web['url'])->update( [ 'status' => 1]); 
  
    }
    }   

    

// dump($web['url']);
catch (\Throwable $e) {

$mailData = [
    "name" => "Website Down | موقع متعطل" . "\r\n"  . $web['name'],
    "dob" => "عزيزي مسؤول تقنية نظم المعلومات , نفيدك أن الموقع متعطل يرجى إتخاذ إجراء بذلك " . "\r\n" ."رابط الموقع:" . $web['url']
];
Mail::to("bashar@etmaam.com.sa")->send(new TestEmail($mailData));
Mail::to("mohammed.a@etmaam.com.sa")->send(new TestEmail($mailData));
dump("تم إرسال تقرير بالمشكلة!");
$update = \DB::table('services')->where('url', $web['url'])->update( [ 'status' => 0]); 


        }
    }
});



Route::get('/status',[ServiceController::class, 'index'])->name('services');



