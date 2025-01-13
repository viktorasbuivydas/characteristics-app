<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\CharacteristicCategory;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Admin\Resources\CharacteristicCategoryResource\Pages;
use App\Filament\Admin\Resources\CharacteristicCategoryResource\RelationManagers;
use App\Filament\Admin\Resources\CharacteristicCategoryResource\RelationManagers\CharacteristicsRelationManager;
use App\Filament\Admin\Resources\CharacteristicResource\RelationManagers\CharacteristicCategoriesRelationManager;

class CharacteristicCategoryResource extends Resource
{
    protected static ?string $model = CharacteristicCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            CharacteristicsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCharacteristicCategories::route('/'),
            'create' => Pages\CreateCharacteristicCategory::route('/create'),
            'edit' => Pages\EditCharacteristicCategory::route('/{record}/edit'),
        ];
    }
}
