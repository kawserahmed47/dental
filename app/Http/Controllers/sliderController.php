<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class sliderController extends Controller
{

    public function index()
    {
        $data =slider::all();
        return view('back.slider.slider',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {



        $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('slider'))
            {
                Storage::disk('public')->makeDirectory('slider');
            }

            $sliderImage = Image::make($image)->resize(6000,4000)->stream();
            Storage::disk('public')->put('slider/'.$imageName,$sliderImage);

        } else {
            $imageName = "default.png";
        }

        $data = new slider();
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->slug = $slug;
        $data->image = $imageName;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }
        $data->status = true;
        $data->save();
//        Toastr::success('Post Successfully Saved :)','Success');
        return redirect()->back();
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
        $data=slider::find($id);
        $data->delete();
        return redirect()->back();
    }
}
