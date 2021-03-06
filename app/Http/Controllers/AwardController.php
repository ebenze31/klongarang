<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Award;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class AwardController extends Controller
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
            $award = Award::where('name', 'LIKE', "%$keyword%")
                ->orWhere('detail', 'LIKE', "%$keyword%")
                ->orWhere('photo_1', 'LIKE', "%$keyword%")
                ->orWhere('photo_2', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $award = Award::latest()->paginate($perPage);
        }

        return view('award.index', compact('award'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('award.create');
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

        Award::create($requestData);

        return redirect('award')->with('flash_message', 'Award added!');
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
        $award = Award::findOrFail($id);

        return view('award.show', compact('award'));
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
        $award = Award::findOrFail($id);

        return view('award.edit', compact('award'));
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

        $award = Award::findOrFail($id);
        $award->update($requestData);

        return redirect('award')->with('flash_message', 'Award updated!');
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
        Award::destroy($id);

        return redirect('award')->with('flash_message', 'Award deleted!');
    }
}
