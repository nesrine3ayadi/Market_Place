<?php 

namespace App\Http\Controllers;

use App\Boutique;
use App\User;
use App\Vendeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BoutiqueController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
    $boutique=Boutique::all();
      $c = new CommandeController();
      $c->update_somme($request);
      return view('boutique.index')->with('boutiques',$boutique);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      if (Auth::user()){
          if(Auth::user()->role==1){
              $vendeur = Vendeur::where('mail','=',Auth::user()->email)->first();
               if ($vendeur->boutique==0){
              return view('boutique.create');

               }else{
                   echo "vous avez deja un boutique";
               }
          }
      }else
      {
          redirect("home");
      }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

      $b= $request->all();
      $boutique = new Boutique($b);

      $boutique->save();
      $vendeur = Vendeur::where('mail','=',Auth::user()->email)->first();
      $vendeur->boutique=$boutique->id;
      $vendeur->save();
      return redirect('boutique');


  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $boutique=Boutique::findOrFail($id);
    return view("boutique.show")->with("boutique",$boutique);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

      if (Auth::user()) {
          if (Auth::user()->role == 1) {
              $boutique = Boutique::findOrFail($id);
              return view("boutique.edit")->with(['boutique'=>$boutique]);

          }

      }else
      {
          return view('welcome');
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
      $b=Boutique::findOrFail($id);
      $b->nom=$request->input("nom");
      $b->adresse=$request->input("adresse");
      $b->description=$request->input("description");
      $b->mail=$request->input("mail");
      $b->webSite=$request->input("webSite");
      $b->save();
      return redirect("boutique");

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>