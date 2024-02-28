<?php

namespace App\Filament\Resources\ContactsResource\Pages;

use App\Filament\Resources\ContactsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}




// <?php

// namespace App\Filament\Resources\ContactsResource\Pages;

// use App\Filament\Resources\ContactsResource;
// use Filament\Resources\Pages\ListRecords;

// class ListContacts extends ListRecords
// {
//     public static $resource = ContactsResource::class;
// }
