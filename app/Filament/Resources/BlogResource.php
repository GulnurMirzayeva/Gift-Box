<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Bloq';

    protected static ?string $navigationLabel = 'Bloq';

    protected static ?string $pluralModelLabel = 'Bloq';
    protected static ?string $modelLabel = 'Bloq';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(50),
                Forms\Components\Textarea::make('paragraph')
                    ->required()
                    ->maxLength(100),
                Forms\Components\FileUpload::make('image')
                    ->directory('blogs')
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Başlıq')
                    ->searchable(),
                Tables\Columns\TextColumn::make('paragraph')->label('Paraqraf')
                    ->limit(50),
                Tables\Columns\TextColumn::make('image')
                    ->label('Şəkil')
                    ->formatStateUsing(function ($state) {
                        return '<img src="' . asset('storage/' . $state) . '" alt="Media" style="width: 100px; height: auto;" />';
                    })
                    ->html(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Yaradıldı')
                    ->dateTime('F d, Y'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
