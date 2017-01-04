<?php 

namespace App\Http\Controllers;

use App\Client;
use App\Produit;
use App\Commande;
use App\Vendeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;

class CommandeController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */



  public function index(Request $request)
  {
    if (Auth::check()){
        if (Auth::user()->role == 2) {
            $commande=Commande::where([
                ['type','=','panier'],
                    ['client','=',Client::where('mail',"=",Auth::user()->email)->first()->id]
            ])->get();
            $this->update_somme($request);
            return view('commande.index')->with("commande",$commande);



        }else{
            $commande=Commande::where([
                ['type','=','panier'],
                ['client','=',Vendeur::where('mail',"=",Auth::user()->email)->first()->id]
            ])->get();
            $this->update_somme($request);
            return view('commande.index')->with("commande",$commande);


        }
    }else{

        $commande=Commande::where([
            ['type','=','panier'],
            ['client','=',filter_var($request->session()->getId(),FILTER_SANITIZE_NUMBER_INT)]



        ])->get();
        $this->update_somme($request);

        return view('commande.index')->with("commande",$commande);


    }
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store($id)
  {


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
      $commande=Commande::findOrFail($id);
      $commande->delete();
      return back();
    
  }
  public function ajout_panier($id,Request $request){

          $commande= new Commande();
          $commande->type="panier";
          $commande->livraison=0;
          $p = Produit::findOrFail($id)->first();
          if(Auth::check()) {
              if (Auth::user()->role == 2) {
                  $commande->client=Client::where('mail',"=",Auth::user()->email)->first()->id;
              }else{
                  $commande->client=Vendeur::where('mail',"=",Auth::user()->email)->first()->id;

                  //$commande->client= filter_var($request->session()->getId(),FILTER_SANITIZE_NUMBER_INT);
              }
          }else{
              return redirect('login');

              //$commande->client= filter_var($request->session()->getId(),FILTER_SANITIZE_NUMBER_INT);

          }
          $commande->total=$p->prix;
          $commande->tva=18;
          $commande->remise=0;
          $commande->reference=filter_var($request->session()->getId(),FILTER_SANITIZE_NUMBER_INT);
      $commande->Produit=$id;
          $commande->save();
         $s= $this->update_somme($request);
         //dd($s);
      //$request->session()->put('somme',$s);

          return back()->with(['somme'=>$s]);
      //return redirect('produit')->with('somme',$s);



      }
      public function update_somme(Request $request){
        if(Auth::check()){
            if(Auth::user()->role==2)
            {
               // $commande=Commande::where("client","=",Client::where('mail','=',Auth::user()->email)->first()->id)->get(['total']);
                $commande=Commande::where("reference","=",filter_var($request->session()->getId(),FILTER_SANITIZE_NUMBER_INT))->get(['total']);

                Session::put('somme',$commande->sum('total'));
                return $commande->sum('total');



            }
        }else{
            $commande=Commande::where("client","=",filter_var($request->session()->getId(),FILTER_SANITIZE_NUMBER_INT))->get(['total']);
            Session::put('somme',$commande->sum('total'));
            return $commande->sum('total');
        }


      }

}

?>