<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                ->schema([
                 Forms\Components\Toggle::make('is_management')
                ->label('Management')
                ->inline(false)
                ->onColor('success')
                ->offColor('danger'),
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('designation')->required(), 
                Forms\Components\Textarea::make('description')->rows(10),
                Forms\Components\TextInput::make('qualification')->label('Qualification (Seperate by ",")')->hidden(fn ($record) => !$record || $record->is_management !== 1),
                Forms\Components\RichEditor::make('about_desc')->hidden(fn ($record) => !$record || $record->is_management !== 1),
                Forms\Components\FileUpload::make('image')->directory('uploads/team')->lazy()->required(),
                Forms\Components\FileUpload::make('about_image')->directory('uploads/team')->hidden(fn ($record) => !$record || $record->is_management !== 1)->lazy()
                ])
                ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('designation'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ToggleColumn::make('is_management')
                ->label('Management')
                ->onColor('success')
                ->offColor('danger')
                ->toggleable(),
            ])
            ->defaultSort('order','asc')
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
