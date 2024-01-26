<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder {
    public function run() {
        $links = [
            ['name' => 'Home', 'route' => 'home', 'ordering' => 1],
            ['name' => 'Products', 'route' => 'products.index', 'ordering' => 2],
            ['name' => 'About US', 'route' => 'about.us', 'ordering' => 3]
        ];
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}
