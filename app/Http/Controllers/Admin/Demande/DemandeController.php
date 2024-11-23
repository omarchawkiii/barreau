<?php

namespace App\Http\Controllers\Admin\Demande;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Demande\AddedDemandeRequest;
use App\Http\Requests\Admin\Demande\UpdateDemandeRequest;
use App\Http\Requests\Admin\Demande\UpdateDossierRequest;
use App\Models\DemandeServAgrement;
use App\Models\Dossier;
use App\Models\Stagiaire;
use App\Models\TypeAgrement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandeServAgrements = DemandeServAgrement::orderBy("id","desc")->get();
//dd($demandeServAgrements->stagiaires);
        return view("admin.demandes.index", compact("demandeServAgrements"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeAgrements = TypeAgrement::all()->toBase();
        $stagiaires = Stagiaire::orderBy('id', 'DESC')->get();

        return view("admin.demandes.add", compact("typeAgrements", "stagiaires") );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddedDemandeRequest $request)
    {
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

            toastr()->success(__('Demande ajouter avec succès.'));

            DB::commit();
            return redirect()->route('admin.demandes.edit', $demandeServAgrement->id )->withSuccess('Demande ajouter avec succès.');


        }
        catch (\Exception  $e) {
            DB::rollBack();
            toastr()->error($e);
            return redirect()->back()->withErrors($e);
        }
    }

    /** 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $demandeServAgrement = DemandeServAgrement::find($id);

        return view("admin.demandes.show", compact("demandeServAgrement"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $typeAgrements = TypeAgrement::all()->toBase();
        $demandeServAgrement = DemandeServAgrement::find($id);

        return view("admin.demandes.edit", compact("demandeServAgrement", "typeAgrements"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDemandeRequest $request, string $id)
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
                $randomId =  rand(3,999);
                $titreSlug = Str::of($titreFichers[$index])->slug('-');
                $file = $ficher;
                $fileExtension =  $file->getClientOriginalExtension() ;
                $fileName = $titreSlug.'-'.$randomId.'-'.time().'.'.$fileExtension ;

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

            toastr()->success(__('Demande modifier avec succès.'));

            DB::commit();

            return redirect()->back()->withSuccess(__('Demande modifier avec succès.'));


        }
        catch (\Exception  $e) {
            DB::rollBack();
            toastr()->error($e);
            return redirect()->back()->withErrors($e);
        }
    }

    public function editDossier(Request $request, $id)
    {
        $dosser = Dossier::find($id);

        if($request->ajax())
        {
            return response()->json([
                'status' => true,
                'data' => $dosser,
            ]);
        }
    }

    public function updateDosseir(UpdateDossierRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $randomId =  rand(3,999);
            $dossier = Dossier::find($id);
            $ficher = $request->ficher;
            $titreFicher = $request->input('titre_ficher');
            $titreSlug = Str::of($titreFicher)->slug('-');

            $file = $ficher;
            $fileExtension =  $file->getClientOriginalExtension() ;
            $fileName = $titreSlug.'-'.$randomId.'-'.time().'.'.$fileExtension ;

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

            toastr()->success(__('Dossier modifier avec succès.'));

            DB::commit();

            return response()->json([
                'status'=> true,
                'message'=> __('Dossier modifier avec succès.'),
            ]);

        }
        catch (\Exception $e){
            DB::rollback();
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try
        {
            DB::beginTransaction();
            $dossiers = Dossier::whereDemandeServAgrementId($id)->get(['documents']);
            foreach ($dossiers as  $dossier) {
                if ($dossier->documents['nom']) {
                    $filePath = $dossier->documents['nom'];
                     if (Storage::disk('public')->exists($filePath)) {
                        // Delete the file
                        Storage::disk('public')->delete($filePath);
                    }
                }
            }
            $demandeServAgrement = DemandeServAgrement::find($id);
            $demandeServAgrement->delete();
            toastr()->success(__('Demande supprimée avec succès.'));

            DB::commit();
            return redirect()->back();
        }
        catch (\Exception  $e) {
            DB::rollBack();
            toastr()->error($e);
            return redirect()->back()->withErrors($e);
        }
    }

    public function destroyDossier($id)
    {
        try
        {
            DB::beginTransaction();

            $dossier = Dossier::find($id);
            if ($dossier->documents['nom']) {
                $filePath = $dossier->documents['nom'];
                 if (Storage::disk('public')->exists($filePath)) {
                    // Delete the file
                    Storage::disk('public')->delete($filePath);
                }
            }
            $dossier->delete();
            toastr()->success(__('Dossier supprimée avec succès.'));

            DB::commit();
            return response()->json([
                'status'=> true,
                'message' => 'Dossier supprimée avec succès.'
            ]);
            // return redirect()->back();
        }
        catch (\Exception  $e) {
            DB::rollBack();
            toastr()->error($e);
            return redirect()->back()->withErrors($e);
        }
    }

    public function statusDemande(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $demandeServAgrement = DemandeServAgrement::find($id);

            $demandeServAgrement->update([
                'status'=> $request->status,
            ]);

            toastr()->success(__('Le statut de la demande a été modifié avec succès'));
            Db::commit();
            return redirect()->back()->withSuccess('Le statut de la demande a été modifié avec succès');
        }
        catch (\Exception  $e) {
            DB::rollBack();
            toastr()->error($e);
            return redirect()->back()->withErrors($e);
        }
    }
}
