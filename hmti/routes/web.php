<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@user')->name('User Profile');
Route::get('/user/edit/{user}', 'HomeController@edit')->name('User Profile');
Route::patch('/user/{user}', 'HomeController@update');

Route::get('/movie', "FilmsController@index");
Route::post('movie', "FilmsController@store");
Route::get('/movie/edit/{film}', 'FilmsController@edit');
Route::patch('/movie/{film}', 'FilmsController@update');
Route::get('/movie/read/{film}', "FilmsController@show");
Route::post('/movie/read/{film}', "CommentsController@store");
Route::delete('movie/{film}', 'FilmsController@destroy');



// Daftar Pustaka

// bantuan desain (icon, library, framework, dll)
// https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
// https://unpkg.com/sweetalert/dist/sweetalert.min.js
// https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css
// https://fonts.googleapis.com/css?family=Nunito
// https://getbootstrap.com/
// https://laravel.com/docs/7.x

// artikel 
// https://www.premiumbeat.com/blog/7-innovations-changing-film-industry/
// https://discover.therookies.co/2020/04/05/what-is-cgi-computer-generated-imagery-how-does-it-work/
// https://www.studiobinder.com/blog/depth-of-field/
// https://www.forbes.com/sites/jamos/2018/08/01/will-moviecoins-blockchain-technology-revolutionize-hollywood-film-production/#899c9e81258f
// https://www.studiobinder.com/blog/what-is-vfx/
// https://medium.com/@lumrachele/a-brief-history-of-motion-tracking-technology-and-how-it-is-used-today-44923087ef4c
// https://www.aclu.org/blog/privacy-technology/surveillance-technologies/hollywood-offers-ominous-visions-facial
// https://www.gizmodo.co.uk/2019/12/a-history-of-digital-resurrection-in-the-cinema/
// https://www.cbc.ca/news/entertainment/digital-de-aging-1.5397657
// https://edition.cnn.com/2020/08/18/entertainment/skin-review/index.html
// https://info.percepto.co/percepto-contact-us?utm_term=%2Bautonomous%20%2Bdrone&utm_campaign=Web+Clicks+-+Search+02/2019&utm_source=adwords&utm_medium=ppc&hsa_acc=3232504217&hsa_cam=1719049648&hsa_grp=66197511326&hsa_ad=431392023092&hsa_src=g&hsa_tgt=kwd-301575261036&hsa_kw=%2Bautonomous%20%2Bdrone&hsa_mt=b&hsa_net=adwords&hsa_ver=3&gclid=Cj0KCQjws536BRDTARIsANeUZ5_uHVwFrcokvuHl1M07RRUVdGqDiB1G1YJ7bl2tG5jkk296wqjGIQYaAn51EALw_wcB
// https://theconversation.com/hollywood-360-how-virtual-reality-is-poised-to-take-on-the-traditional-movie-industry-91426

// gambar 
// https://www.google.com/search?q=cgi+technology&safe=strict&sxsrf=ALeKk02sQg_Tq1Kcu6LIwdfiyXduwBtSiw:1598467987928&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjhquukxbnrAhXOfn0KHVrHBm0Q_AUoAXoECBAQAw&biw=1517&bih=772#imgrc=BsymwJ7ODakyaM
// https://www.google.com/search?q=poster+film+film+hollywood&safe=strict&sxsrf=ALeKk03_G6FirpyveSmTOZ3IGs_c5TnRNg:1598468338345&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjckvfLxrnrAhW573MBHV5zC78Q_AUoAXoECAwQAw&biw=1517&bih=717#imgrc=1efikplLvrwRgM&imgdii=AnvZtpm4sMDztM
// https://www.google.com/url?sa=i&url=http%3A%2F%2Fchennaiplus.in%2Findia-gets-their-first-ever-international-standard-motion-capture-lab%2F&psig=AOvVaw3284Fglelx8jNk4k_RRoDt&ust=1598554674792000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMiR-PDGuesCFQAAAAAdAAAAABAD
// https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.analyticsinsight.net%2Fbest-facial-recognition-software%2F&psig=AOvVaw1qsLQdpN4FkuJfg00oFUEz&ust=1598555234119000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPi5mb7IuesCFQAAAAAdAAAAABAD

// Agar bisa gunakan fitur create, update, delete gunakan username dibawah ini 
// Username admin dwibagus154@gmail.com
// Password 12345678
