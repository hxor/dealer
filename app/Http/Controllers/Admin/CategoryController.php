<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class CategoryController extends Controller
{
    private $bread;

    /**
     * Data For Breadcrumbs
     */
    public function __construct()
    {
        $this->bread = [
            '0' => '#',
            'page-title' => 'Category Portfolio',
            'menu' => 'Admin',
            'submenu' => 'Portfolios',
            'active' => 'Category Portfolio',
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
        $bread[0] = route('admin');

        if ($request->ajax()) {
          $categories = Category::select(['id', 'title', 'slug']);
          return Datatables::of($categories)
                  ->addColumn('action', function($cateport){
                      return view('layouts.backend.partials.datatable._action', [
                          'model' => $cateport,
                          'form_url' => route('admin.category.destroy', $cateport->id),
                          'edit_url' => route('admin.category.edit', $cateport->id),
                          'show_url' => route('admin.category.show', $cateport->id)
                      ]);
                  })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'ID'])
            ->addColumn(['data' => 'title', 'name' => 'title', 'title' => 'Title'])
            ->addColumn(['data' => 'slug', 'name' => 'slug', 'title' => 'Slug'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>'false']);

        return view('main.backend.category.index', compact('bread', 'html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bread = $this->bread;
        $bread[0] = route('admin.category.index');
        return view('main.backend.category.create', compact('bread'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255|unique:categories',
        ]);

        Category::create([
          'title' => $request->title,
          'slug' => str_slug($request->title, '-')
        ]);

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Category successfully added',
        ]);

        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cateport = Category::findOrFail($id);
        return $cateport;
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
        $bread[0] = route('admin.category.index');
        $cateport = Category::findOrFail($id);
        return view('main.backend.category.edit', compact('cateport', 'bread'));
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
        $this->validate($request, [
            'title' => 'required|string|max:255|unique:categories,title,'. $id,
        ]);

        $cateport = Category::findOrFail($id);
        $cateport->update([
          'title' => $request->title,
          'slug' => str_slug($request->title, '-')
        ]);

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Category successfully updated',
        ]);

        return redirect()->route('admin.category.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if (!Category::destroy($id)) return redirect()->back();

      notify()->flash('Done!', 'success', [
          'timer' => 1500,
          'text' => 'Category successfully deleted',
      ]);

      return redirect()->route('admin.category.index');
    }
}
