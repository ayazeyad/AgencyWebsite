<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label(__('Job Title'))
                    ->required(),
                Select::make('level')
                    ->options([
                        'internship' => 'Internship',
                        'entry-level' => 'Entry-Level',
                        'Intermediate' => 'Intermediate',
                        'Mid-level' => 'Mid-Level',
                        'Senior' => 'Senior',
                    ])
                    ->label(__('Job Level'))
                    ->required(),
                TextInput::make('description')
                    ->label(__('Job Description'))
                    ->required(),

            ]);
    }

    /**
     * @throws \Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label(__('ID')),
                TextColumn::make('title')
                    ->label(__('Job Title'))
                    ->searchable(),
                TextColumn::make('description')
                    ->label(__('Job Description'))
                    ->searchable(),
                TextColumn::make('level')
                    ->label(__('Level'))
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }
}
