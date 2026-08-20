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
                'name' => 'Ababacar DIAW',
                'slug' => Str::slug('Ababacar DIAW'),
                'lang' => 'fr',
                'role' => 'Administrateur Directeur Général d\'Impaxis Securities',
                'experience' => '+20',
                'avatar' => public_path() . '/assets/image/equipes/ababacar-diaw.png',
                'bio' => "
                    20 ans d'expérience comme banquier d‘affaires avec une expertise en M&A incluant de solides références dans des processus de cession et d’acquisition achevés et des opérations DCM dans la région UEMOA
                    Avant de rejoindre le Groupe IMPAXIS, Ababacar était un banquier d‘affaires dans le département M&A de HSBC à Paris avec une zone d’intervention couvrant l’Europe, le MENA et l’Afrique Sub-Saharienne
                    Il a participé à plusieurs opérations stratégiques dans des secteurs tels que les Telecoms, les Institutions Financières, les biens de consommation avec des entreprises de premier rang (Vivendi, Maroc Telecom, Technip, Carrefour, AGFA, PAI Partners, etc.)
                    Auparavant, il a travaillé dans le département Audit de Deloitte à Paris
                    Il est diplômé du Magistère Banque, Finance, Assurance de l'Université Paris Dauphine avec une spécialisation en Corporate Finance & Investment Banking à Olin Busines School (Washington University of St-Louis - USA). Il détient également un Master en «Economie et Finance Internationales » de Paris Dauphine.
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
                'name' => 'Ababacar DIAW',
                'slug' => Str::slug('Ababacar DIAW en'),
                'lang' => 'en',
                'role' => 'Managing Director of Impaxis Securities',
                'experience' => '+20',
                'avatar' => public_path() . '/assets/image/equipes/ababacar-diaw.png',
                'bio' => "
                    20 years of experience as an investment banker with expertise in M&A, including strong references in completed sale and acquisition processes and DCM transactions in the WAEMU region.
                    Before joining the IMPAXIS Group, Ababacar was an investment banker in the M&A department of HSBC in Paris, with a scope covering Europe, the MENA region, and Sub-Saharan Africa.
                    He participated in several strategic transactions in sectors such as telecommunications, financial institutions, and consumer goods with leading companies (Vivendi, Maroc Telecom, Technip, Carrefour, AGFA, PAI Partners, etc.).
                    Previously, he worked in the Audit department at Deloitte in Paris. He holds a Master's degree in Banking, Finance, and Insurance from Paris Dauphine University, specializing in Corporate Finance and Investment Banking from Olin 
                    Business School (Washington University of St. Louis, USA). He also holds a Master's degree in International Economics and Finance from Paris Dauphine University.
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
