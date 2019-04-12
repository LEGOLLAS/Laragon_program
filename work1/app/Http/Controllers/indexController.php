<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work1;

class indexController extends Controller{

  public function index(){
    $postData = Work1::orderby('id','asc')->paginate(10);
    return view ('main.main', array('postData'=>$postData));
  }

  public function create(){
    return view ('register.register');
  }

  public function show(Request $request){
    $id = $request->get('id');
    $postData = Work1::find($id);
    return view ('detailPage.detailPage', array('choiceData'=>$postData));
  }
  public function store(Request $request){
    $id = null;
    $postData = $request->all();
    $resource = Work1::findOrNew($id);
    $resource->fill($postData);
    $resource->save();
    return redirect('/');
  }
  public function edit(Request $request){
    $id = $request->input('id');
    $postData = Work1::find($id);
    return view('edit.edit', array('postData'=>$postData));
  }
  public function update(Request $request){
    $id = $request->get('id');
    $postData = $request->all();
    $resource = Work1::findOrNew($id);
    $resource->fill($postData);
    $resource->save();
    return redirect('/');
  }
  public function delete(Request $request){
    $id = $request->all();
    Work1::destroy($id);
    return redirect('/');
  }
  public function search(Request $request){
    $searchData = $request->input('search');
    $postData = Work1::where('id', $searchData)
                     ->orwhere('email', $searchData)
                     ->orwhere('member', $searchData)
                     ->orwhere('kname', $searchData)
                     ->orwhere('ename', $searchData)
                     ->orwhere('sex', $searchData)
                     ->orwhere('spot', $searchData)
                     ->orwhere('position', $searchData)
                     ->orwhere('callNumber', $searchData)->paginate(10);
    return view('search.search', array('searchData'=>$postData));
  }
}
