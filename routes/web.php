<?php

use Illuminate\Support\Facades\Route;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

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
 
    $websites[] = array(
        "url"=>"https://ticket.etmaam.com.sa/index.php/signin",
        "name"=> "Tickets System",
        "fillter"=>"img.p20",
        "img" => "https://ticket.etmaam.com.sa/files/system/_file61d0c2aa2c830-site-logo.png"

    );
    $websites[] = array(
        "url"=>"https://etmaam.com.sa/cms/",
        "name"=> "Offical Website",
        "fillter"=>"img.officallogo",
        "img" => "https://etmaam.com.sa/cms/assets/front/img/14241353-min.png"

    );
    $websites[] = array(
        "url"=>"https://portal.etmaam.com.sa/admin/authentication",
        "name"=> "Portal Packages Admin",
        "fillter"=>"img.img-responsive",
        "img" => "https://portal.etmaam.com.sa/uploads/company/3e09f6852d10b45aa117d09872df2936.png"


    );
    $websites[] = array(
        "url"=>"https://packages.etmaam.com.sa/",
        "name"=> "Offical Packages Website",
        "fillter"=>"img.header_logo",
        "img" => "https://packages.etmaam.com.sa/wp-content/uploads/2020/06/logowsite-2.png"


    );
    $websites[] = array(
        "url"=>"https://wps.etmaam.com.sa/",
        "name"=> "Landing Page WPS",
        "fillter"=>"img.fixed-logdo",
        "img" => "https://wps.etmaam.com.sa/wp-content/uploads/2021/07/logowsite-2.png"


    );

    foreach($websites as $web){
    try {
    $crawler = Goutte::request('GET', $web['url']);
    $check = $crawler->filter($web['fillter'])->first();
    dump($check->attr('src'));
     if($web['img'] != $check->attr('src')){
     
        $mailData = [
            "name" => "Website Down | موقع متعطل" . "\r\n"  . $web['name'],
            "dob" => "عزيزي مسؤول تقنية نظم المعلومات , نفيدك أن الموقع متعطل يرجى إتخاذ إجراء بذلك " . "\r\n" ."رابط الموقع:" . $web['url']
        ];
        
        Mail::to("bashar@etmaam.com.sa")->send(new TestEmail($mailData));
        // Mail::to("mohammed.a@etmaam.com.sa")->send(new TestEmail($mailData));
        dump("تم إرسال تقرير بالمشكلة!");
        
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
 

        }
    }
});



