<?php

namespace App\Filament\Resources\ListAppsResource\Pages;

use App\Filament\Resources\ListAppsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditListApps extends EditRecord
{
    protected static string $resource = ListAppsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
