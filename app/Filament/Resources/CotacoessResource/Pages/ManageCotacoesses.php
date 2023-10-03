<?php

namespace App\Filament\Resources\CotacoessResource\Pages;

use App\Filament\Resources\CotacoessResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCotacoesses extends ManageRecords
{
    protected static string $resource = CotacoessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
