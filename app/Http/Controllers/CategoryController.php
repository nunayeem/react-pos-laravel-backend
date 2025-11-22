<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoryResource::collection(Category::with('user:id,name')->paginate(10));
        // return Category::with('user:id,name')->limit(10)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->except('photo'); // All inputs except photo
        $data['created_by'] = Auth::id();

        // Generate unique slug
        $slug = Str::slug($request->slug);
        $originalSlug = $slug;
        $count = 1;
        while(DB::table('categories')->where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
        $data['slug'] = $slug;

        // if($request->photo){
        //     $image = $request->photo;
        //     $data['photo'] = $image;
            
        // }

        // Handle Base64 photo
        // Handle Base64 photo
        // if($request->photo){
        //     $image = $request->photo;

        //     // Check format
        //     if(preg_match('/^data:image\/(\w+);base64,/', $image, $type)){
        //         $image = substr($image, strpos($image, ',') + 1); // Remove "data:image/png;base64,"
        //         $type = strtolower($type[1]); // jpg, png, gif
        //         $image = base64_decode($image); // decode Base64

        //         // Generate unique filename
        //         $filename = time() . '.' . $type;

        //         // Save image in public/uploads/categories/
        //         $path = public_path('uploads/categories/' . $filename);
        //         file_put_contents($path, $image);

        //         $data['photo'] = 'uploads/categories/' . $filename;
        //     }
        // }

        if ($request->photo) {

            // extract base64
            $image_64 = $request->photo;

            // match type (jpg, png, etc)
            preg_match('/^data:image\/(\w+);base64,/', $image_64, $type);

            $image = substr($image_64, strpos($image_64, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif
            
            $image = base64_decode($image);

            // create filename
            $filename = time() . '.' . $type;

            // storage/app/public/categories
            $path = storage_path('app/public/categories');

            // create directory if not exists
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // save file
            file_put_contents($path . '/' . $filename, $image);

            // save path to database
            $data['photo'] = 'storage/categories/' . $filename;
        }
    


        $category = Category::create($data);

        return response()->json([
            'message' => 'Category Added Successfully',
            'data' => $category
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
