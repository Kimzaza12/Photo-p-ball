<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhotoResource\Pages;
use App\Filament\Resources\PhotoResource\RelationManagers;
use App\Models\Album;
use App\Models\Photo;
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
use Filament\Forms\Components\TextInput;

use Filament\Forms\Components\Select;


class PhotoResource extends Resource
{
    protected static ?string $model = Photo::class;
    protected static ?string $model2 = Photo::class;

    

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //

                FileUpload::make('photo_name')
                    ->image()
                    ->imageEditor()
                    ->imageEditorMode(2)
                    ->disk('public')
                    ->directory('photo_p'),

                Select::make('album_id')
                    ->required()
                    ->label('Album order')
                    ->options(Album::all()->pluck('album_name', 'id'))
                    ->searchable(),


                    
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('photo_name')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('album_id')
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
            'index' => Pages\ListPhotos::route('/'),
            'create' => Pages\CreatePhoto::route('/create'),
            'edit' => Pages\EditPhoto::route('/{record}/edit'),
        ];
    }
}
