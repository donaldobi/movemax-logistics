<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contactForms = [
            [
                'name' => 'Oluwaseun Adebayo',
                'phone' => '08012345678',
                'email' => 'oluwaseun.adebayo@gmail.com',
                'subject' => 'Freight Transportation Inquiry',
                'message' => 'I need a quote for transporting goods from Lagos to Abuja. What are your rates and timelines?'
            ],
            [
                'name' => 'Chidinma Nwosu',
                'phone' => '08098765432',
                'email' => 'chidinma.nwosu@yahoo.com',
                'subject' => 'Warehousing Services',
                'message' => 'Do you offer climate-controlled warehousing for perishable goods? I\'m interested in your storage solutions.'
            ],
            [
                'name' => 'Emeka Okafor',
                'phone' => '07087654321',
                'email' => 'emeka.okafor@hotmail.com',
                'subject' => 'Last Mile Delivery Partnership',
                'message' => 'Our e-commerce business is looking to partner with a reliable last mile delivery service. Can we discuss your capabilities?'
            ],
            [
                'name' => 'Aisha Mohammed',
                'phone' => '08123456789',
                'email' => 'aisha.mohammed@gmail.com',
                'subject' => 'Moving Services Request',
                'message' => 'I\'m relocating from Lekki to Ikeja next month. What moving services do you offer for residential moves?'
            ],
            [
                'name' => 'Tunde Bakare',
                'phone' => '08076543210',
                'email' => 'tunde.bakare@outlook.com',
                'subject' => 'International Shipping Inquiry',
                'message' => 'I need to ship some items to the UK. What are your international shipping options and rates?'
            ],
            [
                'name' => 'Ngozi Eze',
                'phone' => '07098765432',
                'email' => 'ngozi.eze@yahoo.com',
                'subject' => 'Bulk Transportation Query',
                'message' => 'Our company needs to transport large quantities of construction materials. Do you handle bulk transportation?'
            ],
            [
                'name' => 'Yusuf Ibrahim',
                'phone' => '08187654321',
                'email' => 'yusuf.ibrahim@gmail.com',
                'subject' => 'Express Delivery Services',
                'message' => 'What are your express delivery options within Lagos? I need same-day delivery services.'
            ],
            [
                'name' => 'Folake Adeleke',
                'phone' => '07076543210',
                'email' => 'folake.adeleke@hotmail.com',
                'subject' => 'Corporate Moving Services',
                'message' => 'Our company is relocating offices. Can you provide a quote for moving our entire office equipment and furniture?'
            ],
            [
                'name' => 'Chukwudi Okonkwo',
                'phone' => '08165432109',
                'email' => 'chukwudi.okonkwo@yahoo.com',
                'subject' => 'Specialized Item Transportation',
                'message' => 'I need to transport delicate laboratory equipment. Do you offer specialized transportation services for fragile items?'
            ],
            [
                'name' => 'Amina Bello',
                'phone' => '07054321098',
                'email' => 'amina.bello@gmail.com',
                'subject' => 'Logistics Consultation',
                'message' => 'I\'m starting a small business and need advice on logistics. Can I schedule a consultation to discuss my needs?'
            ],
            [
                'name' => 'Olumide Ajayi',
                'phone' => '08143210987',
                'email' => 'olumide.ajayi@outlook.com',
                'subject' => 'Tracking System Inquiry',
                'message' => 'What kind of tracking system do you use for shipments? I need real-time updates for my deliveries.'
            ],
            [
                'name' => 'Blessing Okafor',
                'phone' => '07032109876',
                'email' => 'blessing.okafor@yahoo.com',
                'subject' => 'Eco-friendly Logistics Options',
                'message' => 'Does Movemax offer any eco-friendly logistics solutions? We\'re looking for partners with sustainable practices.'
            ]
        ];

        foreach ($contactForms as $contactForm) {
            \App\Models\ContactForm::create($contactForm);
        }
    }
}
