<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;
class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::insert(
        array(
            array('id' => '1','title' => 'What is an Apostilled Document?','description' => 'An apostille is a document that validates the signature of a public dignitary on an official paper for utilization in another country.  The legality of the signature of the public dignitary who signed the paper, the potential in which that public official was acted upon.','status' => 'A','created_at' => '2024-04-20 11:15:07','updated_at' => '2024-04-20 11:15:07'),
            array('id' => '2','title' => 'Basics Of Apostille','description' => 'Apostilling papers that will be used in other nations need a notary or validation, but this is done only after your signer asks to produce one. A notary is a document frequently added to the certificate by a relevant government official after it is apostilled.','status' => 'A','created_at' => '2024-04-20 11:16:15','updated_at' => '2024-04-20 11:16:15'),
            array('id' => '3','title' => 'The Apostilles Responsibility','description' => 'Your only role is to apostille the certificate itself. However, because the paper is guaranteed for another nation, the apostille must be carried out well to ensure no challenges on the receiving place. Understand that the administration will be closely inspected with apostilled papers going via an apostilles regulator’s office. Any apostille mistakes may end up in an implementation activity against you.','status' => 'A','created_at' => '2024-04-20 11:16:51','updated_at' => '2024-04-20 11:16:51')
        )
    );
    }
}
