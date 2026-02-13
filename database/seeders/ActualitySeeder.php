<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actuality;
use Illuminate\Support\Str;

class ActualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actualities = [
            [
                'title' => 'Quelques-unes de nos références', 
                'slug' => Str::slug('Quelques-unes de nos références'), 
                'content' => 'Impaxis un acteur leader des dernières opérations de levée de fonds sur le marché obligataire.
                                IMPAXIS dispose d’une importante base d’investisseurs favorisant la distribution maximale de ses opérations.',
                'category_id' => 1, // Assuming category_id 1 exists
                'created_by' => 1,
                'lang' => 'fr',
                'is_published' => true,
                'published_at' => now(),
                // 'actu_cover' => public_path() . '/assets/images/cover_actu.jpg', // Assuming you have a cover image'',
            ],
            [
                'title' => 'Première obligation sociale dédiée au logement dans l’UEMOA', 
                'slug' => Str::slug('Première obligation sociale dédiée au logement dans l’UEMOA'), 
                'content' => 'Comme vous le savez sans doute, nous allons lancer ce lundi 05 mai 2025 le premier social bond totalement dédié au logement de la région avec la CRRH.
                                Le Social Bond de CRRH-UEMOA offre un rendement attractif et un impact réel sur l’accès au logement dans l’UEMOA.', 
                'category_id' => 1, // Assuming category_id 1 exists
                'created_by' => 1,
                'lang' => 'fr',
                'is_published' => true,
                'published_at' => now(),
                // 'actu_cover' => public_path() . '/assets/images/cover_actu.jpg', // Assuming you have a cover image
            ],
            [
                'title' => '1st Basket Bond related financing in the Region!', 
                'slug' => Str::slug('1st Basket Bond related financing in the Region!'), 
                'content' => 'Nourmony Holding, structure mère de plusieurs sociétés opérant dans divers secteurs comme la distribution d’engins BTP, de camions et d’automobile, la location d’engins BTP, l’exploitation de carrières et la production de Bétons manufacturés, lance un emprunt obligataire par appel public à l\'épargne conjoint et solidaire d\'un montant de 20 milliards  “Nourmony Holding - 7,25% – 2024-2029“.
                                Cette opération a pour objectif de financer des projets stratégiques et de soutenir la croissance des filiales dans des secteurs clés comme le BTP, l’automobile et la santé. Pour plus d\'informations, visitez le site Web de l’opération <a href="https://bond.nourmony.com/" target="_blank">bond.nourmony.com</a>.
                                Dynamisons nos PME avec des financements solides et innovants !',
                'category_id' => 1, // Assuming category_id 1 exists
                'created_by' => 1,
                'lang' => 'fr',
                'is_published' => true,
                'published_at' => now(),
                // 'actu_cover' => public_path() . '/assets/images/cover_actu.jpg', // Assuming you have a cover image
            ],
            [
                'title' => 'Titrisation de créances souveraines pour optimiser la gestion des actifs et mobiliser des fonds pour soutenir des projets stratégiques dans des secteurs clés', 
                'slug' => Str::slug('Titrisation de créances souveraines pour optimiser la gestion des actifs et mobiliser des fonds pour soutenir des projets stratégiques dans des secteurs clés'), 
                'content' => 'Impaxis Securities a le plaisir de vous informer du lancement ce jour de l’Appel Public à l’Epargne par titrisation de créances souveraines d’un montant de 160 milliards (dont 28,75 milliards F CFA de la tranche Mezzanine disponible pour les investisseurs hors investisseur de référence) ce jour avec la BOAD comme sponsor et BOAD Titrisation comme arrangeur.
                                La période de souscription s’étend du 22 août 2024 à 09h00 GMT au 06 septembre 2024 à 17h GMT avec possibilité de clôture anticipée.',
                'category_id' => 1, // Assuming category_id 1 exists
                'created_by' => 1,
                'lang' => 'fr',
                'is_published' => true,
                'published_at' => now(),
                // 'actu_cover' => public_path() . '/assets/images/cover_actu.jpg', 
            ],

            // Add actualities english version
            [
                'title' => 'Some of our references', 
                'slug' => Str::slug('Some of our references'), 
                'content' => 'Impaxis is a leading player in recent bond market fundraising operations.
                                Imtaxis has a large investor base, enabling it to maximize the distribution of its funds.',
                'category_id' => 1, // Assuming category_id 1 exists
                'created_by' => 1,
                'lang' => 'en',
                'is_published' => true,
                'published_at' => now(),
                // 'actu_cover' => public_path() . '/assets/images/cover_actu.jpg', // Assuming you have a cover image'',
            ],
            [
                'title' => 'First social obligation dedicated to housing in the WAEMU', 
                'slug' => Str::slug('First social obligation dedicated to housing in the WAEMU'), 
                'content' => 'As you probably know, we will be launching the first social bond entirely dedicated to housing in the region this Monday, May 5, 2025, in partnership with CRRH.
                                The CRRH-UEMOA Social Bond offers an attractive return and a real impact on access to housing in the WAEMU.', 
                'category_id' => 1, // Assuming category_id 1 exists
                'created_by' => 1,
                'lang' => 'en',
                'is_published' => true,
                'published_at' => now(),
                // 'actu_cover' => public_path() . '/assets/images/cover_actu.jpg', // Assuming you have a cover image
            ],
            [
                'title' => '1st Basket Bond related financing in the Region !', 
                'slug' => Str::slug('1st Basket Bond related financing in the Region english version!'), 
                'content' => "Nourmony Holding, the parent company of several businesses operating in various sectors such as construction equipment, truck and automobile distribution, 
                                construction equipment rental, quarrying, and ready-mix concrete production, is launching a joint and solidarity-based public offering of 20 billion CFA francs: “Nourmony Holding - 7.25% - 2024-2029”.
                                This operation aims to finance strategic projects and support the growth of subsidiaries in key sectors such as construction, automotive, and healthcare. For more information, visit the operation's 
                                website: <a href='https://bond.nourmony.com/' target='_blank'>bond.nourmony.com</a>. Let's boost our SMEs with solid and innovative financing!",
                'category_id' => 1, // Assuming category_id 1 exists
                'created_by' => 1,
                'lang' => 'en',
                'is_published' => true,
                'published_at' => now(),
                // 'actu_cover' => public_path() . '/assets/images/cover_actu.jpg', // Assuming you have a cover image
            ],
            [
                'title' => 'Securitization of sovereign debt to optimize asset management and raise funds to support strategic projects in key sectors', 
                'slug' => Str::slug('Securitization of sovereign debt to optimize asset management and raise funds to support strategic projects in key sectors'), 
                'content' => 'Impaxis Securities is pleased to announce the launch today of a Public Offering through the securitization of sovereign debt amounting to 160 billion CFA francs (including 28.75 billion CFA francs of the 
                                Mezzanine tranche available to investors other than the anchor investor). BOAD is the sponsor and BOAD Titrisation is the arranger.
                                The subscription period runs from August 22, 2024 at 09:00 GMT to September 6, 2024 at 17:00 GMT, with the possibility of early closing.',
                'category_id' => 1, // Assuming category_id 1 exists
                'created_by' => 1,
                'lang' => 'en',
                'is_published' => true,
                'published_at' => now(),
                // 'actu_cover' => public_path() . '/assets/images/cover_actu.jpg', 
            ],
        ];

        foreach ($actualities as $actuality) {
            $actu = Actuality::create([
                'title' => $actuality['title'],
                'slug' => $actuality['slug'],
                'content' => $actuality['content'],
                'created_by' => $actuality['created_by'],
                'created_by' => $actuality['created_by'],
                'lang' => $actuality['lang'],
                'is_published' => $actuality['is_published'],
                'published_at' => $actuality['published_at'],
            ]);

            // $actu->addMedia($actuality['actu_cover'])
            //     ->preservingOriginal()
            //     ->toMediaCollection('actu_cover');
        }  
    }
}
