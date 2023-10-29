<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\PersonalSiteDetailController;


class VehicleSearch extends Component
{
    public $search = '';
    public $newVehicles = [];
    public $usedVehicles = [];
    public $personalDealerSite;
    public $dealerTheme;


    public function mount($personalDealerSite, $dealerTheme) {
        $controller = new PersonalSiteDetailController();
    
        $newVehiclesData = $controller->fetchAirtableData($personalDealerSite->user, 'new');
        $this->newVehicles = $this->transformVehicles($newVehiclesData);
    
        $usedVehiclesData = $controller->fetchAirtableData($personalDealerSite->user, 'used');
        $this->usedVehicles = $this->transformVehicles($usedVehiclesData);

        $this->dealerTheme = $dealerTheme;
    }
    

    
    protected function transformVehicles($vehiclesData) {
        // Here, transform the $vehiclesData into a simple array structure.
        // Depending on your data's structure, this function might look different.
        return array_map(function($vehicle) {
            return [
                'Vehicle' => $vehicle->fields->{'Vehicle'},
                'Color' => $vehicle->fields->{'Color'},
                'Stock' => $vehicle->fields->{'Stock'},
                'MSRP' => $vehicle->fields->{'MSRP'} ?? 'N/A',
                'Image' => $vehicle->fields->{'Image'},
            ];
        }, $vehiclesData['records']);
    }

    
    
    

    public function updatedSearch() {
        $searchLower = strtolower($this->search);
    
        $this->newVehicles = array_filter($this->newVehicles, function($vehicle) use ($searchLower) {
            return strpos(strtolower($vehicle['Vehicle']), $searchLower) !== false || strpos(strtolower($vehicle['Color']), $searchLower) !== false;
        });
    
        $this->usedVehicles = array_filter($this->usedVehicles, function($vehicle) use ($searchLower) {
            return strpos(strtolower($vehicle['Vehicle']), $searchLower) !== false || strpos(strtolower($vehicle['Color']), $searchLower) !== false;
        });
    }
    public function clearSearch() {
        $this->search = '';
        $this->mount($this->personalDealerSite, $this->dealerTheme); // Pass $this->dealerTheme as well
    }    
        
    public function render()
{
    return view('livewire.vehicle-search', [
        'newVehicles' => $this->newVehicles,
        'usedVehicles' => $this->usedVehicles
    ]);
}

}
