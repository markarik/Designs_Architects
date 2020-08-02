<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Purifier;

class CarouselController extends Controller
{
    /**
     * CarouselController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.carousel.carousel');

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request,[
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2200'
        ]);

//        $couresel_image_path = 'files/images/couresels';

        if($request ->hasFile('image')){
            $couresel_image = $request->file('image');

            $date = sha1(date('YmdHis').Str::random(5));

            $final_couresel = $date. '.' .$couresel_image->getClientOriginalName();
            $path = public_path('files/images/carousels/'.$final_couresel);

//            $couresel_image->move($couresel_image_path,$final_couresel);
            Image::make($couresel_image)->resize(800, 400)->save($path);

            $couresel = new Carousel();

//            $couresel->description = $request->input('description');
            $couresel->status = 2;
            $couresel->description = Purifier::clean($request->description);
            $couresel->title = Purifier::clean($request->title);
            $couresel->image_url = $final_couresel;

            $couresel->save();
//            dd($couresel);
        }


        return redirect()->back()->with('success','Image Created Successfully');


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
