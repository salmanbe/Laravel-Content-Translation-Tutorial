<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductTranslation;
use Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        ProductTranslation::truncate();
        Product::truncate();

        $product  = Product::create([
            'item_code' => 1000,
            'price' => 200
        ]);

        ProductTranslation::create([
            'product_id'  => $product->id,
            'locale' => "en",
            'heading' => "Equipment",
            'page_title' => "Equipment most commonly refers to a set of tools",
            'meta_description' => "Equipment most commonly refers to a set of tools or other objects commonly used to achieve a particular objective. Different jobs require different kinds of equipment.",
            'description' => "Equipment regularly used in offices by businesses and other organizations, by individuals engaged in written communications, recordkeeping or bookkeeping, janitorial and cleaning, and for storage of supplies or data. The range of items classified as office supplies varies, and typically includes small, expendable, daily use items, consumable products, small machines, higher cost equipment such as computers, as well as office furniture and art.",
            'slug' => "equipment"
        ]);

        ProductTranslation::create([
            'product_id'  => $product->id,
            'locale' => "nl",
            'heading' => "Apparatuur",
            'page_title' => "Apparatuur verwijst meestal naar een set gereedschappen",
            'meta_description' => "Apparatuur verwijst meestal naar een set gereedschappen of andere objecten die gewoonlijk worden gebruikt om een bepaald doel te bereiken. Verschillende banen vereisen verschillende soorten apparatuur.",
            'description' => "Apparatuur die regelmatig in kantoren wordt gebruikt door bedrijven en andere organisaties, door personen die zich bezighouden met schriftelijke communicatie, archivering of boekhouding, conciërge en schoonmaak, en voor de opslag van voorraden of gegevens. Het assortiment artikelen dat als kantoorbenodigdheden wordt geclassificeerd, varieert en omvat meestal kleine, verbruiksartikelen voor dagelijks gebruik, verbruiksartikelen, kleine machines, duurdere apparatuur zoals computers, maar ook kantoormeubilair en kunst.",
            'slug' => "apparatuur"
        ]);

        ProductTranslation::create([
            'product_id'  => $product->id,
            'locale' => "fr",
            'heading' => "Équipement",
            'page_title' => "L'équipement fait le plus souvent référence à un ensemble d'outils",
            'meta_description' => "L'équipement fait le plus souvent référence à un ensemble d'outils ou d'autres objets couramment utilisés pour atteindre un objectif particulier. Différents travaux nécessitent différents types d'équipements.",
            'description' => "Équipement régulièrement utilisé dans les bureaux par des entreprises et d'autres organisations, par des personnes engagées dans les communications écrites, la tenue de registres ou la comptabilité, l'entretien et le nettoyage, et pour le stockage de fournitures ou de données. La gamme d'articles classés comme fournitures de bureau varie et comprend généralement de petits articles consommables d'usage quotidien, des produits consommables, de petites machines, des équipements plus coûteux tels que des ordinateurs, ainsi que du mobilier de bureau et des objets d'art.",
            'slug' => "equipement"
        ]);

        $product  = Product::create([
            'item_code' => 2000,
            'price' => 250
        ]);

        ProductTranslation::create([
            'product_id'  => $product->id,
            'locale' => "en",
            'heading' => "Clothes",
            'page_title' => "Clothing is any item worn on the body",
            'meta_description' => "Typically, clothing is made of fabrics or textiles, but over time it has included garments made from animal skin and other thin sheets of materials and natural products found in the environment.",
            'description' => "Clothing serves many purposes: it can serve as protection from the elements, rough surfaces, sharp stones, rash-causing plants, and insect bites, by providing a barrier between the skin and the environment. Clothing can insulate against cold or hot conditions, and it can provide a hygienic barrier, keeping infectious and toxic materials away from the body. It can protect feet from injury and discomfort or facilitate navigation in varied environments. Clothing also provides protection from ultraviolet radiation. It may be used to prevent glare or increase visual acuity in harsh environments, such as brimmed hats. Clothing is used for protection against injury in specific tasks and occupations, sports, and warfare. Fashioned with pockets, belts, or loops, clothing may provide a means to carry things while freeing the hands.",
            'slug' => "clothes"
        ]);

        ProductTranslation::create([
            'product_id'  => $product->id,
            'locale' => "nl",
            'heading' => "Kleren",
            'page_title' => "Kleding is elk item dat op het lichaam wordt gedragen",
            'meta_description' => "Meestal is kleding gemaakt van stoffen of textiel, maar in de loop van de tijd zijn er ook kledingstukken gemaakt van dierenhuid en andere dunne vellen materiaal en natuurlijke producten die in het milieu worden aangetroffen.",
            'description' => "Kleding heeft vele doelen: het kan dienen als bescherming tegen de elementen, ruwe oppervlakken, scherpe stenen, huiduitslag veroorzakende planten en insectenbeten, door een barrière te vormen tussen de huid en de omgeving. Kleding kan isoleren tegen koude of warme omstandigheden en het kan een hygiënische barrière vormen, waardoor besmettelijke en giftige materialen uit de buurt van het lichaam worden gehouden. Het kan voeten beschermen tegen letsel en ongemak of navigatie in verschillende omgevingen vergemakkelijken. Kleding biedt ook bescherming tegen ultraviolette straling. Het kan worden gebruikt om verblinding te voorkomen of de gezichtsscherpte te vergroten in ruwe omgevingen, zoals hoeden met een rand. Kleding wordt gebruikt voor bescherming tegen letsel bij specifieke taken en beroepen, sport en oorlogsvoering. Kleding is gemaakt met zakken, riemen of lussen en kan een middel zijn om dingen te dragen terwijl de handen vrij zijn.",
            'slug' => "kleren"
        ]);

        ProductTranslation::create([
            'product_id'  => $product->id,
            'locale' => "fr",
            'heading' => "Vêtements",
            'page_title' => "Un vêtement est tout article porté sur le corps",
            'meta_description' => "En règle générale, les vêtements sont faits de tissus ou de textiles, mais au fil du temps, ils ont inclus des vêtements fabriqués à partir de peaux d'animaux et d'autres fines feuilles de matériaux et de produits naturels trouvés dans l'environnement.",
            'description' => "Les vêtements servent à plusieurs fins : ils peuvent servir de protection contre les éléments, les surfaces rugueuses, les pierres pointues, les plantes qui causent des éruptions cutanées et les piqûres d'insectes, en fournissant une barrière entre la peau et l'environnement. Les vêtements peuvent isoler contre le froid ou la chaleur, et ils peuvent fournir une barrière hygiénique, éloignant les matières infectieuses et toxiques du corps. Il peut protéger les pieds des blessures et de l'inconfort ou faciliter la navigation dans des environnements variés. Les vêtements offrent également une protection contre les rayons ultraviolets. Il peut être utilisé pour éviter l'éblouissement ou augmenter l'acuité visuelle dans des environnements difficiles, tels que des chapeaux à larges bords. Les vêtements sont utilisés pour la protection contre les blessures dans des tâches et des professions spécifiques, les sports et la guerre. Façonnés avec des poches, des ceintures ou des boucles, les vêtements peuvent fournir un moyen de transporter des choses tout en libérant les mains.",
            'slug' => "vetements"
        ]);

        $product  = Product::create([
            'item_code' => 3000,
            'price' => 300
        ]);

        ProductTranslation::create([
            'product_id'  => $product->id,
            'locale' => "en",
            'heading' => "Toys",
            'page_title' => "A toy or plaything is an object that is used primarily to provide entertainment",
            'meta_description' => "Playing with toys can be an enjoyable way of training young children for life experiences. Different materials like wood, clay, paper, and plastic are used to make toys.",
            'description' => "Toys became more widespread with changing Western attitudes towards children and childhood brought about by the Enlightenment. Previously, children had often been thought of as small adults, who were expected to work in order to produce the goods that the family needed to survive. As children's culture scholar Stephen Kline has argued, Medieval children were more fully integrated into the daily flux of making and consuming, of getting along. They had no autonomy, separate statuses, privileges, special rights or forms of social comportment that were entirely their own.A boy with a hoop. Hoops have long been a popular toy across a variety of cultures. As these ideas began changing during the Enlightenment Era, blowing bubbles from leftover washing up soap became a popular pastime, as shown in the painting The Soap Bubble (1739) by Jean-Baptiste-Siméon Chardin, and other popular toys included hoops, toy wagons, kites, spinning wheels and puppets. Many board games were produced by John Jefferys in the 1750s, including A Journey Through Europe. The game was very similar to modern board games; players moved along a track with the throw of a die (a teetotum was actually used) and landing on different spaces would either help or hinder the player.",
            'slug' => "toys"
        ]);

        ProductTranslation::create([
            'product_id'  => $product->id,
            'locale' => "nl",
            'heading' => "Speelgoed",
            'page_title' => "Een stuk speelgoed of speelgoed is een object dat voornamelijk wordt gebruikt om entertainment te bieden",
            'meta_description' => "Spelen met speelgoed kan een leuke manier zijn om jonge kinderen te trainen in levenservaringen. Verschillende materialen zoals hout, klei, papier en plastic worden gebruikt om speelgoed te maken.",
            'description' => "Speelgoed werd meer wijdverbreid met de veranderende westerse houding ten opzichte van kinderen en de kindertijd als gevolg van de Verlichting. Vroeger werden kinderen vaak gezien als kleine volwassenen, van wie werd verwacht dat ze werkten om de goederen te produceren die het gezin nodig had om te overleven. Zoals kindercultuurwetenschapper Stephen Kline heeft betoogd, waren middeleeuwse kinderen meer volledig geïntegreerd in de dagelijkse stroom van maken en consumeren, van met elkaar opschieten. Ze hadden geen autonomie, aparte statussen, privileges, speciale rechten of vormen van sociaal gedrag die helemaal van hen waren. Een jongen met een hoepel. Hoepels zijn al lang een populair speelgoed in verschillende culturen. Toen deze ideeën begonnen te veranderen tijdens het Verlichtingstijdperk, werd het blazen van bellen van overgebleven afwasmiddel een populair tijdverdrijf, zoals te zien is op het schilderij The Soap Bubble (1739) van Jean-Baptiste-Siméon Chardin, en ander populair speelgoed was onder meer hoepels, speelgoedwagens. , vliegers, draaiende wielen en poppen. In de jaren 1750 werden veel bordspellen geproduceerd door John Jefferys, waaronder A Journey Through Europe. Het spel leek erg op moderne bordspellen; spelers bewogen zich over een baan met de worp van een dobbelsteen (er werd feitelijk een teetotum gebruikt) en het landen op verschillende velden zou de speler helpen of hinderen.",
            'slug' => "speelgoed"
        ]);

        ProductTranslation::create([
            'product_id'  => $product->id,
            'locale' => "fr",
            'heading' => "Jouets",
            'page_title' => "Un jouet ou un jouet est un objet qui est principalement utilisé pour fournir un divertissement",
            'meta_description' => "Jouer avec des jouets peut être une façon agréable d'entraîner les jeunes enfants aux expériences de la vie. Différents matériaux comme le bois, l'argile, le papier et le plastique sont utilisés pour fabriquer des jouets.",
            'description' => "Les jouets se sont répandus avec l'évolution des attitudes occidentales envers les enfants et l'enfance provoquée par les Lumières. Auparavant, les enfants étaient souvent considérés comme de petits adultes, qui devaient travailler pour produire les biens dont la famille avait besoin pour survivre. Comme l'a soutenu Stephen Kline, spécialiste de la culture des enfants, les enfants médiévaux étaient plus pleinement intégrés dans le flux quotidien de fabrication et de consommation, de s'entendre. Ils n'avaient pas d'autonomie, de statuts séparés, de privilèges, de droits spéciaux ou de formes de comportement social qui leur appartenaient entièrement. Un garçon avec un cerceau. Les cerceaux sont depuis longtemps un jouet populaire dans diverses cultures. Au fur et à mesure que ces idées ont commencé à changer à l'époque des Lumières, faire des bulles de restes de savon à vaisselle est devenu un passe-temps populaire, comme le montre le tableau La bulle de savon (1739) de Jean-Baptiste-Siméon Chardin, et d'autres jouets populaires comprenaient des cerceaux, des wagons jouets , cerfs-volants, rouets et marionnettes. De nombreux jeux de société ont été produits par John Jefferys dans les années 1750, dont A Journey Through Europe. Le jeu était très similaire aux jeux de société modernes; les joueurs se déplaçaient le long d'une piste avec le lancer d'un dé (un teetotum était en fait utilisé) et atterrir sur différents espaces aiderait ou gênerait le joueur.",
            'slug' => "jouets"
        ]);

        Schema::enableForeignKeyConstraints();

    }
}
