<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubsektorResource\Pages;
use App\Models\Subsektor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class SubsektorResource extends Resource
{
    protected static ?string $model = Subsektor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->unique()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('icon')
                    ->directory('subsektor')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama'),
                ImageColumn::make('icon')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubsektors::route('/'),
            'create' => Pages\CreateSubsektor::route('/create'),
            'edit' => Pages\EditSubsektor::route('/{record}/edit'),
        ];
    }
}
