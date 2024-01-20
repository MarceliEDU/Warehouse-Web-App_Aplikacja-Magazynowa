<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produkty;
use App\Models\Dzialy;
use App\Models\Wychodzace;
use App\Models\Zejscia;

class LookCont extends Controller
{
    public function index()
    {
        $dz = Dzialy::all();
        $temp;
        $tab = [];
        foreach($dz as $d){
            $d->toArray();
            $temp = Produkty::where("id_dzialy",$d['id'])->get();
            $temp = array(
                'dzial'=>$d['dzial'],
                'produkty'=>$temp
            );
            array_push($tab,$temp);
        }
        $prod = Produkty::all();

        return view ('look.index')->with('prod', $prod)->with('dz', $dz)->with('tab', $tab);
    }


    public function create()
    {
        $dz = Dzialy::all();
        $temp;
        $tab = [];
        foreach($dz as $d){
            $d->toArray();
            $temp = Produkty::where("id_dzialy",$d['id'])->get();
            $temp = array(
                'dzial'=>$d['dzial'],
                'produkty'=>$temp
            );
            array_push($tab,$temp);
        }
        $prod = Produkty::all();
        return view('look.create')->with('prod', $prod)->with('dz', $dz)->with('tab', $tab);
    }

    public function store(Request $request)
    {
        $message = "Nie powinieneś tego widzieć :P";
        switch($request->inout){
        case "out":
            $zejscie = new Zejscia;
            $zejscie->czy_zeszlo = 0;
            $zejscie->save();

            foreach ($request->all() as $prodId => $value) {
                if (is_numeric($prodId)) {
                    $q = $request->input('number' . $prodId);
                    
                    $wychodzi = new Wychodzace;
                    $wychodzi->id_zejscia = $zejscie->id;
                    $wychodzi->id_produkty = $prodId;
                    $wychodzi->save();

                    $produkt = Produkty::find($prodId);
                    $il = $produkt->ilosc;
                    $produkt->ilosc = $il-$q;
                    $produkt->save();
                }
            }
            $message = 'Towar wydano.';
        break;
        case "in":
            $message = 'Do implementacji.';
        break;
        } 
        return redirect('look')->with('message', $message);
    }


    public function edit($id)
    {
        try {
            // Znajdź rekord do edycji
            $produkt = Produkty::findOrFail($id);
            $dz = Dzialy::all();
            // Przekieruj do widoku edycji z danymi rekordu
            return view('look.edit', compact('produkt','dz'));
        } catch (\Exception $e) {
            // Przekieruj z komunikatem błędu
            return redirect('/look')->with('message', 'Wystąpił błąd podczas edycji.');
        }
    }

    public function update(Request $request, $id)
    {
        $prodial = Produkty::findOrFail($id);
        $dane = $request->validate([
            'id_dzialy' => 'required',
        ]);
        $prodial->update($dane);
        return redirect('look')->with('message', 'Edycja wykonana pomyślnie.');
    }


}
