<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        $this->index_view = 'dashboard.products.index';
        $this->create_view = 'dashboard.products.create';
        $this->show_view = 'dashboard.products.show';
        $this->edit_view = 'dashboard.products.edit';
        $this->edit_variation_view = 'dashboard.products.edit_variation';
        $this->index_route = 'dashboard.product.index';
        $this->create_route = 'product.create';
        $this->success_message = 'Thank You For Contacting Us Your Message Has Received';
        $this->update_success_message = trans('admin.update_created_successfully');
        $this->error_message = "Your Message Couldn't Be Send" ;
        $this->update_error_message = trans('admin.fail_while_update');
        $this->model_instance = Message::class;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();

        return view('/dashboard.messages.index',compact('messages'));
    }

    function create()
    {

        return view('/contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $request->validate([
            'name' => 'required|string|min:3|max:200',
            'email' => 'required|email',
            'number' => 'required|digits:10',
            'message' => 'required',
        ]);
        try {
            $object = $this->model_instance::create($request);
            $log_message = trans('products.create_log') . '#' . $object->id;
            //UserActivity::logActivity($log_message);
            return redirect()->back()->with('success', $this->success_message);
        }
        catch (\Exception $ex) {

            Log::error($ex->getMessage());
            return redirect()->back()->with('error', $this->error_message);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Message $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Message $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Message $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Message $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
