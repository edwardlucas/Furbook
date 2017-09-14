<?php

namespace Furbook\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //列出所有猫
        $cats = \Furbook\Cat::all();
        return view('cats.index')->with('cats', $cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //新建一只猫的表单
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //保存新建的猫
        $cat = \Furbook\Cat::create(Input::all());
        return redirect('cats/'.$cat->id)
            ->withSuccess('Cat '. $cat->name .' has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //显示一只猫的详情
        $cat = \Furbook\Cat::find($id);
        return view('cats.show')->with('cat', $cat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //修改一只猫
        $cat = \Furbook\Cat::find($id);
        return view('cats.edit')->with('cat', $cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update(Request $request, \Furbook\Cat $cat) //猜测Route::resource已经自动Route-model binding，不必像上面那样搞了。
    {
        //保存修改的猫
        //$cat = \Furbook\Cat::find($id);
        $cat->update(Input::all());
        return redirect('cats/'.$cat->id)
            ->withSuccess('Cat '.$cat->name.' has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除一只猫
        $cat = \Furbook\Cat::find($id);
        $name = $cat->name;
        $cat->delete();
        return redirect('cats')
            ->withSuccess($name.' Cat has been deleted.');
    }
}
