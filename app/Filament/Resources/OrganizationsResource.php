<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganizationsResource\Pages;
use App\Filament\Resources\OrganizationsResource\RelationManagers;
use App\Models\Organizations;
use Filament\Forms\Form;
use Filament\Forms\Components;
use Filament\Resources\Resource;
// use Filament\Table;
use Filament\Tables\Table;
use Filament\Tables\Columns;
use Filament\Tables\Actions;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrganizationsResource extends Resource
{
    public static ?string $model = Organizations::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\TextInput::make('name')->label('Name'),
                Components\TextInput::make('industry')->label('Industry'),
                Components\TextInput::make('organize')->label('Organize'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('name')->label('Name'),
                Columns\TextColumn::make('industry')->label('Industry'),
                Columns\TextColumn::make('organize')->label('Organize'),
            ])
            ->filters([
                //
            ])
            ->defaultSort('id', 'asc')
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrganizations::route('/'),
            'create' => Pages\CreateOrganizations::route('/create'),
            'edit' => Pages\EditOrganizations::route('/{record}/edit'),
        ];
    }
}
