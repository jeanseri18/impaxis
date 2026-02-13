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
                    Il est diplômé du Magistère Banque, Finance, Assurance de l'Université Paris Dauphine avec une spécialisation en Corporate Finance & Investment Banking à Olin Busines School (Washington University of St-Louis - USA). Il détient également un Master en «Economie et Finance Internationales » de Paris Dauphine
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
