<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Travel;
use Illuminate\Http\Request;
use DB;
use App\Models\Trip;
use Intervention\Image\ImageManagerStatic as Image;

class TravelController extends Controller
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
            $travel = Travel::where('category', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('detail', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->orWhere('photo_1', 'LIKE', "%$keyword%")
                ->orWhere('photo_2', 'LIKE', "%$keyword%")
                ->orWhere('photo_3', 'LIKE', "%$keyword%")
                ->orWhere('photo_4', 'LIKE', "%$keyword%")
                ->orWhere('photo_5', 'LIKE', "%$keyword%")
                ->orWhere('agriculture', 'LIKE', "%$keyword%")
                ->orWhere('culture', 'LIKE', "%$keyword%")
                ->orWhere('learn', 'LIKE', "%$keyword%")
                ->orWhere('check_in', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $travel = Travel::latest()->paginate($perPage);
        }

        return view('travel.index', compact('travel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('travel.create');
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

        Travel::create($requestData);

        return redirect('travel')->with('flash_message', 'Travel added!');
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
        $travel = Travel::findOrFail($id);
        $random = DB::table('trips')
                ->inRandomOrder()
                ->first();

        return view('travel.show', compact('travel' ,'random'));
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
        $travel = Travel::findOrFail($id);

        return view('travel.edit', compact('travel'));
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

        $travel = Travel::findOrFail($id);
        $travel->update($requestData);

        return redirect('travel')->with('flash_message', 'Travel updated!');
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
        Travel::destroy($id);

        return redirect('travel')->with('flash_message', 'Travel deleted!');
    }
}
