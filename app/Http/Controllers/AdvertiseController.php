<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Advertise;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
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
            $advertise = Advertise::where('name', 'LIKE', "%$keyword%")
                ->orWhere('dateline', 'LIKE', "%$keyword%")
                ->orWhere('photo', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $advertise = Advertise::latest()->paginate($perPage);
        }

        return view('advertise.index', compact('advertise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('advertise.create');
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
        
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $image = Image::make(storage_path("app/public")."/".$requestData['photo']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $image->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $image->filesize();  

            if($size > 512000 ){
                $image->resize(
                    intval($image->width()/2) , 
                    intval($image->height()/2)
                )->save(); 
            }

        }

        Advertise::create($requestData);

        return redirect('advertise')->with('flash_message', 'Advertise added!');
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
        $advertise = Advertise::findOrFail($id);

        return view('advertise.show', compact('advertise'));
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
        $advertise = Advertise::findOrFail($id);

        return view('advertise.edit', compact('advertise'));
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
                if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }

        $advertise = Advertise::findOrFail($id);
        $advertise->update($requestData);

        return redirect('advertise')->with('flash_message', 'Advertise updated!');
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
        Advertise::destroy($id);

        return redirect('advertise')->with('flash_message', 'Advertise deleted!');
    }
}
