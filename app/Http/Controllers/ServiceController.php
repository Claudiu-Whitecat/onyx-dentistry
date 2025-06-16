<?php

namespace App\Http\Controllers;

use App\Models\Price\Price;
use App\Models\Resource;
use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $resource = Resource::query()
            ->select('resources.*')
            ->groupBy('resources.id')
            ->orderBy('resources.weight', 'asc')
            ->paginate(12);


        return view('services.index', [
            'resources' => $resource,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resource $resource, $slug)
    {
        $converter = new CommonMarkConverter();
        $resource = Resource::where('slug', $slug)->firstOrFail();
        $resource->body = $converter->convertToHtml($resource->body);
        return view('services.show', compact('resource'));

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resource $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $service)
    {
        //
    }
}
