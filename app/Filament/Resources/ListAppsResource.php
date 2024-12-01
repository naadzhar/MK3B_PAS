<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ListAppsResource\Pages;
use App\Models\ListApps;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ListAppsResource extends Resource
{
    protected static ?string $model = ListApps::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Ensure slug is declared as ?string
    protected static ?string $slug = 'list-apps';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('application') // Use lowercase for consistency
                    ->label('Jenis Aplikasi')
                    ->required(),
                Forms\Components\Textarea::make('description') // Use lowercase for consistency
                    ->label('Isi Aplikasi')
                    ->required(),
                Forms\Components\TextInput::make('price') // Change Textarea to TextInput for price
                    ->label('Harga Aplikasi')
                    ->required()
                    ->numeric(), // Validate that price input is numeric
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('application') // Use lowercase for consistency
                    ->label('Jenis Aplikasi')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description') // Use lowercase for consistency
                    ->label('Isi Aplikasi'),
                Tables\Columns\TextColumn::make('price') // Use lowercase for consistency
                    ->label('Harga Aplikasi'),
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
            // Add relations if any
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListListApps::route('/'),
            'create' => Pages\CreateListApps::route('/create'),
            'edit' => Pages\EditListApps::route('/{record}/edit'),
        ];
    }
}