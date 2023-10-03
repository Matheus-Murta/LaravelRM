<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CotacoessResource\Pages;
use App\Filament\Resources\CotacoessResource\RelationManagers;
use App\Models\Cotacoess;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CotacoessResource extends Resource
{
    protected static ?string $model = Cotacoess::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('CODCOTACAO'),
                Forms\Components\TextInput::make('DESCRICAO'),
                Forms\Components\DateTimePicker::make('DATAENTREGA'),
                Forms\Components\DateTimePicker::make('DATCOTACAO'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('CODCOTACAO'),
                Tables\Columns\TextColumn::make('DESCRICAO'),
                Tables\Columns\TextColumn::make('DATAENTREGA'),
                Tables\Columns\TextColumn::make('DATCOTACAO'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('CODCOTACAO'),
                TextEntry::make('DESCRICAO'),
                TextEntry::make('DATAENTREGA'),
                TextEntry::make('DATCOTACAO')
                    ->columnSpanFull(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCotacoesses::route('/'),
        ];
    }
}
