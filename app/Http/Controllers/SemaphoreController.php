<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SemaphoreController extends Controller
{
    public function index(Request $request)
    {

        $semaphore = [];

        array_push($semaphore, [
            's1' => [
                 'r' => 1,
                'a' => 0,
                'v' => 0
            ],
            's2' => [
                'r' => 0,
                'a' => 0,
                'v' => 1
            ]
            ]);
            //Secuencia 2 
            array_push($semaphore, [
                's1' => [
                    'r' => 1,
                    'a' => 0,
                    'v' => 0
                ],
                's2' => [
                    'r' => 0,
                    'a' => 0,
                    'v' => 1
            ]
            ]);
            //Secuencia 3
            array_push($semaphore, [
                's1' => [
                    'r' => 1,
                    'a' => 0,
                    'v' => 0
                ],
                's2' => [
                    'r' => 1,
                    'a' => 0,
                    'v' => 0
            ]
            ]);
            //Secuencia 4
            array_push($semaphore, [
                's1' => [
                    'r' => 1,
                    'a' => 1,
                    'v' => 0
                ],
                's2' => [
                    'r' => 1,
                    'a' => 0,
                    'v' => 0
            ]
            ]);
            //Secuencia 5
            array_push($semaphore, [
                's1' => [
                    'r' => 0,
                    'a' => 0,
                    'v' => 1
                ],
                's2' => [
                    'r' => 1,
                    'a' => 0,
                    'v' => 0
            ]
            ]);
            //Secuencia 6
            array_push($semaphore, [
                's1' => [
                    'r' => 0,
                    'a' => 1,
                    'v' => 0
                ],
                's2' => [
                    'r' => 1,
                    'a' => 0,
                    'v' => 0
            ]
            ]);

        
        //$semaphore = json_encode($semaphore);
        return json_encode($semaphore);
    }

    public function data(Request $request)
    {
    }
}
