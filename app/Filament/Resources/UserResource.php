<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{

    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('avatar')
                    ->required(),
                Forms\Components\DateTimePicker::make('email_verified_at'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required(),
                Forms\Components\TextInput::make('username'),
                Forms\Components\DateTimePicker::make('trial_ends_at'),
                Forms\Components\TextInput::make('verification_code'),
                Forms\Components\TextInput::make('verified')
                    ->numeric(),
                Forms\Components\TextInput::make('phone')
                    ->tel(),
                Forms\Components\TextInput::make('address1'),
                Forms\Components\TextInput::make('address2'),
                Forms\Components\TextInput::make('zip'),
                Forms\Components\TextInput::make('city'),
                Forms\Components\TextInput::make('country'),
                Forms\Components\TextInput::make('state'),
                Forms\Components\TextInput::make('language'),
                Forms\Components\TextInput::make('timezone'),
                Forms\Components\TextInput::make('currency'),
                Forms\Components\TextInput::make('stripe_id'),
                Forms\Components\TextInput::make('card_brand'),
                Forms\Components\TextInput::make('card_last_four'),
                Forms\Components\TextInput::make('role'),
                Forms\Components\TextInput::make('lab_id')
                    ->numeric(),
                Forms\Components\TextInput::make('doctor_id')
                    ->numeric(),
                Forms\Components\TextInput::make('patient_number'),
                Forms\Components\DatePicker::make('birthdate'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('avatar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('trial_ends_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('verification_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('verified')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('zip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('language')
                    ->searchable(),
                Tables\Columns\TextColumn::make('timezone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('currency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('stripe_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('card_brand')
                    ->searchable(),
                Tables\Columns\TextColumn::make('card_last_four')
                    ->searchable(),
                Tables\Columns\TextColumn::make('role')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lab_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('doctor_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('patient_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthdate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
