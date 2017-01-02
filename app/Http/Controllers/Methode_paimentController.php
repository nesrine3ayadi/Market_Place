<?php 

namespace App\Http\Controllers;

use App\Vendeur;
use Illuminate\Http\Request;
use App\Methode_paiment;
use Illuminate\Support\Facades\Auth;

class Methode_paimentController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $methode_paiement=Methode_paiment::all();
      return view('methode_paiement.index')->with('paiement',$methode_paiement);

    
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
              return view('methode_paiement.create');
          }else
          {
              return redirect("home");
          }
      }else{
          return redirect("home");
      }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $pai= $request->all();
      $methode_paiement=new Methode_paiment($pai);
      $methode_paiement->save();

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      if(Auth::check()){

          if (Auth::user()->role==1) {
              $methode_paiement = Methode_paiment::findOrFail($id)->first();
              $vendeur=Vendeur::where('mail','like',Auth::user()->email)->first();

              return view('methode_paiement.edit')->with('paiement',$methode_paiement);





          }
      }else{
          return redirect('login');
      }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $request)
  {
      $methode_paiement=Methode_paiment::findOrFail($id)->update($request->all());
      return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $methode_paiement=Methode_paiment::findOrFail($id);
      $methode_paiement->delete();
      return back();
  }
  
}

?>