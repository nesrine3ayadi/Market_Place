<?php 

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller {


  public function index()
  {
      $categorie=Categorie::all();
      return view('categorie.index')->with('categorie',$categorie);




  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    if(Auth::check()){
          if (Auth::user()->role==1){
              return view('categorie.create');
          }else
          {
              return redirect("categorie");
          }
  }else{
          return redirect("produit");
      }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $cat= $request->all();
      $categorie = new Categorie($cat);
      $this->validate($request, [
          'nom' => 'required|unique:categorie',
      ]);
      $categorie->save();
      return back();


  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

      $categorie=Categorie::findOrFail($id);
      return view("categorie.show")->with("categorie",$categorie);
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $cat=Categorie::findOrFail($id);
      $cat->delete();
      return redirect("categorie");



  }
  
}

?>