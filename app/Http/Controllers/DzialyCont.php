<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dzialy;

class DzialyCont extends Controller
{
    public function index()
    {
        $dz = Dzialy::paginate(50);
        return view ('dzialy.index')->with('dz', $dz);
    }

    public function create()
    {
        return view('dzialy.create');
    }

    public function store(Request $request)
    {
        $dz = $request->all();
        Dzialy::create($dz);
        return redirect('dzialy')->with('message', 'Dodano dział poprawnie.');
    }

    public function edit($id)
    {
        try {
            // Znajdź rekord do edycji
            $dzial = Dzialy::findOrFail($id);

            // Przekieruj do widoku edycji z danymi rekordu
            return view('dzialy.edit', compact('dzial'));
        } catch (\Exception $e) {
            // Przekieruj z komunikatem błędu
            return redirect('/dzialy')->with('message', 'Wystąpił błąd podczas edycji działu.');
        }
    }

    public function update(Request $request, $id)
    {
        $dzial = Dzialy::findOrFail($id);
        $dane = $request->validate([
            'dzial' => 'required',
        ]);
        $dzial->update($dane);
        return redirect('dzialy')->with('message', 'Edycja wykonana pomyślnie.');
    }

    public function destroy($id)
    {
        try {
            // Znajdź rekord do usunięcia
            $dz = Dzialy::findOrFail($id);

            // Usuń rekord
            $dz->delete();

            // Przekieruj z komunikatem sukcesu
            return redirect('/dzialy')->with('message', 'Dział został pomyślnie usunięty.');
        } catch (\Exception $e) {
            // Przekieruj z komunikatem błędu
            return redirect('/dzialy')->with('message', 'Wystąpił błąd podczas usuwania działu.');
        }
    }
}
