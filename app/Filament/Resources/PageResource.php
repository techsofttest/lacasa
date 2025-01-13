<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                ->schema([
                Forms\Components\TextInput::make('name')->required(),

                Forms\Components\TextInput::make('meta_title'),

                Forms\Components\Textarea::make('meta_descriptions'),

                Forms\Components\Textarea::make('meta_keywords'),

                Forms\Components\Textarea::make('title'),

                Forms\Components\FileUpload::make('banner')->hidden(fn ($record) => !$record || ($record->slug === 'portfolio' || $record->slug === 'contact'))->directory('uploads/banners')->lazy()->moveFiles(),

                Forms\Components\FileUpload::make('slider_images')->hidden(fn ($record) => !$record || $record->slug !== 'home')->reorderable()->panelLayout('grid')->multiple()->directory('uploads/banners')->lazy()->moveFiles(),
               
                //Forms\Components\RichEditor::make('content'),

                ])
                ->columns(1), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
