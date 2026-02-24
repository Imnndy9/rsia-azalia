<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', \Illuminate\Support\Str::slug($state))
                ),

            Forms\Components\TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            Forms\Components\Textarea::make('excerpt')
                ->rows(3),

            Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('news'),

            Forms\Components\Select::make('category')
                ->options([
                    'Kegiatan' => 'Kegiatan',
                    'Layanan' => 'Layanan',
                    'Edukasi' => 'Edukasi',
                ]),

            Forms\Components\DatePicker::make('published_at'),

            Forms\Components\Toggle::make('is_headline')
            ->label('Jadikan Headline')
            ->helperText('Jika aktif, berita ini akan tampil di bagian Headline halaman Berita.')
            ->default(false),

            Forms\Components\RichEditor::make('content')
                ->required()
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\ImageColumn::make('image'),
            Tables\Columns\TextColumn::make('title')->searchable(),
            Tables\Columns\TextColumn::make('category'),
            Tables\Columns\TextColumn::make('published_at')->date(),
        ])
        ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }

    public static function mutateFormDataBeforeCreate(array $data): array
    {
    if (!empty($data['is_headline'])) {
        \App\Models\News::query()->update(['is_headline' => false]);
    }

    return $data;
    }    
    
    public static function mutateFormDataBeforeSave(array $data): array
    {
    if (!empty($data['is_headline'])) {
        \App\Models\News::query()->update(['is_headline' => false]);
    }

    return $data;
    }
    
}
