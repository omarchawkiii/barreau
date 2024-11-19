<?php

namespace App\Livewire;

use App\Http\Requests\LawyerStoreRequest;
use App\Models\CatNews;
use App\Models\Lawyer;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

use function Laravel\Prompts\error;

class ImportLawyer extends Component
{
    use WithFileUploads;


    public $lawyer_id ;
    public $code ;
    public $nom_arb ;
    public $prenom_arb ;
    public $date_naiss ;
    public $nom_fr ;
    public $prenom_fr ;
    public $etat ;
    public $date_serment ;
    public $lieu_serm ;
    public $grade ;
    public $tribunal ;
    public $adresse_prof_arb ;
    public $commune ;
    public $willaya ;
    public $adresse_fr ;
    public $fin_contrat_local ;
    public $date_expir_carte ;
    public $local ;
    public $adresse_domic ;
    public $majles ;
    public $fonction ;
    public $sexe ;
    public $depot ;
    public $mutation ;
    public $date_capa ;
    public $ex_proff ;
    public $scotab ;
    public $sit_prof ;
    public $date_reglement ;
    public $datcosup ;
    public $lieu_nais_arb ;
    public $lieu_nais_fr ;
    public $willaya_nais_fr ;
    public $fin_carte_prof ;
    public $tel ;
    public $fax ;
    public $mob ;
    public $email ;
    public $num_act_nais ;
    public $nom_pere ;
    public $nom_mere ;
    public $user_id ;
    public $excelFile ;
    public $loading = false;
    public $isEditing = false;

    protected $rules;

    public function placeholder()
    {
        return view('admin.placeholder.popup_placeholder');
    }


    public function resetForm()
    {

        $this->lawyer_id  = null ;
        $this->code  = null ;
        $this->nom_arb  = null ;
        $this->prenom_arb  = null ;
        $this->date_naiss  = null ;
        $this->nom_fr  = null ;
        $this->prenom_fr  = null ;
        $this->etat  = null ;
        $this->date_serment  = null ;
        $this->lieu_serm  = null ;
        $this->grade  = null ;
        $this->tribunal  = null ;
        $this->adresse_prof_arb  = null ;
        $this->commune  = null ;
        $this->willaya  = null ;
        $this->adresse_fr  = null ;
        $this->fin_contrat_local  = null ;
        $this->date_expir_carte  = null ;
        $this->local  = null ;
        $this->adresse_domic  = null ;
        $this->majles  = null ;
        $this->fonction  = null ;
        $this->sexe  = null ;
        $this->depot  = null ;
        $this->mutation  = null ;
        $this->date_capa  = null ;
        $this->ex_proff  = null ;
        $this->scotab  = null ;
        $this->sit_prof  = null ;
        $this->date_reglement  = null ;
        $this->datcosup  = null ;
        $this->lieu_nais_arb  = null ;
        $this->lieu_nais_fr  = null ;
        $this->willaya_nais_fr  = null ;
        $this->fin_carte_prof  = null ;
        $this->tel  = null ;
        $this->fax  = null ;
        $this->mob  = null ;
        $this->email  = null ;
        $this->num_act_nais  = null ;
        $this->nom_pere  = null ;
        $this->nom_mere  = null ;
        $this->user_id  = null ;
        $this->isEditing = false;
        $this->excelFile = null;

    }

    public function add()
    {
        $validated_data = $this->validate((new LawyerStoreRequest())->rules());
        try {

            $user = User::create([
                "email" => $this->email,
                "name" => $this->nom_fr ." ".$this->prenom_fr,
                "password" => encrypt(rand(10000000,99999999)),
            ]);

            Lawyer::create(array_merge($validated_data, ['user_id'=>$user->id]));

            $this->dispatch('swal',
                title : 'Création réussie',
                text : 'L\'événement a été créé avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

            $this->resetForm();
            $this->dispatch('close-modal');
            $this->dispatch('refreshDatatable');


        } catch (\Exception $e) {
            session()->flash('status', 'error');
            session()->flash('message', 'Une erreur est survenue lors de la création de l\'événement.');
            $this->dispatch('swal',
                title : 'Erreur',
                text : 'Une erreur est survenue lors de la création de l\'événement. Veuillez réessayer.',
                icon : 'error',
                iconColor : '#d33',
            );
        }
    }

    public function edit($id)
    {
        $lawyer = Lawyer::findOrFail($id);

        $this->lawyer_id  = $id ;
        $this->code  = $lawyer->code  ;
        $this->nom_arb  = $lawyer->nom_arb  ;
        $this->prenom_arb  = $lawyer->prenom_arb  ;
        $this->date_naiss  = $lawyer->date_naiss  ;
        $this->nom_fr  = $lawyer->nom_fr  ;
        $this->prenom_fr  = $lawyer->prenom_fr  ;
        $this->etat  = $lawyer->etat  ;
        $this->date_serment  = $lawyer->date_serment  ;
        $this->lieu_serm  = $lawyer->lieu_serm  ;
        $this->grade  = $lawyer->grade  ;
        $this->tribunal  = $lawyer->tribunal  ;
        $this->adresse_prof_arb  = $lawyer->adresse_prof_arb  ;
        $this->commune  = $lawyer->commune  ;
        $this->willaya  = $lawyer->willaya  ;
        $this->adresse_fr  = $lawyer->adresse_fr  ;
        $this->fin_contrat_local  = $lawyer->fin_contrat_local  ;
        $this->date_expir_carte  = $lawyer->date_expir_carte  ;
        $this->local  = $lawyer->local  ;
        $this->adresse_domic  = $lawyer->adresse_domic  ;
        $this->majles  = $lawyer->majles  ;
        $this->fonction  = $lawyer->fonction  ;
        $this->sexe  = $lawyer->sexe  ;
        $this->depot  = $lawyer->depot  ;
        $this->mutation  = $lawyer->mutation  ;
        $this->date_capa  = $lawyer->date_capa  ;
        $this->ex_proff  = $lawyer->ex_proff  ;
        $this->scotab  = $lawyer->scotab  ;
        $this->sit_prof  = $lawyer->sit_prof  ;
        $this->date_reglement  = $lawyer->date_reglement  ;
        $this->datcosup  = $lawyer->datcosup  ;
        $this->lieu_nais_arb  = $lawyer->lieu_nais_arb  ;
        $this->lieu_nais_fr  = $lawyer->lieu_nais_fr  ;
        $this->willaya_nais_fr  = $lawyer->willaya_nais_fr  ;
        $this->fin_carte_prof  = $lawyer->fin_carte_prof  ;
        $this->tel  = $lawyer->tel  ;
        $this->fax  = $lawyer->fax  ;
        $this->mob  = $lawyer->mob  ;
        $this->email  = $lawyer->email  ;
        $this->num_act_nais  = $lawyer->num_act_nais  ;
        $this->nom_pere  = $lawyer->nom_pere  ;
        $this->nom_mere  = $lawyer->nom_mere  ;
        $this->user_id  = $lawyer->user_id  ;
        $this->isEditing = true ;
    }

    public function update()
    {
        $validated_data = $this->validate((new LawyerStoreRequest())->rules());
        
        
        try {
            $lawyer = Lawyer::findOrFail($this->lawyer_id);
            $lawyer->update($validated_data);

            session()->flash('status', 'success');
            session()->flash('message', 'Mise à jour réussie');
            $this->dispatch('swal',
                title : 'Mise à jour réussie',
                text : 'L\'événement a été mis à jour avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

            $this->resetForm();
            $this->dispatch('close-modal');
            $this->dispatch('refreshDatatable');
        } catch (\Exception $e) {
            session()->flash('status', 'error');
            session()->flash('message', 'Une erreur est survenue lors de la mise à jour de l\'événement.');
            $this->dispatch('swal', [
                'title' => 'Erreur',
                'text' => 'Une erreur est survenue lors de la mise à jour de l\'événement. Veuillez réessayer.',
                'icon' => 'error',
                'iconColor' => '#d33',
            ]);
        }
    }

    public function delete($id)
    {
        try {
            $lawyer = Lawyer::findOrFail($id);
            $user = User::findOrFail($lawyer->user_id);
            $user->delete();
            $lawyer->delete();
            $this->dispatch('swal',
                title : 'Suppression réussie',
                text : 'L\'avocat  a été supprimé avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

            $this->dispatch('refreshDatatable');

        } catch (\Exception $e) {

            session()->flash('status', 'error');
            session()->flash('message', 'Une erreur est survenue lors de la suppression de l\'événement.');
            $this->dispatch('swal',
                title : 'Erreur',
                text : $e->getMessage(),
                icon : 'error',
                iconColor : '#d33',
            );
        }
    }
    public function upload_lawyer()
    {
        $this->rules = $this->rulesForUpload;
        $this->validate(['excelFile' => 'required|file']);
        try
        {
            $this->loading = true;

                $data = Excel::toArray(new ImportLawyer, $this->excelFile->getRealPath());
                DB::beginTransaction();
                foreach ($data[0] as $row) {

                if($row[38])
                {

                    $user = User::updateOrCreate([
                        'email' => $row[38]
                    ], [
                        'email' => $row[38],
                        'name' => $row[5] . ' ' . $row[6],
                        'password' => Hash::make('password') // Générer un mot de passe temporaire
                    ]);

                    // Créer l'avocat
                    Lawyer::updateOrCreate(
                        [
                            'user_id' => $user->id
                        ],[
                        'code' => $row[1],
                        'nom_arb' => $row[2],
                        'prenom_arb' => $row[3],
                        'date_naiss' => $row[4],
                        'nom_fr' => $row[5],
                        'prenom_fr' => $row[6],
                        'etat' => $row[7],
                       'date_serment' => $row[8],
                        'lieu_serm' => $row[9],
                        'grade' => $row[10],
                        'tribunal' => $row[11],
                        'adresse_prof_arb' => $row[12],
                        'commune' => $row[13],
                        'willaya' => $row[14],
                        'adresse_fr' => $row[15],
                        'fin_contrat_local' => $row[16],
                        'date_expir_carte' => $row[17],
                        'local' => $row[18],
                        'adresse_domic' => $row[19],
                        'majles' => $row[20],
                        'fonction' => $row[21],
                        'sexe' => $row[22],
                        'depot' => $row[23],
                         'mutation' => $row[24],
                       // 'date_capa' => $row[25],
                        //'ex_proff' => $row[26],
                        //'scotab' => $row[27],
                        //'sit_prof' => $row[28],
                        //'date_reglement' => $row[29],
                        /*'datcosup' => $row[30],
                        'lieu_nais_arb' => $row[31],
                        'lieu_nais_fr' => $row[32],
                        'willaya_nais_fr' => $row[33],
                        'fin_carte_prof' => $row[34],*/
                        'tel' => $row[35],
                        'fax' => $row[36],
                        'mob' => $row[37],
                        'email' => $row[38],
                        'num_act_nais' => $row[39],
                        'nom_pere' => $row[40],
                        'nom_mere' => $row[41],
                        'user_id' => $user->id
                    ]);
                }
            }

            DB::commit();
            $this->dispatch('refreshDatatable');
            session()->flash('message', 'Le fichier a été importé avec succès.');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Erreur lors de l\'importation: ' . $e->getMessage());
        } finally {

            $this->loading = false;
            $this->dispatch('swal',
                title : 'Création réussie',
                text : 'L\'événement a été créé avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

            $this->resetForm();
            $this->dispatch('close-modal');
        }
    }
    public function render()
    {
        $users = User::all();
        $lawyers = Lawyer::all() ;

        return view('livewire.import-lawyer', [
            'users' => $users ,
            'lawyers' => $lawyers,
        ]);
    }


}
