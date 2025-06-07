<?php

namespace App\Filament\Admin\Resources\KtmRequestResource\Pages;

use App\Filament\Admin\Resources\KtmRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKtmRequest extends EditRecord
{
    protected static string $resource = KtmRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
