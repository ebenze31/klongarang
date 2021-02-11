<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Trip;
use Illuminate\Http\Request;
use App\Models\Advertise;
use DB;
use Intervention\Image\ImageManagerStatic as Image;


class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 9;

        if (!empty($keyword)) {
            $trip = Trip::where('name', 'LIKE', "%$keyword%")
                ->orWhere('title', 'LIKE', "%$keyword%")
                ->orWhere('one_day_trip', 'LIKE', "%$keyword%")
                ->orWhere('two_days_trip', 'LIKE', "%$keyword%")
                ->orWhere('cover_photo', 'LIKE', "%$keyword%")
                ->orWhere('photo_1', 'LIKE', "%$keyword%")
                ->orWhere('photo_2', 'LIKE', "%$keyword%")
                ->orWhere('photo_3', 'LIKE', "%$keyword%")
                ->orWhere('photo_4', 'LIKE', "%$keyword%")
                ->orWhere('photo_5', 'LIKE', "%$keyword%")
                ->orWhere('photo_6', 'LIKE', "%$keyword%")
                ->orWhere('photo_7', 'LIKE', "%$keyword%")
                ->orWhere('photo_8', 'LIKE', "%$keyword%")
                ->orWhere('photo_9', 'LIKE', "%$keyword%")
                ->orWhere('photo_10', 'LIKE', "%$keyword%")
                ->orWhere('day_1_mo_1', 'LIKE', "%$keyword%")
                ->orWhere('day_1_mo_2', 'LIKE', "%$keyword%")
                ->orWhere('day_1_mo_3', 'LIKE', "%$keyword%")
                ->orWhere('day_1_mo_4', 'LIKE', "%$keyword%")
                ->orWhere('day_1_af_1', 'LIKE', "%$keyword%")
                ->orWhere('day_1_af_2', 'LIKE', "%$keyword%")
                ->orWhere('day_1_af_3', 'LIKE', "%$keyword%")
                ->orWhere('day_1_af_4', 'LIKE', "%$keyword%")
                ->orWhere('day_1_ni_1', 'LIKE', "%$keyword%")
                ->orWhere('day_1_ni_2', 'LIKE', "%$keyword%")
                ->orWhere('day_2_mo_1', 'LIKE', "%$keyword%")
                ->orWhere('day_2_mo_2', 'LIKE', "%$keyword%")
                ->orWhere('day_2_mo_3', 'LIKE', "%$keyword%")
                ->orWhere('day_2_mo_4', 'LIKE', "%$keyword%")
                ->orWhere('day_2_af_1', 'LIKE', "%$keyword%")
                ->orWhere('day_2_af_2', 'LIKE', "%$keyword%")
                ->orWhere('day_2_af_3', 'LIKE', "%$keyword%")
                ->orWhere('day_2_af_4', 'LIKE', "%$keyword%")
                ->orWhere('day_2_ni_1', 'LIKE', "%$keyword%")
                ->orWhere('day_2_ni_2', 'LIKE', "%$keyword%")
                ->orWhere('remark', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $trip = Trip::latest()->paginate($perPage);
        }

        return view('trip.index', compact('trip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('trip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        if ($request->hasFile('cover_photo')) {
            $requestData['cover_photo'] = $request->file('cover_photo')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $cover_photo = Image::make(storage_path("app/public")."/".$requestData['cover_photo']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $cover_photo->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $cover_photo->filesize();  

            if($size > 512000 ){
                $cover_photo->resize(
                    intval($cover_photo->width()/2) , 
                    intval($cover_photo->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('photo_1')) {
            $requestData['photo_1'] = $request->file('photo_1')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image1 = Image::make(storage_path("app/public")."/".$requestData['photo_1']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image1->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image1->filesize();  

            if($size > 512000 ){
                $image1->resize(
                    intval($image1->width()/2) , 
                    intval($image1->height()/2)
                )->save(); 
            }

        }

        if ($request->hasFile('photo_2')) {
            $requestData['photo_2'] = $request->file('photo_2')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image2 = Image::make(storage_path("app/public")."/".$requestData['photo_2']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image2->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image2->filesize();  

            if($size > 512000 ){
                $image2->resize(
                    intval($image2->width()/2) , 
                    intval($image2->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('photo_3')) {
            $requestData['photo_3'] = $request->file('photo_3')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image3 = Image::make(storage_path("app/public")."/".$requestData['photo_3']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image3->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image3->filesize();  

            if($size > 512000 ){
                $image3->resize(
                    intval($image3->width()/2) , 
                    intval($image3->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('photo_4')) {
            $requestData['photo_4'] = $request->file('photo_4')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image4 = Image::make(storage_path("app/public")."/".$requestData['photo_4']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image4->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image4->filesize();  

            if($size > 512000 ){
                $image4->resize(
                    intval($image4->width()/2) , 
                    intval($image4->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('photo_5')) {
            $requestData['photo_5'] = $request->file('photo_5')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image5 = Image::make(storage_path("app/public")."/".$requestData['photo_5']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image5->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image5->filesize();  

            if($size > 512000 ){
                $image5->resize(
                    intval($image5->width()/2) , 
                    intval($image5->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('photo_6')) {
            $requestData['photo_6'] = $request->file('photo_6')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image6 = Image::make(storage_path("app/public")."/".$requestData['photo_6']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image6->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image6->filesize();  

            if($size > 512000 ){
                $image6->resize(
                    intval($image6->width()/2) , 
                    intval($image6->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('photo_7')) {
            $requestData['photo_7'] = $request->file('photo_7')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image7 = Image::make(storage_path("app/public")."/".$requestData['photo_7']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image7->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image7->filesize();  

            if($size > 512000 ){
                $image7->resize(
                    intval($image7->width()/2) , 
                    intval($image7->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('photo_8')) {
            $requestData['photo_8'] = $request->file('photo_8')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image8 = Image::make(storage_path("app/public")."/".$requestData['photo_8']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image8->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image8->filesize();  

            if($size > 512000 ){
                $image8->resize(
                    intval($image8->width()/2) , 
                    intval($image8->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('photo_9')) {
            $requestData['photo_9'] = $request->file('photo_9')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image9 = Image::make(storage_path("app/public")."/".$requestData['photo_9']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image9->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image9->filesize();  

            if($size > 512000 ){
                $image9->resize(
                    intval($image9->width()/2) , 
                    intval($image9->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('photo_10')) {
            $requestData['photo_10'] = $request->file('photo_10')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image10 = Image::make(storage_path("app/public")."/".$requestData['photo_10']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image10->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image10->filesize();  

            if($size > 512000 ){
                $image10->resize(
                    intval($image10->width()/2) , 
                    intval($image10->height()/2)
                )->save(); 
            }
        }

        Trip::create($requestData);

        return redirect('trip')->with('flash_message', 'Trip added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $trip = Trip::findOrFail($id);
        $random = DB::table('advertises')
                ->inRandomOrder()
                ->first();
        return view('trip.show', compact('trip', 'random'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $trip = Trip::findOrFail($id);

        return view('trip.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('cover_photo')) {
            $requestData['cover_photo'] = $request->file('cover_photo')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_1')) {
            $requestData['photo_1'] = $request->file('photo_1')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_2')) {
            $requestData['photo_2'] = $request->file('photo_2')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_3')) {
            $requestData['photo_3'] = $request->file('photo_3')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_4')) {
            $requestData['photo_4'] = $request->file('photo_4')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_5')) {
            $requestData['photo_5'] = $request->file('photo_5')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_6')) {
            $requestData['photo_6'] = $request->file('photo_6')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_7')) {
            $requestData['photo_7'] = $request->file('photo_7')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_8')) {
            $requestData['photo_8'] = $request->file('photo_8')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_9')) {
            $requestData['photo_9'] = $request->file('photo_9')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photo_10')) {
            $requestData['photo_10'] = $request->file('photo_10')
                ->store('uploads', 'public');
        }

        $trip = Trip::findOrFail($id);
        $trip->update($requestData);

        return redirect('trip')->with('flash_message', 'Trip updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Trip::destroy($id);

        return redirect('trip')->with('flash_message', 'Trip deleted!');
    }
}
