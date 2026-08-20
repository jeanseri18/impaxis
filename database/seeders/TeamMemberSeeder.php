<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        $teams = [
            [
                'name' => 'Momar NDOUR',
                'slug' => Str::slug('Momar NDOUR'),
                'lang' => 'fr',
                'role' => 'Président Directeur Général',
                'experience' => '+30',
                'avatar' => public_path() . '/assets/image/equipes/momar-ndour.png',
                'bio' => "
                    +30 ans d’expérience en tant que banquier d’affaires senior
                    Avant de fonder IMPAXIS Capital, Momar a été Directeur au sein du Département Afrique de la Citibank à Johannesburg (Afrique du Sud). Il dirigeait le département couvrant 18 pays d’Afrique occidentale et centrale
                    Il a également travaillé dans le département de recherche de la Caisse des Dépôts et Consignations (CDC) à Paris
                    Au cours de sa carrière, Momar a participé, dirigé et finalisé de nombreuses opérations d’émissions obligataires, de financements structurés, de structuration de capital, de restructuration de dette, de LBOs, de rachats d'entreprises et de mandats de conseil en Afrique de l'Ouest et Centrale
                    Il est Président du Conseil d’Administration d’IMPAXIS ainsi que de Mansa Financial Holding (holding de Mansa Bank Côte d’Ivoire) 
                    Momar est titulaire de deux diplômes de 3e cycle de l'Université Paris Dauphine, en Banque & finance et gestion d’entreprises. Il est également titulaire d’une maîtrise de Mathématiques pures de l’Université de Nice Sophia Antipolis
                ",
            ],
            [
                'name' => 'M. Babacar Ndoye',
                'slug' => Str::slug('M. Babacar Ndoye'),
                'lang' => 'fr',
                'role' => 'Directeur Général d\'Impaxis Securities',
                'experience' => '+15',
                'avatar' => public_path() . '/assets/image/equipes/babacar-ndoye.png',
                'bio' => "
                    +15 ans d’expérience dans les services financiers et l'assurance, alliant une expertise technique en gestion des risques à une vision stratégique de développement commercial.
                    Avant de prendre la direction de la filiale Asset Management du Groupe IMPAXIS, Babacar a occupé des fonctions de direction au sein du Groupe CFOA (AMSA Assurances), où il a notamment piloté la stratégie groupe, des opérations de fusions-acquisitions et le lancement de produits d’épargne financière classiques ainsi que des produits indexés sur des Fonds Communs de Placement en zone UMOA.
                    Il a débuté sa carrière à Paris-La Défense, acquérant une solide expérience en audit financier chez Mazars, en gestion des risques chez Euler Hermes (Groupe Allianz) et en conseil en stratégie chez Capgemini Consulting auprès de grands groupes bancaires (Société Générale principalement).
                    Babacar est ingénieur de formation. Il est diplômé de CentraleSupélec.
                    Il est également Actuaire (Membre de l’Institut des Actuaires).
                ",
            ],
            [
                'name' => 'Marième Youm KOBAR',
                'slug' => Str::slug('Marième Youm KOBAR'),
                'lang' => 'fr',
                'role' => 'CEO / Directrice Générale Impaxis Asset Management West Africa',
                'experience' => '+20',
                'avatar' => public_path() . '/assets/image/equipes/marieme-youm-kobar.png',
                'bio' => "
                    Avec plus de 20 ans d’expérience en Banque d’Investissement et en management stratégique, Marieme Youm KOBAR est une dirigeante confirmée, reconnue pour sa capacité à piloter des transformations stratégiques et opérationnelles dans le secteur financier.
                    Avant de rejoindre le Groupe Impaxis, elle a occupé plusieurs postes de responsabilité, notamment au Crédit Agricole CIB en France et au cabinet Mazars au Sénégal, où elle a contribué à des projets majeurs en gestion bancaire, management stratégique, excellence opérationnelle et performance organisationnelle. Son parcours témoigne d’une solide expertise en gouvernance opérationnelle, management des risques et pilotage stratégique, alliant rigueur analytique et culture du résultat.
                    Depuis juillet 2024, elle occupe le poste de Directrice Générale d’Impaxis Asset Management, où elle supervise la stratégie globale, le développement des activités de gestion d’actifs et la performance opérationnelle de la structure.
                    Madame KOBAR est titulaire d’un Master en Banque-Finance (ESM-A-MLV, France) et d’une Maîtrise en Économie et Gestion des Entreprises (Université Nancy 2).
                    Elle détient également plusieurs certifications internationales, notamment :Lead Implementer ISO 9001 – PECB, Stratégie – HEC Paris,
                    Lean Management – CA-CIB, et
                    •	Lean Six Sigma – CA-CIB
                    Son parcours illustre une expertise approfondie du secteur financier, en organisation stratégique, gouvernance opérationnelle et management de la performance, faisant d’elle une leader visionnaire, engagée au service de l’excellence et de la croissance durable.
                ",
            ],

            // English version team members can be added here
            [
                'name' => 'Momar NDOUR',
                'slug' => Str::slug('Momar NDOUR en'),
                'lang' => 'en',
                'role' => 'Chairman and CEO',
                'experience' => '+30',
                'avatar' => public_path() . '/assets/image/equipes/momar-ndour.png',
                'bio' => "
                    Over 30 years of experience as a senior investment banker
                    Before founding IMPAXIS Capital, Momar was a Director in the Africa Department at Citibank in Johannesburg, South Africa.
                    He led the department covering 18 countries in West and Central Africa. He also worked in the research department of the Caisse des Dépôts et Consignations (CDC) in Paris.
                    Throughout his career, Momar has participated in, led, and finalized numerous bond issuance transactions, structured finance deals, capital structuring, debt restructuring, 
                    leveraged buyouts (LBOs), corporate acquisitions, and advisory mandates in West and Central Africa.
                    He is Chairman of the Board of Directors of IMPAXIS and Mansa Financial Holding (the holding company of Mansa Bank Côte d’Ivoire).
                    Momar holds two postgraduate degrees from Paris Dauphine University, one in Banking & Finance and the other in Business Administration. He also holds a Master's degree 
                    in Pure Mathematics from the University of Nice Sophia Antipolis.
                ",
            ],
            [
                'name' => 'M. Babacar Ndoye',
                'slug' => Str::slug('M. Babacar Ndoye en'),
                'lang' => 'en',
                'role' => 'Managing Director of Impaxis Securities',
                'experience' => '+15',
                'avatar' => public_path() . '/assets/image/equipes/babacar-ndoye.png',
                'bio' => "
                    Over 15 years of experience in financial services and insurance, combining technical expertise in risk management with a strategic vision for business development.
                    Before heading the Asset Management subsidiary of the IMPAXIS Group, Babacar held executive roles at the CFOA Group (AMSA Assurances), where he notably steered the group's strategy, M&A operations, and the launch of both traditional financial savings products and products indexed to mutual funds within the UMOA zone.
                    He began his career in Paris-La Défense, gaining solid experience in financial audit at Mazars, risk management at Euler Hermes (Allianz Group), and strategy consulting at Capgemini Consulting, working with major banking groups (primarily Société Générale).
                    Babacar is an engineer by training and a graduate of CentraleSupélec.
                    He is also a qualified actuary (Member of the Institute of Actuaries).
                ",
            ],
            [
                'name' => 'Marième Youm KOBAR',
                'slug' => Str::slug('Marième Youm KOBAR en'),
                'lang' => 'en',
                'role' => 'CEO / Managing Director Impaxis Asset Management West Africa',
                'experience' => '+20',
                'avatar' => public_path() . '/assets/image/equipes/marieme-youm-kobar.png',
                'bio' => "
                    With over 20 years of experience in investment banking and strategic management, Marieme Youm Kobar is a seasoned executive, recognized for her ability to lead strategic and operational transformations in the financial sector.
                    Before joining the Impaxis Group, she held several senior positions, notably at Crédit Agricole CIB in France and at Mazars in Senegal, where she contributed to major projects in banking management, strategic management, operational 
                    excellence, and organizational performance. Her career demonstrates solid expertise in operational governance, risk management, and strategic leadership, combining analytical rigor with a results-oriented approach.
                    Since July 2024, she has held the position of Managing Director of Impaxis Asset Management, where she oversees the overall strategy, the development of asset management activities, and the operational performance of the firm.
                    Ms. Kobar holds a Master's degree in Banking and Finance (ESM-A-MLV, France) and a Master's degree in Economics and Business Management (University of Nancy 2).
                    She also holds several international certifications, including: Lead Implementer ISO 9001 – PECB, and Strategy – HEC Paris,
                    Lean Management – CA-CIB, et
                    •	Lean Six Sigma – CA-CIB
                    Her career illustrates a deep expertise in the financial sector, in strategic organization, operational governance and performance management, making her a visionary leader, committed to excellence and sustainable growth.
                ",
            ],
        ];

        foreach ($teams as $item) {
            $data = collect($item)->except('avatar');
            $person = TeamMember::create($data->toArray());

            $person->addMedia($item['avatar'])
                ->preservingOriginal()
                ->toMediaCollection('avatarTeam');
        }
    }
}
