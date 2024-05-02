<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Pages\Actions;
use Livewire\WithFileUploads;
use Filament\Forms;

use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;
    use WithFileUploads;

    public $file;

    protected function getActions(): array
    {
        return [
            Actions\Action::make('import')->label('Import')->component('filament::components.form-input')->props([
                'type' => 'file',
                'wire:model' => 'file',
            ]),
            Actions\Action::make('export')->url(url('/customer/export')),
            Actions\CreateAction::make(),
        ];
    }

    

}
