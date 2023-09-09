<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeReviewResource\Pages;
use App\Filament\Resources\EmployeeReviewResource\RelationManagers;
use App\Models\EmployeeReview;
use Exception;
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

class EmployeeReviewResource extends Resource
{
    protected static ?string $model = EmployeeReview::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('employee_id')
                    ->label(__('Employee Number'))
                    ->required(),
                TextInput::make('review')
                    ->label(__('Employee Review'))
                    ->required(),
            ]);
    }

    /**
     * @throws Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label(__('ID')),
                TextColumn::make('employee_id')
                    ->label(__('Employee Number'))
                    ->searchable(),
                TextColumn::make('review')
                    ->label(__('Employee Review')),
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
            'index' => Pages\ListEmployeeReviews::route('/'),
            'create' => Pages\CreateEmployeeReview::route('/create'),
            'edit' => Pages\EditEmployeeReview::route('/{record}/edit'),
        ];
    }
}
