<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use App\User;
use App\Category;
use App\Product;
use App\UserDetail;
use App\Cart;

//Database Seeder
class DatabaseSeeder extends Seeder
{
    //Run the Seeder
    public function run()
    {
        Model::unguard();

        //Call User Table Seeder
        $this->call('UserTableSeeder');

        //Call Category Table Seeder
        $this->call('CategoryTableSeeder');

        //Call Products Table Seeder
        $this->call('ProductTableSeeder');

        //Call UserDetail Table Seeder
        $this->call('UserDetailTableSeeder');

        //Call Carts Table
        $this->call('CartTableSeeder');


        Model::reguard();
    }
}

//User Table Seeder
class UserTableSeeder extends Seeder
{
    //Seeds the User Table
    public function run()
    {
        //New Faker Client
        $faker= Faker::create();

        //Truncate Old Users Table
        User::truncate();

        //Populate New Users (50)
        foreach(range(1,50) as $index)
        {
            //Create a User Entry
            User::create(
                [
                    'name'     => $faker->name,
                    'email'    => $faker->email,
                    'password' => \Hash::make( $faker->password ),
                ]
            );
        }
    }
}

//Category Table Seeder
class CategoryTableSeeder extends Seeder
{
    //Seeds the Category Table
    public function run()
    {
        //New Faker Client
        $faker= Faker::create();

        //Truncate Old Category Table
        Category::truncate();

        //Populate New Categories (10)
        foreach(range(1,10) as $index)
        {
            //Create a Category Entry
            Category::create(
                [
                    'category_name' => $faker->domainWord,
                ]
            );

        }
    }
}

//Product Table Seeder
class ProductTableSeeder extends Seeder
{
    //Seeds the Product Table
    public function run()
    {
        //New Faker Client
        $faker= Faker::create();

        //Truncate Old Products Table
        Product::truncate();

        //Populate New Products (50)
        foreach (range(1,100) as $index)
        {
            //Create a Product Entry
            Product::create(
                [
                    'product_name'=> $faker->domainWord,
                    'category_id' => Category::find(rand(1,10))->id,
                    'price'       => rand(50, 500),
                ]
            );
        }
    }
}

//User Detail Table Seeder
class UserDetailTableSeeder extends Seeder
{
    //Seeds the User Details Table
    public function run()
    {
        //New Faker Client
        $faker = Faker::create();

        //Add Faker Provider for Cell Phone Numbers
        $faker->addProvider(new \Faker\Provider\pt_BR\PhoneNumber ($faker));

        //Truncate Old UserDetails Table
        UserDetail::truncate();

        //Populate New User UserDetails (50)
        foreach (range(1,50) as $index)
        {
            //Create a UserDetail Entry
            UserDetail::create(
                [
                    'user_id'   => User::find($faker->unique()->numberBetween( $min = 1, $max = 50))->id,
                    'address'   => $faker->address,
                    'mobile_no' => $faker->cellphone(true, true),
                ]
            );
        }
    }
}

//Cart Table Seeder
class CartTableSeeder extends Seeder
{
    //Seeds the Cart Table
    public function run()
    {
        //New Faker Client
        $faker = Faker::create();

        //Truncate Old Carts Table
        Cart::truncate();

        //Populate New Cart Table (50)
        foreach (range(1, 50) as $index)
        {
            //Status array
            $status= array('ordered', 'confirmed', 'packed', 'enroute', 'delivered');

            //Create a Cart Entry
            Cart::create(
                [
                    'user_id'   => User::find(rand(1, 50))->id,
                    'product_id'=> Product::find(rand(1,100))->id,
                    'quantity'  => rand(1,10),
                    'status'    => $status[rand(0,4)],
                ]
            );
        }
    }
}