<?php

namespace App\Http\Controllers;
Use Alert;
use Illuminate\Http\Request;
use App\Models\T_restaurant;
use App\Models\Category;
use Illuminate\Support\Facades\File;


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
        return view('restaurant',['t_restaurants'=>$t_restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = \App\Models\Category::all();
        return view('pro_create',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = '';
        
        if($request -> hasFile('image')){
            $this->validate($request,[
                'image' =>'mimes:jpg,png,jpeg|max:2048',
            ],[
                'image.mimes'=>'Chỉ chấp nhận files ảnh',
                'image.max' => 'Chỉ chấp nhận files ảnh dưới 2Mb',

            ]);
            $file =$request ->file(('image'));
            $name = time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('image');
            $file -> move($destinationPath, $name);
        }
        $this->validate($request,[
            'pro_name'=>'required',
            'description'=>'required', 
            'price'=>'required',
        ],[
            
            'pro_name.required' =>'Bạn chưa nhập pro_name',
            'description.required' =>'Bạn chưa nhập mô tả',
            'price.required' =>'Bạn chưa nhập giá',
        ]);
        $res = new T_restaurant();
        $res->image=$name;
        $res->pro_name=$request->pro_name;
        $res->description=$request->description;
        $res->price=$request->price;
        $res->categories_id = $request->name;
        $res->save();

        return redirect()->route('t_restaurants.index')->with('success', 'Bạn đã thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $t_restaurants=T_restaurant::find($id);
        return view('detail',['t_restaurants'=>$t_restaurants]);
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
