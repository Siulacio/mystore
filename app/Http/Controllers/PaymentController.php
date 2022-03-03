<?php

namespace App\Http\Controllers;

use Dnetix\Redirection\PlacetoPay;
use Illuminate\Http\Request;
use App\Models\Order;

class PaymentController extends Controller
{

    public function createPayment(Request $request)
    {
        try {

            $order = Order::with('products')->find($request->order);

            $placetopay = new PlacetoPay([
                'login'=>config('placetopay.login'),
                'tranKey'=>config('placetopay.trankey'),
                'baseUrl'=>config('placetopay.url'),
            ]);

            $reference = 'ORDER_NUMBER_'.$order->id;
            $request = [
                'payment'=>[
                    'reference'=>$order->products->name,
                    'description'=>'testing payment - '.$order->products->name,
                    'amount'=>[
                        'currency'=>'COP',
                        'total'=>$order->products->price
                    ],
                ],
                'expiration' => date('c', strtotime('+2 days')),
                'returnUrl' => 'http://localhost:8000/ruta/ejemplo/'.$reference,
                'ipAddress' => '127.0.0.1',
                'userAgent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36'
            ];

            $response = $placetopay->request($request);
        }catch (\Exception $e){
            dd($e);
        }



        /*dd($response);
        return $response;*/

        if ($response->isSuccessful()) {
            dd('todo ok');
            // STORE THE $response->requestId() and $response->processUrl() on your DB associated with the payment order
            // Redirect the client to the processUrl or display it on the JS extension
            $response->processUrl();
        } else {
//            dd('hay error');
            // There was some error so check the message and log it
            $response->status()->message();
        }

    }

    public function getRoute($reference)
    {
        return $reference;
    }
    /*
    public function createSession($request) : ResourceResponse
    {
        $request = $this->makeRequest();
        $response = Http::post(config('placetopay.uri'), $request);
        return $response->json();
    }

    public function makeRequest() : array
    {
        return [$this->makeAuth(), $this->makePayment()];
    }

    public function makeAuth() : array
    {
        $nonce = Str::random();
        $seed = Carbon::now(new DateTimeZone('America/Bogota'))->toIso8601String();

        return [
            'auth' => [
                'login' => config('placetopay.login'),
                'tranKey' => base64_encode(sha1($nonce . $seed . config('placetopay.trankey'), true )),
                'nonce'=>base64_encode($nonce),
                'seed'=>$seed
            ]
        ];
    }

    public function makePayment() : array
    {
        return [
            'payment'=>[
                'reference'=>'test payment',
                'description'=>'description',
                'amount'=>[
                    'currency'=>'COP',
                    'total'=>5000,
                ],
                'allowPartial'=>false,
            ]
        ];
    }
    */

}
