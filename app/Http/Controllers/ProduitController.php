<?php 

namespace App\Http\Controllers;

use App\Boutique;
use App\Commande;
use App\Vendeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produit;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
      $produits=Produit::all();
        $c = new CommandeController();
        $c->update_somme($request);
      return view('produit.index')->with('produit',$produits);


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
          return view('produit.create');
      }else
      {
          return redirect("produit");
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
      $p= $request->all();
      $produit = new Produit($p);

      $v = Vendeur::where('mail','=',Auth::user()->email)->first();
      $produit->boutique=$v->boutique;
      $boutique=Boutique::findOrFail($v->boutique);
    $this->validate($request,[
        'image'=>'required|image|mimes:jpeg,png,jpg,svg,gif|max:2048',
    ]);
     $dossier='images/'.$boutique->nom;
     $file_name=$request->input('nom').time().'.'.$request->file('image')->getClientOriginalExtension();
      $request->file('image')->move($dossier,$file_name);
      $produit->image=$dossier."/".$file_name;

      $produit->save();
      return redirect('produit');



  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $produit=Produit::findOrFail($id);

      return view('produit.pageproduit')->with('produit',$produit);

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
              $produit = Produit::findOrFail($id)->first();
              $vendeur=Vendeur::where('mail','like',Auth::user()->email)->first();
               if ($vendeur->boutique==$produit->boutique){

                   return view('produit.edit')->with('produit',$produit);

               }



          }
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
      $p=Produit::findOrFail($id);
      $boutique=Boutique::findOrFail($p->boutique);

      $p->nom=$request->input("nom");
      $p->description=$request->input("description");
      $p->prix=$request->input("prix");
      $p->quantite=$request->input("quantite");
      $p->categori=$request->input("categori");

      if(!empty($request->file('image'))){
      $this->validate($request,[
          'image'=>'required|image|mimes:jpeg,png,jpg,svg,gif|max:2048',
      ]);
      $dossier='images/'.$boutique->nom;
      $file_name=$request->input('nom').time().'.'.$request->file('image')->getClientOriginalExtension();
      $request->file('image')->move($dossier,$file_name);
      $p->image=$dossier."/".$file_name;
      }

     $p->save();
     return redirect("produit");





  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

      $p=Produit::findOrFail($id);
      //Storage::delete($p->image);
      File::delete($p->image);
      $p->delete();


      return redirect('produit');

  }
  public function liste_par_boutique($id){
      $p = Produit::where('boutique','=',$id)->get();
        return view ('produit.listeProduitBoutique')->with(['produit'=>$p,'id'=>$id]);
  }
    public function liste_par_categorie($id){
        $p = Produit::where('categori','=',$id)->get();
        return view ('produit.listeProduitCategorie')->with(['produit'=>$p,'id'=>$id]);
    }

}

?>