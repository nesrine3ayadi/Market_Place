<?php 

namespace App\Http\Controllers;

use App\Client;
use App\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluationController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $evaluation=Evaluation::all();
      return view('evaluation.index')->with('evaluation',$evaluation);


  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      if(Auth::check()){

              return view('evaluation.create');
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
      $eval= $request->all();
      $evaluation=new Evaluation($eval);

      $evaluation->user=Auth::user()->id;
      $evaluation->save();
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
              $evaluation = Evaluation::findOrFail($id)->first();
              $client=Client::where('mail','like',Auth::user()->email)->first();

              return view('evaluation.edit')->with('evaluation',$evaluation);





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
  public function update($id, Request $request)
  {
      $evaluation=Evaluation::findOrFail($id)->update($request->all());
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
      $evaluation=Evaluation::findOrFail($id);
      $evaluation->delete();
      return back();
  }
  
}

?>