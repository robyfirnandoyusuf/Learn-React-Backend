<?php

namespace App\Traits;

trait APITrait
{

    public $success = false;
    public $message = null;
    public $data = null;
    public $code = \Illuminate\Http\Response::HTTP_OK;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function json() : \Illuminate\Http\JsonResponse
    {
        $result = array();
        $result['success']  = $this->success;
        $result['header_code']= $this->header_code;
        $result['message']  = $this->message;
        if (is_array($this->data) || is_object($this->data))
            $result['data'] = $this->data;
        $result['elapsed'] = $this->server_elapsed_time();
        
        return response()->json($result, $this->code, [], JSON_PRETTY_PRINT);
    }

    public static function server_elapsed_time()
    {
        $elapsed = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];

        return floor($elapsed * 1000);
    }

}