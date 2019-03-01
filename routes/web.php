<?php

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

Route::get('boards', function () {

$api = 'https://gloapi.gitkraken.com/v1/glo/';
$request = 'boards';
$token = '?access_token='.env('API_TOKEN');

function get_web_page($url) {
  $options = array(
      CURLOPT_RETURNTRANSFER => true,   // return web page
      CURLOPT_HEADER         => false,  // don't return headers
      CURLOPT_FOLLOWLOCATION => true,   // follow redirects
      CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
      CURLOPT_ENCODING       => "",     // handle compressed
      CURLOPT_USERAGENT      => "test", // name of client
      CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
      CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
      CURLOPT_TIMEOUT        => 120,    // time-out on response
  );

  $ch = curl_init($url);
  curl_setopt_array($ch, $options);

  $content  = curl_exec($ch);

  curl_close($ch);

  return $content;
}

$response = get_web_page($api.$request.$token);
$resArr = array();
$resArr = json_decode($response);
echo "<pre>"; print_r($resArr); echo "</pre>";

});
