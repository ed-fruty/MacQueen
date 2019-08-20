<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Validator;
use GuzzleHttp\Client;
use Lang;

class SafraController extends Controller
{
	
  //get hotels reservations
	public function getReservations(Request $request){
		$data = (array)$request->all();
		$client = new Client(); 
        $request = $client->get('http://34.246.175.100/api/v1/hotels/reservations',
        [
            'headers' => [
                'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
            ],
        ]);
        $response = $request->getBody()->getContents();
        
        $data = json_decode($response);

        return response()->json($data);
	}

	//book hotels
	public function bookHotel(Request $request)
	{
		   $data = (array)$request->all();
        $json = $data;
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'cache-control' => 'no-cache',
            'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
           'accept' => 'application/json'
        ];
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://34.246.175.100/api/v1/hotels/reserve',['headers'=>$headers,'form_params'=>$json]);

        $response= $response->getBody()->getContents();

        $results = json_decode($response); 

        return response()->json($results);
    }

	//search for hotels 
	public function searchForHotels(Request $request){
		 $data = (array)$request->all();
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

        return response()->json($results);
	}

	//search for  one   hotel
	public function searchForHotel(Request $request)
	{
		$data = (array)$request->all();
		$id = $data['hotel_id'];
		$url = "http://34.246.175.100/api/v1/hotels/".$id;
		$client = new Client(); //GuzzleHttp\Client
        $request = $client->get($url,
        [
            'headers' => [
                'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
            ],
        ]);
        $response = $request->getBody()->getContents();
        
        $data = json_decode($response);

        return response()->json($data);

	}


//search for  one   hotel
  public function searchForHotePost(Request $request)
  {
         $data = (array)$request->all();
         $id = $data['hotel_id'];
        $url = "http://34.246.175.100/api/v1/hotels/".$id;
        $json = $data;
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'cache-control' => 'no-cache',
            'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
           'accept' => 'application/json'
        ];
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST',$url,['headers'=>$headers,'form_params'=>$json]);

        $response= $response->getBody()->getContents();

        $results = json_decode($response); 

        return response()->json($results);

  }

    //book hotels
  public function cancelBooking(Request $request)
  {

       $data = (array)$request->all();
        $json = $data;
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'cache-control' => 'no-cache',
            'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
         //  'accept' => 'application/json'
        ];
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://34.246.175.100/api/v1/hotels/cancel',['headers'=>$headers,'form_params'=>$json]);

        $response= $response->getBody()->getContents();

        $results = json_decode($response); 

        return response()->json($results);

  }
  //get hotels 
    public function getCities(Request $request){
    $data = (array)$request->all();
    $client = new Client(); //GuzzleHttp\Client
        $request = $client->get('http://34.246.175.100/api/v1/static-data/cities',
        [
            'headers' => [
                'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
            ],
        ]);
        $response = $request->getBody()->getContents();
        
        $data = json_decode($response);

        return response()->json($data);
  }

  //get hotels 
    public function getHotels(Request $request){
    $data = (array)$request->all();
    $id = $data['city_id'];
    $client = new Client(); //GuzzleHttp\Client
        $request = $client->get('http://34.246.175.100/api/v1/static-data/hotels?city_id='.$id,
        [
            'headers' => [
                'Authorization' => 'ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP',
            ],
        ]);
        $response = $request->getBody()->getContents();
        
      $data = json_decode($response);

        return response()->json($data);
  }

	private function getContent($url, $method ,$request=null,$static=null,$query_string=null){
       ini_set('memory_limit','2048M');
       $post_data = json_encode($request);
       $curl = curl_init();

       if($static == null){
           $username = "MacQueen";
           $password = "gess94zpSk5AYJXp";
       }else{
           $username = "MacQueenCosmos";
           $password = "lzzF23V4cVrN5RoY";
       }


        $params = '';
        if($request != null){
        if(strtolower($method) == 'get'){
            foreach($request as $key=>$value){
                    $params .= $key.'='.$value.'&';
            }
            $params = trim($params, '&');
        }

        //dd($params);

       $arr_curl = array(
        CURLOPT_URL => $url."?".$params,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_HTTPHEADER => array(
            "authorization: ApiAccessToken QxG15j1mis46b3IaLUkWexOmoOhQOAjP",
            //"cache-control: no-cache",
            "content-type: multipart/form-data",
           // 'Content-Length: ' . strlen($post_data)
          )
        );
   }


       if(strtolower($method) == 'post'){
           if($query_string != null){
              print($params."&".$query_string);
               $arr_curl[CURLOPT_POSTFIELDS] =  $params."&".$query_string;
           }else{
               $arr_curl[CURLOPT_POSTFIELDS] = $request;
           }

           //dd($arr_curl);

       }

       curl_setopt_array($curl,$arr_curl);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
            return $response;
        }
     }
}
