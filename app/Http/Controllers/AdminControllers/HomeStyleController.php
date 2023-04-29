<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeStyleRequest;
use App\Services\HomeStyleService;
use Illuminate\Http\Request;

class HomeStyleController extends Controller
{
  protected HomeStyleService $homeStyleService;

  public function __construct(HomeStyleService $homeStyleService)
  {
    $this->homeStyleService = $homeStyleService;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.pages.home_styles.index', ['homeStyles' => $this->homeStyleService->index()]);
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
    public function store(HomeStyleRequest $request)
    {
      $this->homeStyleService->store($request->all());
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
      return view('admin.pages.home_styles.edit', ["homeStyle" => $this->homeStyleService->edit($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeStyleRequest $request, $id)
    {
      $this->homeStyleService->update($id, $request->all());
      return redirect()->route('home-styles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $this->homeStyleService->destroy($id);
      return redirect()->back();
    }
}
