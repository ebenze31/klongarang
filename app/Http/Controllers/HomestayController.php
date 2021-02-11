<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Homestay;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $homestay = Homestay::where('name', 'LIKE', "%$keyword%")
                ->orWhere('home', 'LIKE', "%$keyword%")
                ->orWhere('photo_1', 'LIKE', "%$keyword%")
                ->orWhere('photo_2', 'LIKE', "%$keyword%")
                ->orWhere('photo_3', 'LIKE', "%$keyword%")
                ->orWhere('photo_4', 'LIKE', "%$keyword%")
                ->orWhere('photo_5', 'LIKE', "%$keyword%")
                ->orWhere('photo_6', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $homestay = Homestay::latest()->paginate($perPage);
        }

        return view('homestay.index', compact('homestay'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('homestay.create');
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

        Homestay::create($requestData);

        return redirect('homestay')->with('flash_message', 'Homestay added!');
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
        $homestay = Homestay::findOrFail($id);

        return view('homestay.show', compact('homestay'));
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
        $homestay = Homestay::findOrFail($id);

        return view('homestay.edit', compact('homestay'));
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
        if ($request->hasFile('photo_6')) {
            $requestData['photo_6'] = $request->file('photo_6')
                ->store('uploads', 'public');
        }

        $homestay = Homestay::findOrFail($id);
        $homestay->update($requestData);

        return redirect('homestay')->with('flash_message', 'Homestay updated!');
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
        Homestay::destroy($id);

        return redirect('homestay')->with('flash_message', 'Homestay deleted!');
    }
}
