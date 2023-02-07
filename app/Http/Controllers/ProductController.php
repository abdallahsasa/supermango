<?php

namespace App\Http\Controllers;

use App\models\Attribute;
use App\models\Category;
use App\Models\product;
use App\models\ProductMedia;
use App\models\ProductTranslation;
use App\models\ProductVariationAttribute;
use App\models\Tag;
use App\models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    private $index_view;
    private $create_view;
    private $edit_view;
    private $edit_variation_view;
    private $show_view;
    private $index_route;
    private $model_instance;
    private $success_message;
    private $error_message;
    private $update_success_message;
    private $update_error_message;
    private $model_instance_translation;


    public function __construct()
    {

        $this->index_view = 'dashboard.products.index';
        $this->create_view = 'dashboard.products.create';
        $this->show_view = 'dashboard.products.show';
        $this->edit_view = 'dashboard.products.edit';
        $this->edit_variation_view = 'dashboard.products.edit_variation';
        $this->index_route = 'dashboard.products.index';
        $this->success_message = trans('admin.created_successfully');
        $this->update_success_message = trans('admin.update_created_successfully');
        $this->error_message = trans('admin.fail_while_create');
        $this->update_error_message = trans('admin.fail_while_update');
        $this->model_instance = Product::class;
    }

    private function StoreValidationRules()
    {
        return [
            'name' => 'required|string|min:3|max:200',
            'sku' => 'nullable|string|min:3|max:200',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'currency' => 'required|in:KD,USD,SYP',
            'stock_status' => 'required|in:in,out',
            'status' => 'required|in:active,inactive',
            'unit_price' => 'required|numeric',
            'unit_discount_price' => 'nullable|numeric',
            'wholesale_price' => 'nullable|numeric',
            'wholesale_discount_price' => 'nullable|numeric',
            'stock_quantity' => 'nullable|numeric',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpg,jpeg,png',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id'
        ];
    }

    private function UpdateValidationRules()
    {
        return [
            'name' => 'sometimes|string|min:3|max:200',
            'english_name' => 'sometimes|string|min:3|max:200',
            'sku' => 'nullable|string|min:3|max:200',
            'description' => 'nullable|string',
            'english_description' => 'nullable|string',
            'made_in' => 'nullable|string',
            'currency' => 'sometimes|in:IQD,USD,SYP',
            'stock_status' => 'sometimes|in:in,out',
            'status' => 'sometimes|in:active,inactive',
            'unit_price' => 'sometimes|numeric',
            'unit_discount_price' => 'nullable|numeric',
            'wholesale_price' => 'nullable|numeric',
            'wholesale_discount_price' => 'nullable|numeric',
            'stock_quantity' => 'nullable|numeric',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpg,jpeg,png',
            'variation_images' => 'nullable|array',
            'variation_images.*' => 'image|mimes:jpg,jpeg,png'
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $filter = request()->has('filter') ? request()->filter : 'all';


        if($filter == "all")
            $products = $this->model_instance::all();
        else
            $products = Category::findOrFail($filter)->products()->latest()->get();


        $categories = Category::all();


        return view($this->index_view, compact(['products','categories','filter']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //has_access('product_create');

        $categories = Category::all();
        $attributes = Attribute::all();
        return view($this->create_view,compact(['categories','attributes']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // has_access('product_create');
        $validated_data = $request->validate($this->StoreValidationRules());

        try {
            $object = $this->model_instance::create(Arr::except($validated_data,['categories','english_name','english_description']));

            if($request->has('categories'))
            {
                $object->categories()->sync($request->categories);
            }
            if($request->has('tags'))
            {
                $tags = $request->tags;

                foreach ($tags as $tag)
                {
                    Tag::create([
                        'product_id' => $object->id,
                        'tag_value' => $tag
                    ]);
                }
            }

            if($request->has('product_attributes'))
            {
                foreach ($request->product_attributes as $id => $values)
                {
                    $attribute = Attribute::findOrFail($id);
                    $object->attributes()->attach($attribute->id,['values' => json_encode($values,JSON_UNESCAPED_UNICODE )]);
                }
            }



            if($request->has('images'))
            {

                foreach ($validated_data["images"] as $image)
                {
                    $img_file_path = Storage::disk('public_images')->put('products', $image);
                    $image_url = getMediaUrl($img_file_path);
                    ProductMedia::create([
                        'product_id' => $object->id,
                        'media_type' => 'image',
                        'media_url' => $image_url
                    ]);


                }
            }

            if(!$request->has('stock_management'))
            {
                $object->stockUnlimited()->update();
            }


            $log_message = trans('products.create_log') . '#' . $object->id;
            UserActivity::logActivity($log_message);



            return redirect()->route($this->edit_view,$object->id)->with('success', $this->success_message);
        } catch (\Exception $ex) {
            //  dd($this->error_message);
            Log::error($ex->getMessage());
            return redirect()->route($this->index_route)->with('error', $this->error_message);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product = $this->model_instance::findOrFail($id);
        return view($this->show_view, compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //has_access('product_update');

        $product = $this->model_instance::findOrFail($id);
        $attributes = Attribute::all();
        $categories = Category::getAssignableCategories();


        return view($this->edit_view, compact(['product','categories','attributes']));
    }


    public function editVariation($id)
    {



       // has_access('product_update');

        $product = $this->model_instance::findOrFail($id);
        $attributes = Attribute::all();
        $variation_attributes = $product->parent()->variation_attributes($product->id)->pluck('value')->toArray();

        $categories = Category::getAssignableCategories();


        return view($this->edit_variation_view, compact(['product','categories','attributes']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //has_access('product_update');

        $validated_data = $request->validate($this->UpdateValidationRules());

        try {
            $object = $this->model_instance::find($id);
            $updated_instance = $object->update(Arr::except($validated_data,['english_description','english_name']));

            $name_trans=[
                'lang'=>'en',
                'translatable_attribute'=>'name',
                'value'=>$request->english_name,
            ];
            $object->updateTranslation($name_trans);

            $desc_trans=[
                'lang'=>'en',
                'translatable_attribute'=>'description',
                'value'=>$request->english_description,
            ];
            $object->updateTranslation($desc_trans);





            if($request->has('variations') && !empty($request->variations))
            {
                foreach ($request->variations as $variation)
                {

                    $additional_data = [
                        'parent_id' => $object->id,
                        'is_variant' => 'yes',
                        'name' => $variation["variation_name"]
                    ];


                    $variant_data = array_merge($variation,$additional_data);


                    $new_variation_object = $object->replicate();
                    $new_variation_object->push();

                    $new_variation_object->update($variant_data);




                    if(isset($variation["attributes"]) && !empty($variation["attributes"]))
                    {
                        foreach ($variation["attributes"] as $key => $attribute)
                        {

                            ProductVariationAttribute::create([
                                'product_id' => $new_variation_object->id,
                                'attribute_id' => $key,
                                'parent_id' => $object->id,
                                'value' => isset($attribute) ? $attribute : 'any'
                            ]);
                        }

                    }



                    if(isset($validated_data["variation_images"]) && !empty($validated_data["variation_images"]))
                    {

                        foreach ($validated_data["variation_images"] as $image)
                        {
                            $img_file_path = Storage::disk('public_images')->put('products', $image);
                            $image_url = getMediaUrl($img_file_path);
                            ProductMedia::create([
                                'product_id' => $new_variation_object->id,
                                'media_type' => 'image',
                                'media_url' => $image_url
                            ]);


                        }
                    }
                }
            }

            if($request->has('images'))
            {


                foreach ($validated_data["images"] as $image)
                {
                    $img_file_path = Storage::disk('public_images')->put('products', $image);
                    $image_url = getMediaUrl($img_file_path);
                    ProductMedia::create([
                        'product_id' => $object->id,
                        'media_type' => 'image',
                        'media_url' => $image_url,
                        'media_path' => $img_file_path,
                    ]);


                }
            }

            if($request->has('removed_images_ids'))
            {
                $images = ProductMedia::whereIn('id',$request->removed_images_ids)->get();
                foreach ($images as $image)
                {
                    Storage::disk('public_images')->delete($image->media_path);
                    $image->delete();
                }
            }


            if($request->has('tags'))
            {
                $tags = $request->tags;

                $product_tags_ids = [];

                foreach ($tags as $tag)
                {
                    $tag_object = Tag::firstOrCreate([
                        'product_id' => $object->id,
                        'tag_value' => $tag
                    ]);



                    array_push($product_tags_ids,$tag_object->id);
                }

                Tag::whereNotIn('id',$product_tags_ids)->where('product_id',$object->id)->delete();


            }


            if($request->has('categories'))
            {

                $object->categories()->sync($request->categories);
            }

            if($request->has('product_attributes'))
            {
                $object->attributes()->detach();
                foreach ($request->product_attributes as $id => $values)
                {
                    $attribute = Attribute::findOrFail($id);
                    $object->attributes()->attach($attribute->id,['values' => json_encode($values,JSON_UNESCAPED_UNICODE )]);
                }
            }

            if($request->has('variant_attributes'))
            {
                foreach ($request->variant_attributes as $key => $value)
                {
                    ProductVariationAttribute::where(['parent_id' => $object->parent()->id,'attribute_id' => $key,'product_id' => $object->id])->update(['value' => $value]);
                    $this->edit_view = 'admin.products.variation.edit';
                }
            }



            if(!$request->has('stock_management'))
            {
                $object->stockUnlimited()->update();
            }






            if ($updated_instance) {

                $log_message = trans('products.update_log') . '#' . $object->id;
                UserActivity::logActivity($log_message);
                return redirect()->route($this->edit_view,$object->id)->with('success', $this->update_success_message);
            } else {
                return redirect()->route($this->index_route)->with('error', $this->update_error_message);
            }
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            Log::error($ex->getMessage());
            return redirect()->route($this->index_route)->with('error', $this->error_message);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

       // has_access('product_remove');

        if ($request->ajax()) {
            $deleted = $this->model_instance::findOrFail($id)->delete();
            if ($deleted) {
                $log_message = trans('products.delete_log') . '#' . $id;
                UserActivity::logActivity($log_message);
                return response()->json(['status' => 'success', 'message' => 'deleted_successfully']);
            } else {
                return response()->json(['status' => 'fail', 'message' => 'fail_while_delete']);
            }

        }

        return redirect()->route($this->index_route);
    }

    public function search(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return response()->json([]);
        }

        $products = Product::where('name', 'LIKE', '%' . $term . '%')->where(['status' => 'active','stock_status' => 'in','is_variant'=>'no'])->limit(5)->get(['id', 'name']);
        $map = $products->map(function($items){
            $data["id"] = $items->id;
            $data["text"] = $items->name;
            return $data;
        });

        return response()->json($map->toArray());

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

}
