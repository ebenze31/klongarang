<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Trip;
use Illuminate\Http\Request;

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
        $perPage = 25;

        if (!empty($keyword)) {
            $trip = Trip::where('name', 'LIKE', "%$keyword%")
                ->orWhere('title', 'LIKE', "%$keyword%")
                ->orWhere('one_day_trip', 'LIKE', "%$keyword%")
                ->orWhere('two_days_trip', 'LIKE', "%$keyword%")
                ->orWhere('three_days_trip', 'LIKE', "%$keyword%")
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
                ->orWhere('day_1_morning', 'LIKE', "%$keyword%")
                ->orWhere('day_1_noon', 'LIKE', "%$keyword%")
                ->orWhere('day_1_afternoon', 'LIKE', "%$keyword%")
                ->orWhere('day_1_evening', 'LIKE', "%$keyword%")
                ->orWhere('day_1_night', 'LIKE', "%$keyword%")
                ->orWhere('day_2_morning', 'LIKE', "%$keyword%")
                ->orWhere('day_2_noon', 'LIKE', "%$keyword%")
                ->orWhere('day_2_afternoon', 'LIKE', "%$keyword%")
                ->orWhere('day_2_evening', 'LIKE', "%$keyword%")
                ->orWhere('day_2_night', 'LIKE', "%$keyword%")
                ->orWhere('day_3_morning', 'LIKE', "%$keyword%")
                ->orWhere('day_3_noon', 'LIKE', "%$keyword%")
                ->orWhere('day_3_afternoon', 'LIKE', "%$keyword%")
                ->orWhere('day_3_evening', 'LIKE', "%$keyword%")
                ->orWhere('day_3_night', 'LIKE', "%$keyword%")
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

        return view('trip.show', compact('trip'));
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
