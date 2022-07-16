<?php

namespace App\Http\Controllers\Api;
Use Alert;
use Illuminate\Http\Request;
use App\Models\T_restaurant;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class T_restaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t_restaurants=T_restaurant::all();
        if(count($t_restaurants) > 0) {
            return response()->json(["status" => "200", "success" => true, "count" => count($t_restaurants), "data" => $t_restaurants]);
        }
        else {
            return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! no record found"]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $validation = Validator::make($request->all(),
            [
                'pro_name'=>'required',
                'description'=>'required', 
                'price'=>'required',
                'image'=>'mimes:jpeg,jpg,png,gif|max:10000'
            ]);
    
            if ($validation->fails()){
                $response=array('status'=>'error','errors'=>$validation->errors()->toArray()); 
                return response()->json($response);
            }
        //nếu dùng $this->validate() thì lấy về lỗi: $errors = $validate->errors();
    
            //kiểm tra file tồn tại
            $name='';
            
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $name=time().'_'.$file->getClientOriginalName();
                $destinationPath=public_path('image'); //project\public\car, //public_path(): trả về đường dẫn tới thư mục public
                $file->move($destinationPath, $name); //lưu hình ảnh vào thư mục public/images/cars
            } 
         
            $rest = new T_restaurant();
            $rest->image=$name;
            $rest->pro_name=$request->pro_name;
            $rest->description=$request->description;
            $rest->price=$request->price;
            $rest->categories_id = $request->name;
            $rest->save();
            if( $rest) {            
                    return response()->json(["status" => "200", "success" => true, "message" => "car record created successfully", "data" =>  $rest]);
                }    
            else {
                    return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! failed to create."]);
            }

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
        $rest = T_restaurant::find($id);
        if(count($t_restaurants) > 0) {
            return response()->json(["status" => "200", "success" => true, "count" => count($t_restaurants), "data" => $t_restaurants]);
        }
        else {
            return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! no record found"]);
        }
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
    public function search(Request $request)
    {
        // $cars = Car::join('car_mfs', 'car_mfs.id', 'cars.mf_id')
        //     ->where('name', 'like', '%' . $request->search . '%')
        //     ->select('car_mfs.mf_name as name_mfs', 'cars.*')
        //     ->get();
        $t_restaurants= T_restaurant::where('pro_name','like','%' .$request->search. '%')->orWhere('price',$request->search)
        ->get();
                if($t_restaurants) {            
                    return response()->json(["status" => "200", "success" => true, "message" => "food record update successfully", "data" => $t_restaurants]);
                }    
            else {
                    return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! failed to update."]);
            }
          
    }
    public function list(){
        $t_restaurants= DB::table('t_restaurants')->select(DB::raw('pro_name,count(pro_name) as quantity'))->groupBy('pro_name')->get();
        if(count( $t_restaurants) > 0) {
            return response()->json(["status" => "200", "success" => true, "count" => count( $t_restaurants), "data" =>  $t_restaurants]);
        }
        else {
            return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! no record found"]);
        }
    }
    
}
