<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\SafraHotel;
use Response;
use App\SafraCity;
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
      $cities =SafraCity::where('name','like', '%'.$keyword.'%')->get(['id','name']);
     
     $output = '<seclect  style="position:relative">';
      foreach($cities as $row)
      {
       $output .= '
       <option class="result" value='.$row->id .'>'.$row->name.'</option>
       ';
      }
      $output .= '</select>';
      return $output;
  
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
        $data['checkin_date']=date("Y-m-d", strtotime($data['checkin_date']));
        $data['checkout_date']=date("Y-m-d", strtotime($data['checkout_date']));
        //$data['hotels'] = $this->getHotels($data['city_id']);
        $data['hotels'] =[81987];
        $rooms_num =$data['rooms'];
        if($rooms_num =='more')
         {
                $rooms_num =count($data['adults_value'])-1;
                unset($data['adults_value'][0]);
                unset($data['children_value'][0]);
                  $data['rooms']=[];
                  for($i=1;$i<=$rooms_num;$i++)
                   {
                     $rooms = new \stdClass();
                     $rooms->adults=$data['adults_value'][$i];
                     $rooms->children=$data['children_value'][$i];
                    $children_ages=[];
                     for ($j=1;$j<=$data['children_value'][$i];$j++) {
                       array_push($children_ages, $data['child_age_'.$j]); 
                     }
                      $rooms->children_ages =$children_ages;
                     array_push($data['rooms'], $rooms); 
                   }
        }
        else
        {
              $data['rooms']=[];
               for($i=0;$i<$rooms_num;$i++)
               {
                 $rooms = new \stdClass();
                 $rooms->adults=$data['adults_value'][0];
                 $rooms->children=$data['children_value'][0];
                 array_push($data['rooms'], $rooms); 
               } 
         }
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
        //dd($results); 
        return View::make('hotel-result')->with(compact('results'));
  }

  public function searchHotelByName(Request $request){
    $data = (array)$request->all();
    $hotels = $data['hotels'];
    $min_price =$data['min_price'];
    $max_price =$data['max_price'];
    $rating = $data['rating'];
    $results= new \stdClass();
    $results->data =[] ;
    foreach ($hotels['data'] as $key=>$hotel) {
      if(($hotel['stars'] !=$rating)
      
     )
     {
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
      $hotels =SafraHotel::where('city_id',$city_id)->get(['id']);
      $hotel_ids =[];
      foreach ($hotels as $hotel) {
              array_push($hotel_ids, $hotel['id']);
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
