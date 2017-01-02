<?php 

namespace App\Http\Controllers;

use App\Client;
use App\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaiementController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $paiement=Paiement::all();
      return view('paiement.index')->with('paiement',$paiement);


  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      if(Auth::check()){

          if (Auth::user()->role==2){
              return view('paiement.create');
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
      $paiement=new Paiement($pai);
      $commande= new Commande();

      if(Auth::check()) {
          if (Auth::user()->role == 2) {

              $commande->client=Client::where('mail',"=",Auth::user()->email)->first()->id;
          }
      }
        $paiement->commande=$commande;
          $paiement->save();
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
              $paiement = Paiment::findOrFail($id)->first();
              $vendeur=Client::where('mail','like',Auth::user()->email)->first();

              return view('paiement.edit')->with('paiement',$paiement);





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
      $paiement=Paiment::findOrFail($id)->update($request->all());
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
      $paiement=Paiement::findOrfail($id);
      $paiement->delete();
      return back();
  }
  
}

?>