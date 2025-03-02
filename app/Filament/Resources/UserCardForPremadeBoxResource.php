<?php
namespace App\Filament\Resources;

use App\Filament\Resources\UserCardForPremadeBoxResource\Pages;
use App\Models\UserCardForPremadeBox;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UserCardForPremadeBoxResource extends Resource
{
    protected static ?string $model = UserCardForPremadeBox::class;

    protected static ?string $navigationGroup = 'Sifarişlər';
    protected static ?string $navigationLabel = 'Hazır qutu sifarişləri';

    protected static ?string $pluralModelLabel = 'Hazır qutu sifarişləri';
    protected static ?string $modelLabel = 'Hazır qutu sifarişləri';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user.name')
                    ->label('User Name')
                    ->disabled(),
                Forms\Components\Select::make('premade_box_id')
                    ->label('Premade Box Name')
                    ->relationship('premadeBox', 'name')
                    ->disabled(),

                Forms\Components\Select::make('gift_box_id')
                    ->label('Gift Box Title')
                    ->relationship('giftBox', 'title')
                    ->disabled(),

                Forms\Components\Textarea::make('box_text')
                    ->label('Box Text')
                    ->disabled(),

                Forms\Components\TextInput::make('selected_font')
                    ->label('Selected Font')
                    ->disabled(),

                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'rejected' => 'Rejected',
                        'accepted' => 'Accepted',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('premadeBox.price')
                    ->label('Qiymət')
                    ->searchable()
                    ->disabled(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('İstifadəçi adı'),

                TextColumn::make('premadeBox.name')
                    ->label('Hazır qutu adı')
                    ->searchable()
                    ->disabled(),


                TextColumn::make('giftBox.title')
                    ->label('Seçilmiş qutu')
                    ->searchable()
                    ->disabled(),


                // Kolonlar disabled olmalı, formdaki gibi sadece status değiştirilebilir
                TextColumn::make('box_text')
                    ->label('Qutu üzərindəki yazı')
                    ->disabled(),

                TextColumn::make('selected_font')
                    ->label('Seçilmiş yazı stili')
                    ->disabled(),

                // Items kısmındaki bilgileri kullanıcıya gösterebiliriz
                TextColumn::make('items.insiding.name')
                    ->label('Tərkibindəki məhsul adı')
                    ->searchable()
                    ->disabled(),

                Tables\Columns\TextColumn::make('images.image_path')
                    ->label('Məhsul şəkli')
                    ->formatStateUsing(function ($state, $record) {
                        $imagePaths = $record->images->pluck('image_path');

                        if ($imagePaths->isEmpty()) {
                            return 'No images available';
                        }

                        $html = '';
                        foreach ($imagePaths as $image) {
                            $imageUrl = asset('storage/' . $image);
                            $html .= '<img src="' . $imageUrl . '" alt="Media" style="width: 100px; height: auto; margin-right: 10px;" />';
                        }

                        return $html;
                    })
                    ->html(),


                TextColumn::make('items.selected_variant')
                    ->label('Seçilən variant')
                    ->disabled(),

                TextColumn::make('items.custom_text')
                    ->label('Əlavə edilən mətn')
                    ->disabled(),

                // userCardDetails ilişkisini almak için doğru yolu kullanıyoruz
                TextColumn::make('userCardDetails.card.name')
                    ->label('Seçilmiş kart')
                    ->searchable()
                    ->disabled(),


                TextColumn::make('userCardDetails.to_name')
                    ->label('Alıcı adı')
                    ->searchable(),

                TextColumn::make('userCardDetails.from_name')
                    ->label('Göndərən şəxsin adı')
                    ->searchable()
                    ->disabled(),


                TextColumn::make('userCardDetails.message')
                    ->label('Kart mesajı')
                    ->searchable()
                    ->disabled(),


                // Status'ü BadgeColumn ile renkli hale getiriyoruz
                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'primary' => fn($state): bool => $state === 'pending',
                        'danger' => fn($state): bool => $state === 'rejected',
                        'success' => fn($state): bool => $state === 'accepted',
                    ])
                    ->formatStateUsing(fn($state): string => ucfirst($state)),
            ])
            ->filters([])
            ->actions([
                //

            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            // İlişkiler burada tanımlanabilir
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserCardForPremadeBoxes::route('/'),
            'create' => Pages\CreateUserCardForPremadeBox::route('/create'),
            'edit' => Pages\EditUserCardForPremadeBox::route('/{record}/edit'),
        ];
    }
}
