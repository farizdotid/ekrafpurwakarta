<?php

namespace App\Filament\Resources\SubsektorResource\Pages;

use App\Filament\Resources\SubsektorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions\Action;

class EditSubsektor extends EditRecord
{
    protected static string $resource = SubsektorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Data Berhasil Diupdate';
    }
}
