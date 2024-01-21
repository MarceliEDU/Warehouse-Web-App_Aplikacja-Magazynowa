<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dostawcy;

class DostawcyCont extends Controller
{
    public function index()
    {
        $dos = Dostawcy::paginate(50);
        return view ('dostawcy.index')->with('dos', $dos);
    }

    public function create()
    {
        return view('dostawcy.create');
    }

    public function store(Request $request)
    {
        $dos = $request->all();
        Dostawcy::create($dos);
        return redirect('dostawcy')->with('message', 'Dodano dostawcę poprawnie.');
    }

    public function edit($id)
    {
        try {
            // Znajdź rekord do edycji
            $dostawca = Dostawcy::findOrFail($id);

            // Przekieruj do widoku edycji z danymi rekordu
            return view('dostawcy.edit', compact('dostawca'));
        } catch (\Exception $e) {
            // Przekieruj z komunikatem błędu
            return redirect('/dostawcy')->with('message', 'Wystąpił błąd podczas edycji dostawcy.');
        }
    }

    public function update(Request $request, $id)
    {
        $dostawca = Dostawcy::findOrFail($id);
        $dane = $request->validate([
            'nazwa' => 'required',
            'telefon' => 'required',
        ]);
        $dostawca->update($dane);
        return redirect('dostawcy')->with('message', 'Edycja wykonana pomyślnie.');
    }

    public function destroy($id)
    {
        try {
            // Znajdź rekord do usunięcia
            $dos = Dostawcy::findOrFail($id);

            // Usuń rekord
            $dos->delete();

            // Przekieruj z komunikatem sukcesu
            return redirect('/dostawcy')->with('message', 'Dostawca został pomyślnie usunięty.');
        } catch (\Exception $e) {
            // Przekieruj z komunikatem błędu
            return redirect('/dostawcy')->with('message', 'Wystąpił błąd podczas usuwania dostawcy.');
        }
    }
}
