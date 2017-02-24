<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Motor;
use App\Models\Spec;
use App\Models\Gallery;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Support\Collection;

class MotorController extends Controller
{
    private $bread;

    /**
     * Data For Breadcrumbs
     */
    public function __construct()
    {
        $this->bread = [
            '0' => route('admin'),
            'page-title' => 'List Motor',
            'menu' => 'Product',
            'submenu' => 'Motor',
            'active' => 'List Motor'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        $bread = $this->bread;

        $motors = new Collection;
        if ($request->ajax()) {
            $listMotor = Motor::all();
            $no = 0;
            foreach ($listMotor as $data) {
                $motors->push([
                    'id' => $data->id,
                    'title' => $data->title,
                    'category' =>   '<span class="label label-primary">
                                        <i class="fa fa-btn fa-tags"></i>'.$data->category->title.'
                                    </span>'
                    // 'created_at' => $data->created_at->format('d-m-Y H:m:s'),
                    // 'updated_at' => $data->updated_at->format('d-m-Y H:m:s'),
                ]);
            }
            return Datatables::of($motors)
                    ->addColumn('action', function($motors){
                        return view('layouts.backend.partials.datatable._action', [
                            'model' => $motors,
                            'form_url' => route('admin.motor.destroy', $motors['id']),
                            'edit_url' => route('admin.motor.edit', $motors['id']),
                            'show_url' => route('admin.motor.show', $motors['id'])
                        ]);
                    })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'ID'])
            ->addColumn(['data' => 'title', 'name' => 'title', 'title' => 'Title'])
            ->addColumn(['data' => 'category', 'name' => 'category', 'title' => 'Category'])
            // ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => 'Created'])
            // ->addColumn(['data' => 'updated_at', 'name' => 'updated_at', 'title' => 'Updated'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>'false']);

        return view('main.backend.motor.index', compact('bread', 'html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bread = $this->bread;
        $bread[0] = route('admin.motor.index');
        return view('main.backend.motor.create', compact('bread'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title' => 'required',
            'year' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'gallery_id' => 'required'
        ]);

        $data = [
            'slug' => str_slug($request->title, '-'),
            'title' => $request->title,
            'year' => $request->year,
            'price' => $request->price,
            'desc' => $request->desc,
            'image' => $request->image,
            'category_id' => $request->category_id,
            'gallery_id' => $request->gallery_id
        ];

        $post = Motor::create($data);

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Motor successfully added',
        ]);

        return redirect()->route('admin.motor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bread = $this->bread;
        $bread[0] = route('admin.motor.index');
        $motor = Motor::findOrFail($id);
        return view('main.backend.motor.show', compact('bread', 'motor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bread = $this->bread;
        $bread[0] = route('admin.motor.index');
        $motor = Motor::findOrFail($id);
        return view('main.backend.motor.edit', compact('bread', 'motor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // return $request->all();
      $this->validate($request,[
          'title' => 'required',
          'year' => 'required',
          'price' => 'required',
          'desc' => 'required',
          'image' => 'required',
          'category_id' => 'required',
          'gallery_id' => 'required'
      ]);

      $data = [
          'slug' => str_slug($request->title, '-'),
          'title' => $request->title,
          'year' => $request->year,
          'price' => $request->price,
          'desc' => $request->desc,
          'image' => $request->image,
          'category_id' => $request->category_id,
          'gallery_id' => $request->gallery_id
      ];

        $motor = Motor::findOrFail($id);
        $motor->update($data);

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Motor successfully updated',
        ]);

        return redirect()->route('admin.motor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Motor::destroy($id)) return redirect()->back();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Motor successfully deleted',
        ]);

        return redirect()->route('admin.motor.index');
    }

    public function getSpecForm($id){
      $idmotor = $id;
      $bread = $this->bread;
      $bread[0] = route('admin.motor.show', $idmotor);
      return view('main.backend.motor._spec-create', compact('idmotor', 'bread'));
    }

    public function postSpec(Request $request, $id){
      Spec::create($request->all());
      notify()->flash('Done!', 'success', [
          'timer' => 1500,
          'text' => 'Spec successfully added',
      ]);
      return redirect()->route('admin.motor.show', $id);
    }

    public function getSpecFormEdit($id, $ids){
      $motor = Motor::where('id',$id)->select('id')->first();
      $idmotor = $motor->id;
      $spec = Spec::findOrFail($ids);
      // return $idmotor . ' ' . $idspec;
      $bread = $this->bread;
      $bread[0] = route('admin.motor.show', $idmotor);
      return view('main.backend.motor._spec-edit', compact('idmotor', 'spec', 'bread'));
    }

    public function postSpecUpdate(Request $request, $id, $ids){
      $motor = Motor::where('id',$id)->select('id')->first();
      $idmotor = $motor->id;
      $spec = Spec::findOrFail($ids);
      // return $request->all();
      $spec->update($request->all());
      notify()->flash('Done!', 'success', [
          'timer' => 1500,
          'text' => 'Spec successfully updated',
      ]);
      return redirect()->route('admin.motor.show', $idmotor);
    }

    public function destroySpec($id, $ids){
      $motor = Motor::where('id',$id)->select('id')->first();
      $idmotor = $motor->id;
      if (!Spec::destroy($ids)) return redirect()->back();

      notify()->flash('Done!', 'success', [
          'timer' => 1500,
          'text' => 'Spec successfully deleted',
      ]);

      return redirect()->route('admin.motor.show', $idmotor);
    }

}
