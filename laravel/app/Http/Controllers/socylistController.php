<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class socylistController extends Controller
{



    public function view(Request $request)
    {

        return view('socylist');
    }

    
    public function prime_factors(Request $number)

    {
$numberInput = $number->input('ahmed');



        if ($numberInput <= 3)

            $factors = array($numberInput);

        else

        {

            while ($numberInput > 1)

            {

                for ($n = 2; $n < $numberInput && $numberInput % $n; $n++);

                $numberInput /= $n;

                $factors[] = $n;

            }

        }

     
      
       echo implode(' x ', $factors);
        
     
    }

    

    

    

    

}