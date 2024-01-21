<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produkty;
use App\Models\Dzialy;
use App\Models\Dostawcy;

class ProduktyCont extends Controller
{
    public function index()
    {
        $prod = Produkty::paginate(50);
        $dz = Dzialy::all()->toArray();
        $dzialy = array_column($dz, "dzial", "id");
        $dos = Dostawcy::all()->toArray();
        $dostawcy = array_column($dos, "nazwa", "id");
        return view ('produkty.index')->with('prod', $prod)->with('dz', $dzialy)->with('dos', $dostawcy);
    }

    public function create()
    {
        $dz = Dzialy::all();
        $dos = Dostawcy::all();
        return view('produkty.create')->with('dz',$dz)->with('dos',$dos);
    }

    public function store(Request $request)
    {
        $prod = $request->all();
        Produkty::create($prod);
        return redirect('produkty')->with('message', 'Dodano produkt poprawnie.');
    }

    public function edit($id)
    {
        try {
            // Znajdź rekord do edycji
            $produkt = Produkty::findOrFail($id);
            $dz = Dzialy::all();
            $dos = Dostawcy::all();
            // Przekieruj do widoku edycji z danymi rekordu
            return view('produkty.edit', compact('produkt','dz','dos'));
        } catch (\Exception $e) {
            // Przekieruj z komunikatem błędu
            return redirect('/produkty')->with('message', 'Wystąpił błąd podczas edycji produktu.');
        }
    }

    public function update(Request $request, $id)
    {
        $prodial = Produkty::findOrFail($id);
        $dane = $request->validate([
            'nazwa' => 'required',
            'ilosc' => 'required',
            'id_dzialy' => 'required',
        ]);
        $prodial->update($dane);
        return redirect('produkty')->with('message', 'Edycja wykonana pomyślnie.');
    }

    public function destroy($id)
    {
        try {
            // Znajdź rekord do usunięcia
            $prod = Produkty::findOrFail($id);

            // Usuń rekord
            $prod->delete();

            // Przekieruj z komunikatem sukcesu
            return redirect('/produkty')->with('message', 'Produkt został pomyślnie usunięty.');
        } catch (\Exception $e) {
            // Przekieruj z komunikatem błędu
            return redirect('/produkty')->with('message', 'Wystąpił błąd podczas usuwania produktu.');
        }
    }
}
