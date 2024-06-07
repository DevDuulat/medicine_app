<?php

namespace App\Filament\Resources\AnalysesResource\Pages;

use App\Filament\Resources\AnalysesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnalyses extends ListRecords
{
    protected static string $resource = AnalysesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
