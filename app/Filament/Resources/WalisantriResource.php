<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrangtuaResource\Pages;
use App\Filament\Resources\OrangtuaResource\RelationManagers;
use App\Filament\Resources\WalisantriResource\Pages\CreateWalisantri;
use App\Filament\Resources\WalisantriResource\Pages\EditWalisantri;
use App\Filament\Resources\WalisantriResource\Pages\ListWalisantris;
use App\Filament\Resources\WalisantriResource\Pages\ViewWalisantri;
use App\Models\Orangtua;
use App\Models\Walisantri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WalisantriResource extends Resource
{
    protected static ?string $model = Walisantri::class;

    protected static ?int $navigationSort = 100;

    protected static ?string $navigationGroup = 'Walisantri';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_ak_provinsi_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_ak_kabupaten_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_ak_kecamatan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_ak_kelurahan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_ak_kodepos_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_ik_provinsi_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_ik_kabupaten_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_ik_kecamatan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_ik_kelurahan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_ik_kodepos_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_w_provinsi_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_w_kabupaten_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_w_kecamatan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_w_kelurahan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('al_w_kodepos_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kartu_keluarga')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_nama_lengkap')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_status')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_kewarganegaraan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_asal_negara')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_kitas')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_nik')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_tempat_lahir')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_tanggal_lahir')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_pend_terakhir')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_pekerjaan_utama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ak_pghsln_rt')
                    ->maxLength(255),
                Forms\Components\Toggle::make('ak_tdk_hp'),
                Forms\Components\TextInput::make('ak_nomor_handphone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('file_kk')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ik_nama_lengkap')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ik_status')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ik_kewarganegaraan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ik_asal_negara')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ik_kitas')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ik_nik')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ik_tempat_lahir')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('ik_tanggal_lahir'),
                Forms\Components\TextInput::make('ik_pend_terakhir')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ik_pekerjaan_utama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ik_pghsln_rt')
                    ->maxLength(255),
                Forms\Components\Toggle::make('ik_tdk_hp'),
                Forms\Components\TextInput::make('ik_nomor_handphone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\Toggle::make('ik_kk_sama_ak'),
                Forms\Components\TextInput::make('w_status')
                    ->maxLength(255),
                Forms\Components\TextInput::make('w_nama_lengkap')
                    ->maxLength(255),
                Forms\Components\TextInput::make('w_kewarganegaraan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('w_asal_negara')
                    ->maxLength(255),
                Forms\Components\TextInput::make('w_kitas')
                    ->maxLength(255),
                Forms\Components\TextInput::make('w_nik')
                    ->maxLength(255),
                Forms\Components\TextInput::make('w_tempat_lahir')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('w_tanggal_lahir'),
                Forms\Components\TextInput::make('w_pend_terakhir')
                    ->maxLength(255),
                Forms\Components\TextInput::make('w_pekerjaan_utama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('w_pghsln_rt')
                    ->maxLength(255),
                Forms\Components\Toggle::make('w_tdk_hp'),
                Forms\Components\TextInput::make('w_nomor_handphone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\Toggle::make('al_ak_tgldi_ln')
                    ->required(),
                Forms\Components\Textarea::make('al_ak_almt_ln')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('al_ak_stts_rmh')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('al_ak_rt')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('al_ak_rw')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('al_ak_alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('al_ik_sama_ak')
                    ->required(),
                Forms\Components\Toggle::make('al_ik_tgldi_ln')
                    ->required(),
                Forms\Components\Textarea::make('al_ik_almt_ln')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('al_ik_stts_rmh')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('al_ik_rt')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('al_ik_rw')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('al_ik_alamat')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('al_w_dmsl')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('al_w_tgldi_ln')
                    ->required(),
                Forms\Components\Textarea::make('al_w_almt_ln')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('al_w_stts_rmh')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('al_w_rt')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('al_w_rw')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('al_w_alamat')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_ak_provinsi_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_ak_kabupaten_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_ak_kecamatan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_ak_kelurahan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_ak_kodepos_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_ik_provinsi_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_ik_kabupaten_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_ik_kecamatan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_ik_kelurahan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_ik_kodepos_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_w_provinsi_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_w_kabupaten_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_w_kecamatan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_w_kelurahan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('al_w_kodepos_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kartu_keluarga')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_kewarganegaraan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_asal_negara')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_kitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_tanggal_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_pend_terakhir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_pekerjaan_utama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ak_pghsln_rt')
                    ->searchable(),
                Tables\Columns\IconColumn::make('ak_tdk_hp')
                    ->boolean(),
                Tables\Columns\TextColumn::make('ak_nomor_handphone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('file_kk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ik_nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ik_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ik_kewarganegaraan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ik_asal_negara')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ik_kitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ik_nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ik_tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ik_tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ik_pend_terakhir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ik_pekerjaan_utama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ik_pghsln_rt')
                    ->searchable(),
                Tables\Columns\IconColumn::make('ik_tdk_hp')
                    ->boolean(),
                Tables\Columns\TextColumn::make('ik_nomor_handphone')
                    ->searchable(),
                Tables\Columns\IconColumn::make('ik_kk_sama_ak')
                    ->boolean(),
                Tables\Columns\TextColumn::make('w_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('w_nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('w_kewarganegaraan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('w_asal_negara')
                    ->searchable(),
                Tables\Columns\TextColumn::make('w_kitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('w_nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('w_tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('w_tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('w_pend_terakhir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('w_pekerjaan_utama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('w_pghsln_rt')
                    ->searchable(),
                Tables\Columns\IconColumn::make('w_tdk_hp')
                    ->boolean(),
                Tables\Columns\TextColumn::make('w_nomor_handphone')
                    ->searchable(),
                Tables\Columns\IconColumn::make('al_ak_tgldi_ln')
                    ->boolean(),
                Tables\Columns\TextColumn::make('al_ak_stts_rmh')
                    ->searchable(),
                Tables\Columns\TextColumn::make('al_ak_rt')
                    ->searchable(),
                Tables\Columns\TextColumn::make('al_ak_rw')
                    ->searchable(),
                Tables\Columns\TextColumn::make('al_ak_alamat')
                    ->searchable(),
                Tables\Columns\IconColumn::make('al_ik_sama_ak')
                    ->boolean(),
                Tables\Columns\IconColumn::make('al_ik_tgldi_ln')
                    ->boolean(),
                Tables\Columns\TextColumn::make('al_ik_stts_rmh')
                    ->searchable(),
                Tables\Columns\TextColumn::make('al_ik_rt')
                    ->searchable(),
                Tables\Columns\TextColumn::make('al_ik_rw')
                    ->searchable(),
                Tables\Columns\TextColumn::make('al_w_dmsl')
                    ->searchable(),
                Tables\Columns\IconColumn::make('al_w_tgldi_ln')
                    ->boolean(),
                Tables\Columns\TextColumn::make('al_w_stts_rmh')
                    ->searchable(),
                Tables\Columns\TextColumn::make('al_w_rt')
                    ->searchable(),
                Tables\Columns\TextColumn::make('al_w_rw')
                    ->searchable(),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => ListWalisantris::route('/'),
            'create' => CreateWalisantri::route('/create'),
            'view' => ViewWalisantri::route('/{record}'),
            'edit' => EditWalisantri::route('/{record}/edit'),
        ];
    }
}
