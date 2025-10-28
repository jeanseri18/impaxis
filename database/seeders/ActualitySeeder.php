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
                'is_published' => true,
                'published_at' => now(),
                // 'actu_cover' => public_path() . '/assets/images/cover_actu.jpg', 
            ],
            [
                'title' => 'La Macro du Soir du 22/10/2025', 
                'slug' => Str::slug('La Macro du Soir du 22/10/2025'), 
                'content' => "
                                <h3>Les Nouvelles</h3>
                                <p>Par IMPAXIS Securities – Global Research Department
Dans la Zone UEMOA – Sur le marché de la BRVM, la valeur des transactions s’élève à 1 404 793 511: 1 223 198 471 en actions et 181 595 040 en obligations, la capitalisation des actions à 13 048 422 882 557 FCFA et la capitalisation des obligations à 10 915 178 683 195 FCFA.
</p>
<p>Sur le marché international – Le taux d'inflation annuel au Royaume-Uni est resté stable à 3,8% en septembre 2025, inchangé par rapport aux deux mois précédents et inférieur aux attentes de 4%. Sur une base mensuelle, l'IPC était inchangé. L'inflation sous-jacente annuelle a ralenti de manière inattendue, passant de 3,6% à 3,5%.</p>
<h3>ECONOMIE</h3>
<h5>Les 20 plus grandes forces de travail du monde, par pays</h5>
<p>La main-d'œuvre mondiale, c'est-à-dire le nombre total de personnes qui travaillent ou qui recherchent activement du travail, en dit long sur la démographie et le potentiel économique mondiaux.
• L'Asie domine la main-d'œuvre mondiale, la Chine et l'Inde en tête, qui représentent ensemble plus de 1,3 milliard de travailleurs.
• Les États-Unis sont en tête parmi les économies développées, avec une main-d'œuvre dépassant 174 millions de personnes.
Le Japon suit avec 69 millions de travailleurs, tandis que l'Allemagne en emploie environ 44 millions. Malgré le vieillissement de la population dans d'autres pays à revenu élevé, les États-Unis continuent de maintenir un marché du travail dynamique soutenu par l'immigration et les industries basées sur les services.</p>
<p>Des pays comme l'Indonésie, le Nigeria, le Brésil et le Pakistan comptent chacun plus de 75 millions de travailleurs. En particulier, la main-d'œuvre africaine augmente rapidement : le Nigeria se classe déjà au cinquième rang et la République démocratique du Congo a dépassé les 38 millions de travailleurs. D'ici 2050, la main-d'œuvre africaine pourrait doubler, ce qui remodèlerait le commerce mondial et les migrations.</p>
<h3>Zone UEMOA</h3>
<p>Le 22 Oct., il y avait 25 actions en hausse et 10 actions en baisse.
BRVM C gagne 0,67% à 338,43 points. BRVM 30 gagne 0,69% à 167,64 points. Le meilleur gagnant CFAO MOTORS ajoute 5% à 1785 XOF. Principal retardataire, SICABLE perd 7,49% à 1790 XOF.
Dividendes et Intérêts à verser
• 22 Oct – VIVO ENERGY CI (85,56 FCFA/action), ex-dividende 20 Oct.
• 26 Oct – «Oragroup SA 7,15% 2021-2025» intérêt et remboursement partiel du capital, ex-coupon 22 Oct
• 6 Nov – «TPBF 6,30% 2024-2029» | «TPBF 6,55% 2024-2031» | «TPBF 6,50% 2019-2027», paiement intérêts semestriels, ex- coupon 4 Nov
• 15 Nov – «ETAT DU BURKINA 6,30 % 2022-2034», intérêt et remboursement partiel du capital, ex-coupon 12 Nov
• 15 Nov – «TPBF 6,50 % 2018-2025», intérêt et dernier remboursement du capital, ex-coupon 12 Nov. Radiation de la cote à l’issue du dernier remboursement de son capital.
• 16 Nov – «TPTG 6,0% 2022-2037», intérêt et remboursement partiel du capital, ex-coupon 12 Nov
• 27 Nov - «FCTC EPT 7% 2023-2030» | «FCTC EPT 7,25% 2023- 2033» | «FCTC EPT 7% 2023-2038», intérêt et remboursement partiel du capital, ex-coupon 25 Nov
UMOA Titres : Émissions de cette semaine
• Trésor de la Guinée-Bissau le 21.10.2025
• Trésor du Burkina Faso le 22.10.2025
• Trésor du Niger le 23.10.2025
• Trésor du Togo le 24.10.2025
Réunions d’Assemblée Générale Ordinaire
• BOAC, prévue 20/10, reportée au 6/11/2025 Notations
• SAPH CI – GCR Ratings, BBB+ long terme perspective stable à l’échelle régionale
• BOA Sénégal – Bloomfield Investment, A long terme, A1- court terme
• Petro Ivoire – Bloomfield Investment, AA- long terme, A3 court terme</p>
<h3>Marché International</h3>
<p>Devises – Les perdants sont GBP (-0.12%). Peu de changements pour DXY et JPY. Les gagnants sont PLN (0.55%), NOK (0.40%), INR (0.34%) et EUR (0.10%).
Indices d’actions – Le S&P 500 et le Dow Jones ont chuté de plus de 0,5%, ce dernier ayant clôturé à un record hier, tandis que le Nasdaq a glissé de 1,2%. Netflix a chuté de plus de 10% après que ses résultats ont été affectés par un différend fiscal au Brésil. Tesla a chuté de plus de 2% avant la publication de ses résultats après la cloche de clôture à la suite de l'annonce que les véhicules récemment construits peuvent subir une perte soudaine de batterie. Le FTSE 100 a grimpé de 1% en raison de solides bénéfices des entreprises et d'une inflation britannique plus faible que prévu, alimentant les spéculations selon lesquelles la Banque d'Angleterre pourrait réduire les taux d'intérêt. Cela a stimulé les actions de construction de logements, Persimmon et Taylor Wimpey ayant augmenté de 6,4% et 4,5%, respectivement. Les actions de Barclays ont augmenté de plus de 3% après avoir publié des résultats « solides », montrant la vigueur des prêts et de la banque d'investissement au Royaume-Uni.</p>
<p>Obligations – Le US10Y a atteint son plus bas niveau en un an à 3,94% avant de se stabiliser à près de 3,97%, soutenu par les attentes persistantes d'un assouplissement monétaire continu de la Réserve fédérale. On s'attend à ce que la Fed réduise le taux des fonds fédéraux de 25 points de base supplémentaires la semaine prochaine, malgré l'absence de données économiques actualisées. Le UK10Y gilts est passé sous la barre des 4,4%, son plus bas niveau depuis la mi-décembre, alors que des données sur l'IPC plus faibles que prévu ont alimenté les spéculations sur des baisses précoces des taux d'intérêt par la BoE.</p>
<p>Matières Premières – Les prix de l'Or ont prolongé leur baisse, chutant de plus de 2% en dessous de $4 050 l'once. L'optimisme des investisseurs a été alimenté par les attentes d'un apaisement des tensions commerciales entre les États-Unis et la Chine, les présidents Donald Trump et Xi Jinping devant se rencontrer la semaine prochaine pour aborder les différends tarifaires et empêcher une nouvelle escalade. Les contrats à terme sur le pétrole brut WTI ont augmenté de plus de 2% à $58,6 le baril, rebondissant après des creux proches de plusieurs années, alors que des rapports suggèrent que les États-Unis et l'Inde pourraient conclure un accord commercial qui pourrait voir l'Inde réduire progressivement les importations de brut russe, stimulant la demande pour d'autres sources.</p>
<h3>Keep An Eye</h3>
<p>Congo Brazza: 300 milliards d'excédent budgétaire, une performance rare en Afrique centrale selon le FMI
Le Congo affiche un excédent budgétaire de 3,2% du PIB en 2025, soit près de 300 milliards FCFA, une performance saluée par le FMI. Cette rigueur budgétaire s'appuie sur la remontée du baril et une meilleure maîtrise des dépenses publiques. Dans un contexte régional marqué par des déficits persistants, le pays se distingue par sa capacité à restaurer les équilibres macroéconomiques, après plusieurs années d'instabilité. Le FMI note que cette politique de consolidation a permis d'éviter de nouveaux déséquilibres financiers tout en redonnant de la crédibilité à la trajectoire économique de Brazzaville.</p>
<p>Afrique : l’AFC obtient 100 millions USD de FinDev Canada pour accélérer les infrastructures vertes
L'AFC, Africa Finance Corporation, institution panafricaine de financement d'infrastructures, annonce avoir obtenu une facilité de prêt à terme de 100 millions de dollars, soit 56,6 milliards FCFA, auprès de FinDev Canada, l'institution bilatérale canadienne de financement du développement. Cette transaction, conclue sur une période de 10 ans, marque une double première, à savoir l'entrée de l'AFC sur le marché canadien et le premier financement d'infrastructures de FinDev Canada en Afrique subsaharienne.</p>
                            ",
                'category_id' => 1, // Assuming category_id 1 exists
                'created_by' => 1,
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
                'category_id' => $actuality['category_id'],
                'is_published' => $actuality['is_published'],
                'published_at' => $actuality['published_at'],
            ]);

            // $actu->addMedia($actuality['actu_cover'])
            //     ->preservingOriginal()
            //     ->toMediaCollection('actu_cover');
        }  
    }
}
