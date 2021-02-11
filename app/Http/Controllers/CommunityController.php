<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Community;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class CommunityController extends Controller
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
            $community = Community::where('name', 'LIKE', "%$keyword%")
                ->orWhere('president', 'LIKE', "%$keyword%")
                ->orWhere('president_img', 'LIKE', "%$keyword%")
                ->orWhere('vice_President_1', 'LIKE', "%$keyword%")
                ->orWhere('vice_President_1_img', 'LIKE', "%$keyword%")
                ->orWhere('vice_President_2', 'LIKE', "%$keyword%")
                ->orWhere('vice_President_2_img', 'LIKE', "%$keyword%")
                ->orWhere('secretary_1', 'LIKE', "%$keyword%")
                ->orWhere('secretary_1_img', 'LIKE', "%$keyword%")
                ->orWhere('secretary_2', 'LIKE', "%$keyword%")
                ->orWhere('secretary_2_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_position_1', 'LIKE', "%$keyword%")
                ->orWhere('board_by_position_1_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_position_2', 'LIKE', "%$keyword%")
                ->orWhere('board_by_position_2_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_position_3', 'LIKE', "%$keyword%")
                ->orWhere('board_by_position_3_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_1', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_1_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_2', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_2_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_3', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_3_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_4', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_4_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_5', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_5_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_6', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_6_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_7', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_7_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_8', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_8_img', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_9', 'LIKE', "%$keyword%")
                ->orWhere('board_by_experts_9_img', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $community = Community::latest()->paginate($perPage);
        }

        return view('community.index', compact('community'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('community.create');
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
        
        if ($request->hasFile('president_img')) {
            $requestData['president_img'] = $request->file('president_img')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $president_img = Image::make(storage_path("app/public")."/".$requestData['president_img']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $president_img->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $president_img->filesize();  

            if($size > 512000 ){
                $president_img->resize(
                    intval($president_img->width()/2) , 
                    intval($president_img->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('vice_President_1_img')) {
            $requestData['vice_President_1_img'] = $request->file('vice_President_1_img')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $vice_President_1_img = Image::make(storage_path("app/public")."/".$requestData['vice_President_1_img']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $vice_President_1_img->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $vice_President_1_img->filesize();  

            if($size > 512000 ){
                $vice_President_1_img->resize(
                    intval($vice_President_1_img->width()/2) , 
                    intval($vice_President_1_img->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('vice_President_2_img')) {
            $requestData['vice_President_2_img'] = $request->file('vice_President_2_img')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $vice_President_2_img = Image::make(storage_path("app/public")."/".$requestData['vice_President_2_img']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $vice_President_2_img->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $vice_President_2_img->filesize();  

            if($size > 512000 ){
                $vice_President_2_img->resize(
                    intval($vice_President_2_img->width()/2) , 
                    intval($vice_President_2_img->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('secretary_1_img')) {
            $requestData['secretary_1_img'] = $request->file('secretary_1_img')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $secretary_1_img = Image::make(storage_path("app/public")."/".$requestData['secretary_1_img']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $secretary_1_img->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $secretary_1_img->filesize();  

            if($size > 512000 ){
                $secretary_1_img->resize(
                    intval($secretary_1_img->width()/2) , 
                    intval($secretary_1_img->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('secretary_2_img')) {
            $requestData['secretary_2_img'] = $request->file('secretary_2_img')->store('uploads', 'public');

            //RESIZE 50% FILE IF IMAGE LARGER THAN 0.5 MB
            $secretary_2_img = Image::make(storage_path("app/public")."/".$requestData['secretary_2_img']);
            //watermark
            $watermark = Image::make(public_path('watermark.png'));
            $secretary_2_img->insert($watermark , 'bottom-right', 25, 25)->save();

            $size = $secretary_2_img->filesize();  

            if($size > 512000 ){
                $secretary_2_img->resize(
                    intval($secretary_2_img->width()/2) , 
                    intval($secretary_2_img->height()/2)
                )->save(); 
            }
        }

        if ($request->hasFile('board_by_position_1_img')) {
            $requestData['board_by_position_1_img'] = $request->file('board_by_position_1_img')
                ->store('uploads', 'public');
        }

        if ($request->hasFile('board_by_position_2_img')) {
            $requestData['board_by_position_2_img'] = $request->file('board_by_position_2_img')
                ->store('uploads', 'public');
        }

        if ($request->hasFile('board_by_position_3_img')) {
            $requestData['board_by_position_3_img'] = $request->file('board_by_position_3_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_1_img')) {
            $requestData['board_by_experts_1_img'] = $request->file('board_by_experts_1_img')
                ->store('uploads', 'public');
        }

        if ($request->hasFile('board_by_experts_2_img')) {
            $requestData['board_by_experts_2_img'] = $request->file('board_by_experts_2_img')
                ->store('uploads', 'public');
        }

        if ($request->hasFile('board_by_experts_3_img')) {
            $requestData['board_by_experts_3_img'] = $request->file('board_by_experts_3_img')
                ->store('uploads', 'public');
        }

        if ($request->hasFile('board_by_experts_4_img')) {
            $requestData['board_by_experts_4_img'] = $request->file('board_by_experts_4_img')
                ->store('uploads', 'public');
        }

        if ($request->hasFile('board_by_experts_5_img')) {
            $requestData['board_by_experts_5_img'] = $request->file('board_by_experts_5_img')
                ->store('uploads', 'public');
        }

        if ($request->hasFile('board_by_experts_6_img')) {
            $requestData['board_by_experts_6_img'] = $request->file('board_by_experts_6_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_7_img')) {
            $requestData['board_by_experts_7_img'] = $request->file('board_by_experts_7_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_8_img')) {
            $requestData['board_by_experts_8_img'] = $request->file('board_by_experts_8_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_9_img')) {
            $requestData['board_by_experts_9_img'] = $request->file('board_by_experts_9_img')
                ->store('uploads', 'public');
        }

        Community::create($requestData);

        return redirect('community')->with('flash_message', 'Community added!');
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
        $community = Community::findOrFail($id);

        return view('community.show', compact('community'));
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
        $community = Community::findOrFail($id);

        return view('community.edit', compact('community'));
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
                if ($request->hasFile('president_img')) {
            $requestData['president_img'] = $request->file('president_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('vice_President_1_img')) {
            $requestData['vice_President_1_img'] = $request->file('vice_President_1_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('vice_President_2_img')) {
            $requestData['vice_President_2_img'] = $request->file('vice_President_2_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('secretary_1_img')) {
            $requestData['secretary_1_img'] = $request->file('secretary_1_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('secretary_2_img')) {
            $requestData['secretary_2_img'] = $request->file('secretary_2_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_position_1_img')) {
            $requestData['board_by_position_1_img'] = $request->file('board_by_position_1_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_position_2_img')) {
            $requestData['board_by_position_2_img'] = $request->file('board_by_position_2_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_position_3_img')) {
            $requestData['board_by_position_3_img'] = $request->file('board_by_position_3_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_1_img')) {
            $requestData['board_by_experts_1_img'] = $request->file('board_by_experts_1_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_2_img')) {
            $requestData['board_by_experts_2_img'] = $request->file('board_by_experts_2_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_3_img')) {
            $requestData['board_by_experts_3_img'] = $request->file('board_by_experts_3_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_4_img')) {
            $requestData['board_by_experts_4_img'] = $request->file('board_by_experts_4_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_5_img')) {
            $requestData['board_by_experts_5_img'] = $request->file('board_by_experts_5_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_6_img')) {
            $requestData['board_by_experts_6_img'] = $request->file('board_by_experts_6_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_7_img')) {
            $requestData['board_by_experts_7_img'] = $request->file('board_by_experts_7_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_8_img')) {
            $requestData['board_by_experts_8_img'] = $request->file('board_by_experts_8_img')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('board_by_experts_9_img')) {
            $requestData['board_by_experts_9_img'] = $request->file('board_by_experts_9_img')
                ->store('uploads', 'public');
        }

        $community = Community::findOrFail($id);
        $community->update($requestData);

        return redirect('community')->with('flash_message', 'Community updated!');
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
        Community::destroy($id);

        return redirect('community')->with('flash_message', 'Community deleted!');
    }
}
