<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
class jogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */







    public function index()
    {
        //


        $jogos = Game ::all();
        return view('dashboard',compact('jogos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $data = $request->validate([
            'name' =>'required|min:3|max:255',
            'imagem',
        ]);

        $userId = Auth::id();

        $files = $request->file('attachment');


        $path ='userGames/' . $data['name'] . $userId;

    //    $file = $request->file('imagem')->store($path);



            $img = $request->file('imagem');


            $imgnome= $data['name'].'.'. $img->getClientOriginalExtension();

            $img->move($path,$imgnome);




        if($request->hasFile('attachment'))
         {
         foreach ($files as $file) {

            $filenome = $file->getClientOriginalName();

            $file->move($path.'/game', $filenome);
      //  $file->store($path . '/game');
        }
    }
        //gravar
        $game= new Game;

        $game->name= $data['name'];
        $game->nomeImagem= $imgnome;
        $game->user_id= $userId;

        $game->save();


        return redirect('dashboard')->with('status','Jogo criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $jogos = Game ::all();

        return view('game.jogosDoUser',compact('jogos','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jogo = Game::find($id);
        $userId = Auth::id();


        
        File::deleteDirectory(public_path('userGames/'.$jogo->name.$userId));


        Game::where('id',$id)->delete();

        return redirect('dashboard')->with('status','Jogo eliminado com sucesso!');
    }
}
