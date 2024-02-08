<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RandomResource\Pages;
use App\Filament\Resources\RandomResource\RelationManagers;
use App\Models\Random;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Columns\ImageColumn;

use Filament\Forms\Components\FileUpload;

class RandomResource extends Resource
{
    protected static ?string $model = Random::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('Random_name')->required(),
                FileUpload::make('Random_img')
                    ->image()
                    
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->disk('public')
                    ->directory('Random'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('Random_name')
                ->searchable(),

            ImageColumn::make('Random_img')
                ->width(300)
                ->height(200)
                ->searchable()
                ->disk('public'),

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
            'index' => Pages\ListRandoms::route('/'),
            'create' => Pages\CreateRandom::route('/create'),
            'edit' => Pages\EditRandom::route('/{record}/edit'),
        ];
    }
}
