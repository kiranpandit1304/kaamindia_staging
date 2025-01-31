<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class DatabaseException extends Exception
{
    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        $clientIP = \Request::ip();
        $data = [
            'ip' => $clientIP,
            'file' => $this->getFile(),
            'line' => $this->getLine(),
            'message' => $this->getMessage(),
        ];
        Log::error($data);

        return redirect()->back()->with('error', 'Opps Something wrong!');
    }
}
