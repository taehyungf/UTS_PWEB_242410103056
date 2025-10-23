<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $desserts = [
            [
                'id' => 1,
                'nama' => 'Chocolate Lava Cake',
                'kategori' => 'Cake',
                'harga' => 45000,
                'stok' => 15,
                'deskripsi' => 'Kue cokelat lembut dengan lelehan cokelat di dalamnya'
            ],
            [
                'id' => 2,
                'nama' => 'Strawberry Cheesecake',
                'kategori' => 'Cake',
                'harga' => 55000,
                'stok' => 10,
                'deskripsi' => 'Cheesecake creamy dengan topping strawberry segar'
            ],
            [
                'id' => 3,
                'nama' => 'Banana Caramel Cake',
                'kategori' => 'Cake',
                'harga' => 38000,
                'stok' => 12,
                'deskripsi' => 'Kue pisang lembut berpadu saus karamel manis gurih di atasnya'
            ],
            [
                'id' => 4,
                'nama' => 'Red Velvet Roll Cake',
                'kategori' => 'Cake',
                'harga' => 45000,
                'stok' => 12,
                'deskripsi' => 'Bolu gulung red velvet dengan isian cream cheese lembut dan warna yang menggoda'
            ],
            [
                'id' => 5,
                'nama' => 'Matcha Swiss Roll',
                'kategori' => 'Cake',
                'harga' => 55000,
                'stok' => 18,
                'deskripsi' => 'Bolu gulung lembut dengan rasa matcha Jepang yang harum dan tidak terlalu manis'
            ],
            [
                'id' => 6,
                'nama' => 'Bento Cake',
                'kategori' => 'Cake',
                'harga' => 30000,
                'stok' => 30,
                'deskripsi' => 'Kue mini berbentuk lucu dalam box bento, cocok untuk hadiah atau kejutan spesial'
            ],
            [
                'id' => 7,
                'nama' => 'Almond Croissant',
                'kategori' => 'Pastry',
                'harga' => 28000,
                'stok' => 10,
                'deskripsi' => 'Croissant renyah berlapis almond slice dan isian krim lembut di dalamnya'
            ],
            [
                'id' => 8,
                'nama' => 'Matcha Croissant',
                'kategori' => 'Pastry',
                'harga' => 30000,
                'stok' => 25,
                'deskripsi' => 'Croissant hijau dengan aroma matcha dan taburan gula halus di atasnya'
            ],
            [
                'id' => 9,
                'nama' => 'Macaron Mix Box',
                'kategori' => 'Pastry',
                'harga' => 55000,
                'stok' => 25,
                'deskripsi' => 'Campuran macaron warna-warni dengan berbagai rasa seperti pistachio, strawberry, dan lemon'
            ],
            [
                'id' => 10,
                'nama' => 'Lemon Tart',
                'kategori' => 'Pastry',
                'harga' => 42000,
                'stok' => 8,
                'deskripsi' => 'Tart dengan isian lemon curd segar, manis dan asam yang seimbang, disajikan dengan crust renyah'
            ],
            [
                'id' => 11,
                'nama' => 'Cinnamon Roll',
                'kategori' => 'Pastry',
                'harga' => 45000,
                'stok' => 15,
                'deskripsi' => 'Roti gulung lembut dengan aroma kayu manis dan glaze manis di atasnya'
            ],
            [
                'id' => 12,
                'nama' => 'Honey Toast',
                'kategori' => 'Pastry',
                'harga' => 42000,
                'stok' => 25,
                'deskripsi' => 'Roti tebal panggang dengan madu, es krim vanilla, dan buah segar di atasnya'
            ],
            [
                'id' => 14,
                'nama' => 'Mochi Ice Cream',
                'kategori' => 'Ice Cream',
                'harga' => 38000,
                'stok' => 22,
                'deskripsi' => 'Mochi kenyal berisi es krim dengan pilihan rasa seperti vanila, matcha, dan cokelat'
            ],
            [
                'id' => 15,
                'nama' => 'Cookies & Cream Ice Cream',
                'kategori' => 'Ice Cream',
                'harga' => 35000,
                'stok' => 22,
                'deskripsi' => 'Es krim vanilla creamy dengan remahan biskuit cokelat yang manis gurih'
            ],
            [
                'id' => 16,
                'nama' => 'Black Sesame Ice Cream',
                'kategori' => 'Ice Cream',
                'harga' => 45000,
                'stok' => 10,
                'deskripsi' => 'Es krim lembut dengan cita rasa wijen hitam khas Jepang yang unik dan aromatik'
            ],
            [
                'id' => 17,
                'nama' => 'Salted Caramel Ice Cream',
                'kategori' => 'Ice Cream',
                'harga' => 45000,
                'stok' => 16,
                'deskripsi' => 'Es krim lembut dengan rasa manis gurih dari karamel asin yang bikin nagih'
            ],
            [
                'id' => 18,
                'nama' => 'Dark Chocolate Gelato',
                'kategori' => 'Ice Cream',
                'harga' => 40000,
                'stok' => 8,
                'deskripsi' => 'Gelato cokelat pekat dengan tekstur lembut dan rasa bittersweet yang kaya'
            ],
            [
                'id' => 19,
                'nama' => 'Vanilla Soft Serve',
                'kategori' => 'Ice Cream',
                'harga' => 38000,
                'stok' => 27,
                'deskripsi' => 'Es krim vanilla creamy dengan remahan biskuit cokelat yang manis gurihEs krim vanilla klasik yang lembut dan manis, disajikan dalam cone renyah'
            ],
            [
                'id' => 20,
                'nama' => 'Mango Sticky Rice',
                'kategori' => 'Traditional',
                'harga' => 28000,
                'stok' => 15,
                'deskripsi' => 'Dessert Thailand dengan mangga manis dan ketan'
            ],
            [
                'id' => 21,
                'nama' => 'Serabi Pandan',
                'kategori' => 'Traditional',
                'harga' => 28000,
                'stok' => 12,
                'deskripsi' => 'Serabi hijau lembut dengan kuah santan manis dan topping cokelat parut'
            ],
            [
                'id' => 22,
                'nama' => 'Tape Cheesecake',
                'kategori' => 'Traditional',
                'harga' => 35000,
                'stok' => 10,
                'deskripsi' => 'Inovasi tape singkong berpadu dengan keju cream cheese menciptakan rasa unik manis legit'
            ],
            [
                'id' => 23,
                'nama' => 'Kolak Pisang Ubi Ungu',
                'kategori' => 'Traditional',
                'harga' => 28000,
                'stok' => 10,
                'deskripsi' => 'Kolak klasik dengan pisang dan ubi ungu, disajikan hangat dengan santan gurih'
            ],
            [
                'id' => 24,
                'nama' => 'Es Dawet Nangka',
                'kategori' => 'Traditional',
                'harga' => 28000,
                'stok' => 12,
                'deskripsi' => 'Minuman es tradisional dengan cendol, potongan nangka, dan kuah santan manis segar'
            ],
            [
                'id' => 25,
                'nama' => 'Klepon',
                'kategori' => 'Traditional',
                'harga' => 25000,
                'stok' => 20,
                'deskripsi' => 'Klepon isi gula merah cair dengan sentuhan tampilan modern dan warna pastel yang lucu'
            ]
        ];

        return view('pengelolaan', compact('desserts', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}
