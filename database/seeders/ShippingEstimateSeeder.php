<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippingEstimateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shippingEstimates = [
            [
                'name' => 'Chukwuma Nwosu',
                'email' => 'chukwuma.nwosu@gmail.com',
                'pickup_location' => 'Lagos',
                'pickup_address' => '15 Adeola Odeku Street, Victoria Island, Lagos',
                'mobile' => '08012345678',
                'item_weight' => 25.5,
                'delivery_location' => 'Abuja',
                'delivery_address' => '7 Ahmadu Bello Way, Garki, Abuja',
                'item_description' => 'Office furniture and equipment',
                'delivery_cost' => 45000.00,
            ],
            [
                'name' => 'Amina Bello',
                'email' => 'amina.bello@yahoo.com',
                'pickup_location' => 'Kano',
                'pickup_address' => '22 Ibrahim Taiwo Road, Kano',
                'mobile' => '08098765432',
                'item_weight' => 10.2,
                'delivery_location' => 'Kaduna',
                'delivery_address' => '5 Kashim Ibrahim Road, Kaduna',
                'item_description' => 'Textile materials',
                'delivery_cost' => 15000.00,
            ],
            [
                'name' => 'Oluwaseun Adebayo',
                'email' => 'oluwaseun.adebayo@hotmail.com',
                'pickup_location' => 'Ibadan',
                'pickup_address' => '10 Awolowo Road, Bodija, Ibadan',
                'mobile' => '07087654321',
                'item_weight' => 5.7,
                'delivery_location' => 'Lagos',
                'delivery_address' => '25 Marina Street, Lagos Island, Lagos',
                'item_description' => 'Electronics',
                'delivery_cost' => 8000.00,
            ],
            [
                'name' => 'Chidinma Okoro',
                'email' => 'chidinma.okoro@gmail.com',
                'pickup_location' => 'Port Harcourt',
                'pickup_address' => '7 Aba Road, Port Harcourt',
                'mobile' => '08023456789',
                'item_weight' => 100.0,
                'delivery_location' => 'Benin City',
                'delivery_address' => '15 Sapele Road, Benin City',
                'item_description' => 'Industrial machinery',
                'delivery_cost' => 80000.00,
            ],
            [
                'name' => 'Ibrahim Musa',
                'email' => 'ibrahim.musa@yahoo.com',
                'pickup_location' => 'Kaduna',
                'pickup_address' => '12 Ali Akilu Road, Kaduna',
                'mobile' => '07065432109',
                'item_weight' => 15.3,
                'delivery_location' => 'Kano',
                'delivery_address' => '8 Zoo Road, Kano',
                'item_description' => 'Agricultural products',
                'delivery_cost' => 20000.00,
            ],
            [
                'name' => 'Folake Adeleke',
                'email' => 'folake.adeleke@gmail.com',
                'pickup_location' => 'Lagos',
                'pickup_address' => '30 Broad Street, Lagos Island, Lagos',
                'mobile' => '08034567890',
                'item_weight' => 2.1,
                'delivery_location' => 'Ibadan',
                'delivery_address' => '5 Ring Road, Ibadan',
                'item_description' => 'Documents and parcels',
                'delivery_cost' => 5000.00,
            ],
            [
                'name' => 'Emeka Okafor',
                'email' => 'emeka.okafor@hotmail.com',
                'pickup_location' => 'Abuja',
                'pickup_address' => '10 Tafawa Balewa Way, Garki, Abuja',
                'mobile' => '07098765432',
                'item_weight' => 50.0,
                'delivery_location' => 'Port Harcourt',
                'delivery_address' => '22 Olu Obasanjo Road, Port Harcourt',
                'item_description' => 'Construction materials',
                'delivery_cost' => 60000.00,
            ],
            [
                'name' => 'Aisha Mohammed',
                'email' => 'aisha.mohammed@yahoo.com',
                'pickup_location' => 'Kano',
                'pickup_address' => '5 Murtala Mohammed Way, Kano',
                'mobile' => '08056789012',
                'item_weight' => 7.8,
                'delivery_location' => 'Kaduna',
                'delivery_address' => '18 Constitution Road, Kaduna',
                'item_description' => 'Clothing and accessories',
                'delivery_cost' => 12000.00,
            ],
            [
                'name' => 'Olumide Ajayi',
                'email' => 'olumide.ajayi@gmail.com',
                'pickup_location' => 'Ibadan',
                'pickup_address' => '25 Iwo Road, Ibadan',
                'mobile' => '07012345678',
                'item_weight' => 30.5,
                'delivery_location' => 'Benin City',
                'delivery_address' => '7 Akpakpava Road, Benin City',
                'item_description' => 'Household goods',
                'delivery_cost' => 35000.00,
            ],
            [
                'name' => 'Ngozi Eze',
                'email' => 'ngozi.eze@hotmail.com',
                'pickup_location' => 'Port Harcourt',
                'pickup_address' => '15 Trans Amadi Road, Port Harcourt',
                'mobile' => '08087654321',
                'item_weight' => 12.7,
                'delivery_location' => 'Lagos',
                'delivery_address' => '40 Adetokunbo Ademola Street, Victoria Island, Lagos',
                'item_description' => 'Medical supplies',
                'delivery_cost' => 25000.00,
            ],
            [
                'name' => 'Yusuf Abdullahi',
                'email' => 'yusuf.abdullahi@yahoo.com',
                'pickup_location' => 'Kaduna',
                'pickup_address' => '8 Yakubu Gowon Way, Kaduna',
                'mobile' => '07023456789',
                'item_weight' => 18.9,
                'delivery_location' => 'Abuja',
                'delivery_address' => '12 Adetokunbo Ademola Crescent, Wuse II, Abuja',
                'item_description' => 'Food products',
                'delivery_cost' => 30000.00,
            ],
            [
                'name' => 'Blessing Okafor',
                'email' => 'blessing.okafor@gmail.com',
                'pickup_location' => 'Benin City',
                'pickup_address' => '20 Mission Road, Benin City',
                'mobile' => '08045678901',
                'item_weight' => 8.3,
                'delivery_location' => 'Port Harcourt',
                'delivery_address' => '30 Old Aba Road, Port Harcourt',
                'item_description' => 'Books and educational materials',
                'delivery_cost' => 18000.00,
            ],
        ];

        foreach ($shippingEstimates as $estimate) {
            \App\Models\ShippingEstimate::create($estimate);
        }
    }
}
