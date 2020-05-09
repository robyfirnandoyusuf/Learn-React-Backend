<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Todo;
use App\Traits\APITrait;

class TodoController extends Controller
{
    use APITrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        header('Access-Control-Allow-Origin: *');
    }

    public function index()
    {
        $all = Todo::all();
        
        $this->header_code  = 200;
        $this->success      = true;
        $this->message      = $all;
        return $this->json();
    }

    public function show($id)
    {
        $todo = Todo::findOrFail($id);

        $this->header_code  = 200;
        $this->success      = true;
        $this->message      = $todo;
        return $this->json();
    }

    public function store(Request $request)
    {
        $title      = $request->title;
        $description= $request->description;
        

        try
        {
            Todo::insert([
                'title'         => $title,
                'description'   => $description,
            ]);
        }
        catch(\Exception $e)
        {
            // return $e->getMessage();
            $this->header_code  = 500;
            $this->success      = false;
            $this->message      = 'Failed !';
        }

        $this->header_code  = 200;
        $this->success      = true;
        $this->message      = 'Success !';
        return $this->json();
    }

    public function update(Request $request,$id)
    {
        $title      = $request->title;
        $description= $request->description;

        try
        {
            Todo::whereId($id)->update([
                'title'         => $title,
                'description'   => $description,
            ]);
        }
        catch(\Exception $e)
        {
            // return $e->getMessage();
            $this->header_code  = 500;
            $this->success      = false;
            $this->message      = 'Failed !';
        }

        $this->header_code  = 200;
        $this->success      = true;
        $this->message      = 'Success !';
        return $this->json();
    }

    public function destroy($id)
    {
        try
        {
            Todo::whereId($id)->delete();
        }
        catch(\Exception $e)
        {
            $this->header_code  = 500;
            $this->success      = false;
            $this->message      = 'Failed !';
        }

        $this->header_code  = 200;
        $this->success      = true;
        $this->message      = 'Success !';
        return $this->json();
    }
}
