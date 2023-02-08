<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\ProductMedia;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function __construct()
    {

        $this->index_view = 'dashboard.categories.index';
        $this->create_view = 'dashboard.categories.create';
        $this->show_view = 'dashboard.categories.show';
        $this->edit_view = 'dashboard.categories.edit';
        $this->index_route = 'dashboard.categories.index';
        $this->create_route = 'categories.create';
        $this->success_message = 'Category Has Been Added Successfully';
        $this->update_success_message = trans('admin.update_created_successfully');
        $this->error_message = "Category Couldn't Been Added" ;
        $this->update_error_message = trans('admin.fail_while_update');
        $this->model_instance = Category::class;
    }
    private function StoreValidationRules()
    {
        return [
            'name' => 'required|string|min:3|max:200',
            'description' => 'nullable|string|min:3|max:200',
            'image' => 'nullable|string',
            'image.*' => 'image|mimes:jpg,jpeg,png',
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->index_view);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->create_view);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // has_access('product_create');
        $validated_data = $request->validate($this->StoreValidationRules());
        try {
            $object = $this->model_instance::create($validated_data);

            if ($request->has('images')) {
                $image=$validated_data["image"];
                    $img_file_path = Storage::disk('public_images')->put('categories', $image);
                    $image_url = getMediaUrl($img_file_path);
                  $object->image_name=$image_url;
                  $object->image_url=$img_file_path;
                  $object->save;
            }

            $log_message = trans('categories.create_log') . '#' . $object->id;
            UserActivity::logActivity($log_message);

            return redirect()->route($this->create_route, $object->id)->with('success', $this->success_message);
        } catch (\Exception $ex) {

            Log::error($ex->getMessage());
            return redirect()->route($this->create_route)->with('error', $this->error_message);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
