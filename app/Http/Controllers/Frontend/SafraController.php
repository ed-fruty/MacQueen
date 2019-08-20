<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Response;
//use Validator;
use App\SafraCity;
use App\SafraHotel;
use GuzzleHttp\Client;
use Lang;
use View;

class SafraController extends Controller
{

   public function index()
    {
        return View::make('index');
    }
    public function getCitiesFromDB($keyword){
      $cities =SafraCity::where('name','like', '%' .$keyword. '%')->get(['id','name']);

    }
  //cancel booking 
  public function searchHotel(Request $request){
    $data = (array)$request->all();
    $data['destination_type'] ="HOTEL";
    $data['nationality_code'] ="PS";
    $data['hotels'] = $this->getHotels($data['city_id']);
        $json = $data;
        $headers = [
            'content-type' => 'application/x-www-form-urlencoded',
            'cache-control' => 'no-cache',
            'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
            'accept' => 'application/json'
        ];
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://34.246.175.100/api/v1/hotels/search',['headers'=>$headers,'form_params'=>$json]);

        $response= $response->getBody()->getContents();

        $results = json_decode($response);
  }


  //search for hotels 
  public function searchForHotelsWeb(Request $request){
        $data = (array)$request->all();
       // dd($data);
        $data['hotels'] =  [81987];
        // $data['hotels'] = getHotels($data['city']);
         $rooms = new \stdClass();
         $rooms->adults=$data['adults_value'];
         $rooms->children=$data['children_value'];
        $data['rooms'] = [$rooms] ;
        // $data['r']
        $data['destination_type'] ='HOTEL';
        $json = $data;
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'cache-control' => 'no-cache',
            'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
           'accept' => 'application/json'
        ];
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://34.246.175.100/api/v1/hotels/search',['headers'=>$headers,'form_params'=>$json]);

        $response= $response->getBody()->getContents();

        $results = json_decode($response);
       // dd($results); 
     return View::make('safra.hotels')->with(compact('results'));
    //    return $results;
  }

  public function searchHotelByName(Request $request){
    $data = (array)$request->all();
    $hotel_name =$data['name'];
    $hotels = $data['hotels'];
    $promotions_price = $data['price'];
    $stars5 =$data['stars5'];
    $stars4 = $data['stars4'];
    $stars3 = $data['stars3'];
    $stars2 =$data['stars2'];
    $stars1 = $data['stars1'];
    $results= new \stdClass();
    $results->data =[] ;
    foreach ($hotels['data'] as $key=>$hotel) {
      // if($stars4  =="true"){
      //   print_r([1,2,3]);
      //   die();
      // }
     if (!empty($hotel_name) && (strpos($hotel['name'], $hotel_name)===false) 
      ||
      (!empty($promotions_price) && $hotel['promotions_price'] !=$promotions_price)
      ||
      ($stars5 =="true" && $hotel['stars'] !=5)
      ||
      ($stars4 =="true" && $hotel['stars'] !=4)
      ||
      ($stars3  =="true" && $hotel['stars'] !=3)
      ||
      ($stars2 =="true" && $hotel['stars'] !=2)
      ||
      ($stars1  =="true" && $hotel['stars'] !=1)
    ) {
       unset($hotels['data'][$key]);
    }
  }
  $results->data =$hotels['data'];
  return  response()->json($results);
}

   public function getView($data)
    {
        return View::make('safra.hotels')->with(compact('data'));
    }

  //get hotels 
    public function getHotels($city_id){
    $id = $city_id;
    $client = new Client(); //GuzzleHttp\Client
        $request = $client->get('http://34.246.175.100/api/v1/static-data/hotels?city_id='.$id,
        [
            'headers' => [
                'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
            ],
        ]);
        $response = $request->getBody()->getContents();
        
      $hotels = json_decode($response);
      $hotel_ids =[];
      foreach ($hotels->data as $hotel) {
              array_push($hotel_ids, $hotel->id);
      }
      return $hotel_ids;
  }
  public function getHotelDetails($id){

    $url = "http://34.246.175.100/api/v1/hotels/".$id;
    $client = new Client(); //GuzzleHttp\Client
        $request = $client->get($url,
        [
            'headers' => [
                'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
            ],
        ]);
        $response = $request->getBody()->getContents();
        
        $hotel = json_decode($response);

        return View::make('safra.hotel_details')->with(compact('hotel'));

  }

}
