<?php

namespace App\Filament\Resources\SubsektorResource\Pages;

use App\Filament\Resources\SubsektorResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;

class CreateSubsektor extends CreateRecord
{
    protected static string $resource = SubsektorResource::class;

    protected static bool $canCreateAnother = false;

    protected ?string $heading = 'Buat Subsektor';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('submit')
                ->label('Simpan')
                ->action('create'),

                Action::make('cancel')
                ->label('Batal')
                ->url($this->getRedirectUrl())
                ->color('secondary'),
        ];
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Data Berhasil Disimpan';
    }
}
