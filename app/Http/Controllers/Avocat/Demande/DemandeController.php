<?php

namespace App\Http\Controllers\Avocat\Demande;

use App\Http\Controllers\Controller;
use App\Http\Requests\Demandes\AjouterDemandeRequest;
use App\Http\Requests\Demandes\ModifierDemandeRequest;
use App\Http\Requests\Demandes\ModifierDossierRequest;
use App\Models\DemandeServAgrement;
use App\Models\Dossier;
use App\Models\TypeAgrement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class DemandeController extends Controller
{
    public function index()
    {
        $demandeServAgrements = DemandeServAgrement::orderBy('id', 'DESC')->get();
        return view('avocat.demandes.index', compact('demandeServAgrements'));
    }

    public function create()
    {
        $typeAgrements = TypeAgrement::all()->toBase();

        return view('avocat.demandes.ajouter', compact('typeAgrements'));
    }

    public function store(AjouterDemandeRequest $request)
    {
        // The validated data will be automatically validated
        $validatedData = $request->validated();

        try {
            DB::beginTransaction();

            $fichers = $request->fichers;
            $titreFichers = $request->input('titre_fichers');

            $typeAgrement = TypeAgrement::find($request->type_agrement_id);

            $demandeServAgrement = new DemandeServAgrement();
            $demandeServAgrement->type_agrement_id = $request->type_agrement_id;
            $demandeServAgrement->nom = $typeAgrement->nom_fr;
            $demandeServAgrement->stagiaire_id = 1;
            $demandeServAgrement->depot = now()->format('Y-m-d');
            $demandeServAgrement->id_maitre_de_stage = 012345;
            $demandeServAgrement->save();

            foreach ($fichers as $index => $ficher) {

                $titreSlug = Str::of($titreFichers[$index])->slug('-');
                $file = $ficher;
                $fileExtension =  $file->getClientOriginalExtension() ;
                $fileName = $titreSlug.'-'.time().'.'.$fileExtension ;

                $filePath = $file->storeAs('documents/demandes/avocat', $fileName, 'public');

                $document = [
                    'nom' =>  $filePath,
                    'titre' => ucfirst($titreFichers[$index]),
                    'extension' => $fileExtension,
                ];
                // dd($document, json_encode($document));
                $dossier = new Dossier();
                $dossier->demande_serv_agrement_id = $demandeServAgrement->id;
                $dossier->numero_dossier = 012345;
                $dossier->documents = $document ;
                $dossier->save();
            }

            //toastr()->success(__('Demande ajouter avec succès.'));

            DB::commit();

            return redirect()->route('demandes.modifier', $demandeServAgrement->id )->withSuccess('Demande ajouter avec succès.');
        }
        catch (\Exception  $e) {
            DB::rollBack();
           // toastr()->error($e);
            return redirect()->back()->withErrors('Ajout échoué');
        }


    }

    public function show($id)
    {
        $typeAgrements = TypeAgrement::all()->toBase();
        $demandeServAgrement = DemandeServAgrement::with('dossier')->find($id);
        // dd($demandeServAgrement);
        return view('avocat.demandes.show' , compact('typeAgrements','demandeServAgrement'));
    }

    public function edit($id)
    {
        $typeAgrements = TypeAgrement::all()->toBase();
        $demandeServAgrement = DemandeServAgrement::with('dossier')->find($id);
        return view('avocat.demandes.edit' , compact('typeAgrements','demandeServAgrement'));
    }
    public function editDossier($id)
    {
        $dosser = Dossier::find($id);
        return view('avocat.demandes.edit-dossier' , compact('dosser'));
    }

    public function update(ModifierDemandeRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $fichers = $request->fichers;
            $titreFichers = $request->input('titre_fichers');

            $typeAgrement = TypeAgrement::find($request->type_agrement_id);
            $demandeServAgrement = DemandeServAgrement::find($id);

            $demandeServAgrement->update([
                'type_agrement_id' => $request->type_agrement_id,
                'nom'              => $typeAgrement->nom_fr,
                'depot'              => now()->format('Y-m-d'),
                'id_maitre_de_stage' => 654321,
            ]);

            foreach ($fichers as $index => $ficher) {

                $titreSlug = Str::of($titreFichers[$index])->slug('-');
                $file = $ficher;
                $fileExtension =  $file->getClientOriginalExtension() ;
                $fileName = $titreSlug.'-'.time().'.'.$fileExtension ;

                $filePath = $file->storeAs('documents/demandes/avocat', $fileName, 'public');

                $document = [
                    'nom' =>  $filePath,
                    'titre' => ucfirst($titreFichers[$index]),
                    'extension' => $fileExtension,
                ];

                Dossier::create([
                    'demande_serv_agrement_id'  => $demandeServAgrement->id,
                    'numero_dossier'            => 012345,
                    'documents'                 => $document,
                ]);

            }

           // toastr()->success(__('Demande modifier avec succès.'));

            DB::commit();

            return redirect()->back()->withSuccess(__('Demande modifier avec succès.'));
        }
        catch (\Exception  $e) {
            DB::rollBack();
           // toastr()->error($e);
            return redirect()->back()->withErrors($e);
        }
    }
    public function updateDossier(ModifierDossierRequest $request, $id)
    {
        try {
            $dossier = Dossier::find($id);

            DB::beginTransaction();

            $ficher = $request->ficher;
            $titreFicher = $request->input('titre_ficher');
            $titreSlug = Str::of($titreFicher)->slug('-');

            $file = $ficher;
            $fileExtension =  $file->getClientOriginalExtension() ;
            $fileName = $titreSlug.'-'.time().'.'.$fileExtension ;

            $filePath = $file->storeAs('documents/demandes/avocat', $fileName, 'public');

            $document = [
                'nom' =>  $filePath,
                'titre' => ucfirst($titreFicher),
                'extension' => $fileExtension,
            ];

            if ($dossier->documents['nom']) {
                $filePath = $dossier->documents['nom'];
                 if (Storage::disk('public')->exists($filePath)) {
                    // Delete the file
                    Storage::disk('public')->delete($filePath);
                }
            }
            $dossier->update([
                'documents' => $document,
            ]);

           // toastr()->success(__('Dossier modifier avec succès.'));

            DB::commit();

            return redirect()->route('avocat.demandes.modifier', $dossier->demande_serv_agrement_id )->withSuccess(__('Dossier modifier avec succès.'));

        }
        catch (\Exception  $e) {
            DB::rollBack();
           // toastr()->error($e);
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try
        {
            DB::beginTransaction();

            $demandeServAgrement = DemandeServAgrement::find($id);
            $demandeServAgrement->delete();
           // toastr()->success(__('Demande supprimée avec succès.'));

            Db::commit();
            return redirect()->back();
        }
        catch (\Exception  $e) {
            DB::rollBack();
            //toastr()->error($e);
            return redirect()->back()->withErrors($e);
        }
    }

    public function destroyDossier($id)
    {
        try
        {
            DB::beginTransaction();

            $dossier = Dossier::find($id);
            $dossier->delete();
          //  toastr()->success(__('Dossier supprimée avec succès.'));

            Db::commit();
            return redirect()->back();
        }
        catch (\Exception  $e) {
            DB::rollBack();
           // toastr()->error($e);
            return redirect()->back()->withErrors($e);
        }
    }
}
