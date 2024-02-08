<?php

namespace App\Filament\Resources\AlbumResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Columns\ImageColumn;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;

use Filament\Forms\Components\Select;



class PhotoRelationManager extends RelationManager
{
    protected static string $relationship = 'photos';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('photo_name')
                ->image()
                ->imageEditor()
                ->imageEditorAspectRatios([
                    '16:9',
                    '4:3',
                    '1:1',
                ])
                    ->disk('public')
                    ->directory('photo_p'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('photo_name')
            ->columns([
                ImageColumn::make('photo_name')
                ->width(400)
                ->height(200)
                ->disk('public'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
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
}
