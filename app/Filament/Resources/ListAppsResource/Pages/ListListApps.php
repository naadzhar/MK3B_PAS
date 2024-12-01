<?php

namespace App\Filament\Resources\ListAppsResource\Pages;

use App\Filament\Resources\ListAppsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListApps extends ListRecords
{
    protected static string $resource = ListAppsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
