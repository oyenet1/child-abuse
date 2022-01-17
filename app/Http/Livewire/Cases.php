<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\Data;
use Livewire\Component;
use Illuminate\Support\Carbon;

class Cases extends Component
{
    public $search, $area_id, $name, $age, $sex, $type, $summary, $status, $lga, $date_occurred, $perPage = 10;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'deleteConfirm' => 'delete',
    ];

    function add()
    {
        $this->update = false;
    }

    public function refreshInputs()
    {
        $this->name = null;
        $this->age = null;
        $this->sex = null;
        $this->area_id = null;
        $this->date_occurred = null;
        $this->lga = null;
        $this->status = null;
        $this->summary = null;
        $this->type = null;
    }

    public function save()
    {
        $data = $this->validate(
            [
                'name' => 'required',
                'area_id' => 'required|integer|not_in:select',
                'age' => 'required|integer|max:17',
                'date_occurred' => ['required', 'date', 'before:' . Carbon::tomorrow()],
                'lga' => 'required',
                'sex' => 'required|not_in:select',
                'summary' => 'required|min:10',
                'type' => 'required|not_in:select',
                'status' => 'required|not_in:select',
            ]
        );
// dd($data);
        $saved = Data::create($data);


        if ($saved) {
            $this->refreshInputs();
            $this->dispatchBrowserEvent('closeModal');
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'Case added to records successfully',
                'title' => 'Case Added',
                'timer' => 3000,
            ]);
        }
    }
    public function confirmDelete($id)
    {
       
        $cases = Data::findOrFail($id);

        $this->delete = $id;

        $this->dispatchBrowserEvent('swal:confirm');
    }

    public function delete()
    {

        $cases = Data::findOrFail($this->delete);

        $true = $cases->delete();

        if ($true) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'Case has deleted Successfully from abuse records',
                'title' => 'Case Deleted',
                'timer' => 4000,
            ]);
        }
        $this->update = false;
    }

    public function render()
    {
        $search = '%' . $this->search . '%';
        $states = Area::latest()->orderBy('state', 'asc')->get();
        $cases = Data::with('area')->where('name', 'LIKE', $search)->orWhere('status', 'LIKE', $search)->orWhere('type', 'LIKE', $search)->paginate($this->perPage);
        return view('livewire.cases', compact(['cases', 'states']));
    }
}
