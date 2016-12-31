<?php 

namespace App\Http\Controllers;

use App\Boutique;
use App\Boutique_livraison;
use App\Vendeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Livraison;

class LivraisonController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {

      $livraison=Livraison::all();
      $c = new CommandeController();
      $c->update_somme($request);
      return view('livraison.index')->with('livraison',$livraison);
    
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
              return view('livraison.create');
          }else
          {
              return redirect("livraison");
          }
      }else{
          return redirect("livraison");
      }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

      $l= $request->all();
      $livraison=new Livraison($l);
      $livraison->save();
      $id_vendeur=Vendeur::where('mail','=',Auth::user()->email)->first();
      $boutique=Boutique::where('id','=',$id_vendeur)->get(['id']);
      $bl=new Boutique_livraison();
      //$bl->id_livtation = $livraison->id;
      //$bl->id_boutique=$boutique;
      //$bl->save();
    //dd($id_vendeur);
      Boutique_livraison::create(['id_livtation'=>$livraison->id,'id_boutique'=>$id_vendeur->boutique]);

      return redirect('livraison');



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
              $livraison = Livraison::findOrFail($id)->first();
              $vendeur=Vendeur::where('mail','like',Auth::user()->email)->first();

                  return view('livraison.edit')->with('livraison',$livraison);





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
      $livraison=Livraison::findOrFail($id)->update($request->all());
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
      $livraison=Livraison::findOrFail($id);
      $livraison->delete();
        return back();
  }
  
}

?>