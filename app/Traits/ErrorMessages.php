<?php

namespace App\Traits;

trait ErrorMessages {

    protected function ErrorMessage( $message = null, $code=404)
    {
      
        return response()->json([
            'message' => $message
        ], $code);
       
    }

    
}
