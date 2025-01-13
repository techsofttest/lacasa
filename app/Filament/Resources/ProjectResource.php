<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Filament\Resources\RelationManagers\HasManyRelationManager;
use App\Models\Project;
use App\Models\ProjectType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;



class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-s-building-office-2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                ->schema([

                Forms\Components\Toggle::make('featured')
                ->label('Featured')
                ->inline(false)
                ->onColor('success')
                ->offColor('danger'),

                Forms\Components\TextInput::make('name')->required(),

                Forms\Components\Select::make('project_type_id')
                ->label('Project Type')
                ->options(
                    ProjectType::orderBy('type','asc')->pluck('type', 'id') // Displaying project types from the database
                )
                ->required(),

                Forms\Components\Textarea::make('description')->required(),

                Forms\Components\FileUpload::make('thumb_image')->live(false)->directory('uploads/projects')->lazy()->required(),
                
                Forms\Components\FileUpload::make('image')->live(false)->directory('uploads/projects')->lazy()->required(),
                
                /*
                ->afterStateUpdated(function ($state, $get) {
                    // Check if the image was uploaded successfully
                    if ($state) {
                        $originalPath = $state;
                        $originalFilename = basename($originalPath);
                        
                        // Create the path for the thumb image
                        $thumbPath = 'uploads/projects/thumb/' . $originalFilename;

                        // Use Intervention to create the thumbnail
                        $image = Image::make(storage_path('app/public/' . $originalPath)); // Load the original image
                        $image->resize(150, 150); // Resize as needed (e.g., 150x150 for thumbnails)
                        $image->save(storage_path('app/public/' . $thumbPath)); // Save to the thumb folder

                    }
                }),
                */

                Forms\Components\FileUpload::make('additional_images')->live(false)->reorderable()->multiple()->panelLayout('grid')->directory('uploads/projects')->lazy()->required()
                
                ])
                ->columns(1),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table

            ->columns([
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('projectType.type'),
            Tables\Columns\ImageColumn::make('thumb_image'),
            Tables\Columns\ToggleColumn::make('featured')
                ->label('Featured')
                ->onColor('success')
                ->offColor('danger')
                ->sortable()
                ->toggleable(),
            ])
            ->defaultSort('order', 'asc')

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
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }


  


}
