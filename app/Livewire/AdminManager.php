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
use Spatie\Permission\Models\Role;

use function Laravel\Prompts\error;

class AdminManager extends Component
{
    use WithFileUploads;


    public $admin ;
    public $admin_id ;
    public $name ;
    public $email;
    public $loading = false;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
    ];

    public function placeholder()
    {
        return view('admin.placeholder.popup_placeholder');
    }



    public function resetForm()
    {

        $this->admin_id  = null ;
        $this->name  = null ;
        $this->email  = null ;
        $this->isEditing = false;
    }

    public function view($id)
    {
        $admin = User::findOrFail($id);
        $this->admin = $admin;
    }


    public function add()
    {
        $this->validate();
        try {
            $user = User::create([
                "email" => $this->email,
                "name" => $this->name,
                "password" => encrypt(rand(10000000,99999999)),
            ]);

           $adminRole = Role::firstOrCreate(['name' => 'Admin']);
            $user->assignRole($adminRole);

            $this->dispatch('swal',
                title : 'Création réussie',
                text : 'L\'admin a été créé avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

            $this->resetForm();
            $this->dispatch('close-modal');
            $this->dispatch('refreshDatatable');


        } catch (\Exception $e) {
            error($e);
            info($e);
            session()->flash('status', 'error');
            session()->flash('message', 'Une erreur est survenue lors de la création de l\'admin.');
            $this->dispatch('swal',
                title : 'Erreur',
                text : 'Une erreur est survenue lors de la création de l\'admin. Veuillez réessayer.',
                icon : 'error',
                iconColor : '#d33',
            );
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->admin_id  = $id ;
        $this->name  = $user->name  ;
        $this->email  = $user->email  ;
        $this->isEditing = true ;
    }

    public function update()
    {
        $validated_data = $this->validate();

        try {
            $user = User::findOrFail($this->user_id);
            $user->update($validated_data);

            session()->flash('status', 'success');
            session()->flash('message', 'Mise à jour réussie');
            $this->dispatch('swal',
                title : 'Mise à jour réussie',
                text : 'L\'admin a été mis à jour avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

            $this->resetForm();
            $this->dispatch('close-modal');
            $this->dispatch('refreshDatatable');
        } catch (\Exception $e) {
            session()->flash('status', 'error');
            session()->flash('message', 'Une erreur est survenue lors de la mise à jour de l\'admin.');
            $this->dispatch('swal', [
                'title' => 'Erreur',
                'text' => 'Une erreur est survenue lors de la mise à jour de l\'admin. Veuillez réessayer.',
                'icon' => 'error',
                'iconColor' => '#d33',
            ]);
        }
    }

    public function delete($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            
            $this->dispatch('swal',
                title : 'Suppression réussie',
                text : 'L\'admin  a été supprimé avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

            $this->dispatch('refreshDatatable');

        } catch (\Exception $e) {

            session()->flash('status', 'error');
            session()->flash('message', 'Une erreur est survenue lors de la suppression de l\'admin.');
            $this->dispatch('swal',
                title : 'Erreur',
                text : $e->getMessage(),
                icon : 'error',
                iconColor : '#d33',
            );
        }
    }
   
    public function render()
    {
        $users = User::all();
       
        return view('livewire.admin-manager', [
            'users' => $users ,
        ]);
    }


}
