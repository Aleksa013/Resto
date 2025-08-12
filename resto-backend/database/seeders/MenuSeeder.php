<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Dish;
use App\Models\Drink;

class MenuSeeder extends Seeder
{
    public function run(): void
    {

        $categories = [
            'Пицца',
            'Супы',
            'Салаты',
            'Десерты',
            'Горячее',
            'Закуски',
            'Напитки'
        ];

        foreach ($categories as $cat) {
            Category::firstOrCreate(
                ['name' => $cat,]
                ,[
                'name' => $cat,
                'slug' => Str::slug($cat)
            ]);
        }


        $dishes = [
    ['Маргарита', 'Классическая пицца с томатами и сыром моцарелла', 550, 'https://images.unsplash.com/photo-1601924582975-7d7490d6f7d2'],
    ['Пепперони', 'Пицца с острой колбасой и сыром', 590, 'https://images.unsplash.com/photo-1594007654729-407eedc4be5b'],
    ['Мясная', 'Пицца с ветчиной, беконом и колбасками', 650, 'https://images.unsplash.com/photo-1625944097646-787b2d66cc85'],
    ['Том Ям', 'Традиционный тайский суп с креветками и кокосовым молоком', 450, 'https://images.unsplash.com/photo-1617196035154-e7d08a756fb2'],
    ['Борщ', 'Классический украинский суп со свеклой и сметаной', 350, 'https://images.unsplash.com/photo-1630352427185-ff2c5c4ba0a0'],
    ['Рамен', 'Японский суп с лапшой, яйцом и мясом', 520, 'https://images.unsplash.com/photo-1604908176997-42863b3922ab'],
    ['Цезарь', 'Салат с курицей, пармезаном и соусом цезарь', 420, 'https://images.unsplash.com/photo-1572449043416-55f4685c9bbf'],
    ['Греческий', 'Салат с оливками, сыром фета и овощами', 380, 'https://images.unsplash.com/photo-1556800467-8903d1b2a3b3'],
    ['Оливье', 'Традиционный салат с колбасой и майонезом', 300, 'https://images.unsplash.com/photo-1600728891273-e5f4c8dfb8df'],
    ['Тирамису', 'Итальянский десерт с маскарпоне и кофе', 290, 'https://images.unsplash.com/photo-1612197527762-29a16c9f3b77'],
    ['Чизкейк', 'Нежный чизкейк с ягодным соусом', 310, 'https://images.unsplash.com/photo-1542826438-1c6328ff4d74'],
    ['Шоколадный фондан', 'Десерт с жидким шоколадом внутри', 340, 'https://images.unsplash.com/photo-1599785209792-9e27f94d857c'],
    ['Стейк рибай', 'Сочный стейк средней прожарки', 1250, 'https://images.unsplash.com/photo-1551183053-bf91a1d81141'],
    ['Паста карбонара', 'Паста с беконом, сливками и пармезаном', 480, 'https://images.unsplash.com/photo-1525755662778-989d0524087e'],
    ['Бургер', 'Бургер с говяжьей котлетой и сыром чеддер', 420, 'https://images.unsplash.com/photo-1550547660-d9450f859349'],
    ['Рататуй', 'Овощное рагу по-французски', 390, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836'],
    ['Куриные крылышки', 'Острые куриные крылья в соусе', 400, 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5'],
    ['Фалафель', 'Пирожки из нута с пряностями', 350, 'https://images.unsplash.com/photo-1528715471579-d1f0180d7e2a'],
    ['Пельмени', 'Русские пельмени с мясом', 370, 'https://images.unsplash.com/photo-1568605114967-8130f3a36994'],
    ['Гуляш', 'Венгерское мясное рагу', 540, 'https://images.unsplash.com/photo-1543352634-0f54a4bbfe47'],
    ['Крем-брюле', 'Французский десерт с карамельной корочкой', 300, 'https://images.unsplash.com/photo-1556911220-e15b29be8c9a'],
    ['Медальоны из индейки', 'Индейка с овощами', 700, 'https://images.unsplash.com/photo-1562967916-eb82221dfb44'],
    ['Салат с киноа', 'Здоровый салат с киноа и овощами', 450, 'https://images.unsplash.com/photo-1549576490-b0b4831ef60a'],
    ['Пицца с грибами', 'Пицца с грибами и сыром', 600, 'https://images.unsplash.com/photo-1548365328-20a0c7f8e8e4'],
    ['Крем-суп из тыквы', 'Тыквенный суп-пюре с пряностями', 370, 'https://images.unsplash.com/photo-1506354666786-959d6d497f1a'],
    ['Салат с тунцом', 'Салат с консервированным тунцом и овощами', 480, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836'],
    ['Паста с морепродуктами', 'Паста с креветками и мидиями', 620, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836'],
    ['Суши-сет', 'Набор роллов и суши', 890, 'https://images.unsplash.com/photo-1553621042-f6e147245754'],
    ['Гаспачо', 'Холодный томатный суп', 350, 'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445'],
    ['Тартар из говядины', 'Свежий говяжий тартар', 750, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c'],
    ];

        foreach ($dishes as [$name, $desc, $price, $img]) {
            Dish::firstOrCreate(
                ['slug' => Str::slug($name)],
                [
                'category_id' => Category::inRandomOrder()->first()->id,
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $desc,
                'price' => $price,
                'image' => $img
            ]);
        }

        $drinks = [
            ['Эспрессо', 'Крепкий черный кофе', 120, 'https://images.unsplash.com/photo-1509042239860-f550ce710b93'],
            ['Капучино', 'Кофе с молочной пенкой', 150, 'https://images.unsplash.com/photo-1550684848-0d09a3da3a5d'],
            ['Латте', 'Кофе с молоком', 160, 'https://images.unsplash.com/photo-1511920170033-f8396924c348'],
            ['Чай черный', 'Классический черный чай', 90, 'https://images.unsplash.com/photo-1517685352821-92cf88aee5a5'],
            ['Чай зеленый', 'Зеленый чай с жасмином', 100, 'https://images.unsplash.com/photo-1551978127-8427b1ef7fcf'],
            ['Мохито', 'Безалкогольный коктейль с мятой и лаймом', 180, 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092'],
            ['Лимонад', 'Домашний лимонад', 150, 'https://images.unsplash.com/photo-1617191519709-8a1a93ef62ae'],
            ['Кока-Кола', 'Газированный напиток', 120, 'https://images.unsplash.com/photo-1629203851122-3726ecdf1f99'],
            ['Апельсиновый сок', 'Свежевыжатый сок апельсина', 170, 'https://images.unsplash.com/photo-1612197527762-29a16c9f3b77'],
            ['Яблочный сок', 'Натуральный сок из яблок', 160, 'https://images.unsplash.com/photo-1551024601-bec78aea704b'],
            ['Клубничный смузи', 'Смузи с клубникой и бананом', 190, 'https://images.unsplash.com/photo-1560807707-8cc77767d783'],
            ['Шоколадный милкшейк', 'Молочный коктейль с шоколадом', 200, 'https://images.unsplash.com/photo-1551024709-8f23befc6f87'],
            ['Минеральная вода', 'Газированная минеральная вода', 80, 'https://images.unsplash.com/photo-1551847677-d8b5fbe0c51d'],
            ['Фраппе', 'Холодный кофейный напиток', 180, 'https://images.unsplash.com/photo-1572286258217-437d7eaf1541'],
            ['Айран', 'Освежающий кисломолочный напиток', 130, 'https://images.unsplash.com/photo-1612197527762-29a16c9f3b77']
        ];

        $categoryId = Category::where('name', 'Напитки')->value('id');
        foreach ($drinks as [$name, $desc, $price, $img]) {
            Drink::updateOrInsert(
                ['slug' => Str::slug($name),
                ],
                [
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $desc,
                'price' => $price,
                'image' => $img,
                'category_id' => $categoryId
            ]);
        }
    }
}
