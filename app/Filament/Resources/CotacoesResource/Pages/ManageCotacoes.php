<?php

namespace App\Filament\Resources\CotacoesResource\Pages;

use App\Filament\Resources\CotacoesResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCotacoes extends ManageRecords
{
    protected static string $resource = CotacoesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
