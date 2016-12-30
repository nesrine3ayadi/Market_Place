<?php 

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
      if (Auth::check()) {
          if (Auth::user()->role!=2){
          $clients = Client::all();
              $c = new CommandeController();
              $c->update_somme($request);
          return view('client.index')->with('clients',$clients);
          }else{
              $c = new CommandeController();
              $c->update_somme($request);
              return redirect('home');
          }
      }else{
          $c = new CommandeController();
          $c->update_somme($request);
          return redirect('home');
      }


  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

      if (Auth::guest()){
          return view('client.create');
      }else
      {
          return redirect("/");
      }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

      $r= $request->all();
      $client = new Client($r);
   //   dd($client);

      User::create([
          'name' => $request->input('Nom'),
          'email' => $request->input('mail'),
          'password' => bcrypt($request->input('password')),
          'role'    => 2
      ]);
      $client->save();


      return redirect('client');


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
      $clients = Client::findOrFail($id);
      $user = User::where('email','=',"$clients->mail")->first();
      if(($clients->id==$id) && (Auth::user()->email==$clients->mail)) {
        return view('client.profile')->with(['clients' => $clients,
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
  public function update($id,Request $request)
  {

      $c=Client::findOrFail($id);

      $u = User::where('email','=',"$c->mail")->first();

      $c->Nom=$request->input("nom");
      $u->name=$request->input("nom");

      $c->Prenom=$request->input("prenom");
      $c->adresse=$request->input("code_postal");
      $c->ville=$request->input("ville");
      $c->sexe=$request->input("sexe");
      $c->mail=$request->input("mail");
      $u->name=$request->input("nom");

      $u->email=$request->input("mail");
      $u->password=bcrypt($request->input('password'));
      $u->save();
      $c->save();
      return redirect("client");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $c=Client::findOrFail($id);
      $u = User::where('email','=',"$c->mail")->first();
         $u->delete();
      $c->delete();
      return redirect('home');

  }
  
}

?>