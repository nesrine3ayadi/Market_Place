<?php 

namespace App\Http\Controllers;
use App\Boutique;
use App\Vendeur;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;



class VendeurController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
      $vendeurs = Vendeur::all();
      $c = new CommandeController();
      $c->update_somme($request);
      return view('vendeur.index')->with('vendeur',$vendeurs);

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      if (Auth::guest()){
      return view('vendeur.create');
      }else
      {
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
      $v= $request->all();
      $vendeur = new Vendeur($v);
      //   dd($client);

      User::create([
          'name' => $request->input('nom'),
          'email' => $request->input('mail'),
          'password' => bcrypt($request->input('password')),
          'role'    => 1
      ]);
      $vendeur->save();


      return redirect('vendeur');

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
      $vendeurs = Vendeur::findOrFail($id);
      $user = User::where('email','=',"$vendeurs->mail")->first();
   //   dd($user);
      if(($vendeurs->id==$id) && (Auth::user()->email==$vendeurs->mail)) {
          return view('vendeur.profile')->with(['vendeurs' => $vendeurs,
              'u' => $user
          ]);
      }
      else
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
  public function update($id, Request $request)
  {
      $v=Vendeur::findOrFail($id);

      $u = User::where('email','=',"$v->mail")->first();

      $u->name=$request->input("nom");
      $v->nom=$request->input("nom");

      $v->prenom=$request->input("prenom");
      $v->sexe=$request->input("sexe");
      $v->adresse=$request->input("adresse");
      $v->code_postale=$request->input("code_postale");
      $v->ville=$request->input("ville");
      $v->pays=$request->input("pays");

      $v->tel=$request->input("tel");
      $v->mail=$request->input("mail");
      $v->boutique=$request->input("boutique");
      $v->num_CIN_vendeur=$request->input("num_CIN_vendeur");
      $u->email=$request->input("mail");

      $u->password=bcrypt($request->input('password'));
      $u->save();
      $v->save();
      return view("home");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $v=Vendeur::findOrFail($id);
      $u = User::where('email','=',"$v->mail")->first();
      $b = Boutique::where('id','=',"$v->boutique")->first();

      $u->delete();
      $v->delete();
      $b->delete();
      return redirect('home');

  }
  
}

?>