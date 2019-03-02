<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{

  const API_URL = 'https://gloapi.gitkraken.com/v1/glo/';
  const API_TOKEN = '?access_token=';

  public function index()
  {

    return view('welcome');

  }

  public function list($request)
  {
    // dd(SELF::API_URL.$request.SELF::API_TOKEN.'?fields=created_date&fields=email&fields=name&fields=username');
    $request = str_replace(",","/", $request);

    // Make request
    $response = $this->get_web_page(SELF::API_URL.$request.SELF::API_TOKEN);

    // Decode json into an array
    $resArr = array();
    $resArr = json_decode($response);

    if ( empty($resArr) )
    {

      return 'Invalid or empty value';

    }

    echo "<pre>"; print_r($resArr); echo "</pre>";

  }

  // Used to call glo api
  public function get_web_page($url) {
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

}
