<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ContactsResource\Pages;
use App\Models\Contacts;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
// use Filament\Tables\Columns;
// use Filament\Tables\Rows;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class ContactsResource extends Resource
{
    protected static ?string $model = Contacts::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')->label('First Name'),
                Forms\Components\TextInput::make('last_name')->label('Last Name'),
                Forms\Components\TextInput::make('email')->label('Email'),
                Forms\Components\TextInput::make('phone')->label('Phone'),
                Forms\Components\TextInput::make('job_title')->label('Job Title'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')->label('First Name'),
                Tables\Columns\TextColumn::make('last_name')->label('Last Name'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('phone')->label('Phone'),
                Tables\Columns\TextColumn::make('job_title')->label('Job Title'),
            ])
            ->filters([
                //
            ])
            ->defaultSort('id', 'asc') // You can change 'id' to any other column you want to sort by default
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContacts::route('/create'),
            'edit' => Pages\EditContacts::route('/{record}/edit'),
        ];
    }
}
