<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-s-arrow-path';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\Textarea::make('short_desc') ->rows(10)->required(), 
                Forms\Components\Textarea::make('long_desc')->label('Description Top(Page) (Add "{image} to insert image 1")')->rows(10)->required(),
                Forms\Components\Textarea::make('long_desc2')->label('Description Bottom(Page)')->rows(10)->required(),
                Forms\Components\FileUpload::make('image')->directory('uploads/services')->lazy()->required(),
                Forms\Components\FileUpload::make('home_image')->directory('uploads/services')->lazy()->required(),
                Forms\Components\FileUpload::make('banner')->directory('uploads/services/banner')->lazy()->required(),
                Forms\Components\FileUpload::make('detail_image1')->directory('uploads/services/')->lazy(),
                Forms\Components\FileUpload::make('detail_image2')->directory('uploads/services/')->lazy(),
                Forms\Components\FileUpload::make('detail_image3')->directory('uploads/services/')->lazy(),
                Forms\Components\TextInput::make('meta_title'),
                Forms\Components\Textarea::make('meta_description'),
                Forms\Components\Textinput::make('meta_keywords'),
                ])
                ->columns(1),
                //
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('short_desc')->wrap(),
                Tables\Columns\ImageColumn::make('image')
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
