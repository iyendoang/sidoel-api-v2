<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SchoolResource extends JsonResource
{
    //define properti
    public $status;
    public $message;
    public $resource;
    
    /**
     * __construct
     *
     * @param  mixed $status
     * @param  mixed $message
     * @param  mixed $resource
     * @return void
     */
    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }
  /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = $this->resource;
        if ($this->expiration_time) {
            $data['expiration_time'] = $this->expiration_time;
        }
    
        return [
            'success'   => $this->status,
            'message'   => $this->message,
            'data'      => $data
        ];
    }
    
}
