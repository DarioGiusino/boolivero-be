<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = Restaurant::pluck('id')->toArray();

        $foods = [
            // restaurant #1
            [
                [
                    'label' => 'Tortino di zucca su crema di erborinato',
                    'description' => 'La zucca è uno dei simboli dell’autunno e col suo colore vivace mette subito allegria. Dovete sapere che è un ortaggio ricco di nutrienti, tra i quali i caroteni, sostanze con le quali l’organismo produce la vitamina A, ed è quindi antiossidante e antinfiammatoria. Contiene anche calcio, potassio, sodio, magnesio, fosforo e vitamina E, una buona quota di aminoacidi e fibre. Oltre a favorire le funzionalità intestinali (proverbio: “chi magna suche in abondanza, non avarà dolor de panza”), è un ottimo calmante e favorisce il sonno.',
                    'price' => '8.50',
                    'is_published' => '1',
                    'image' => 'https://www.lerive.it/wp-content/uploads/2016/11/DSC_9500.jpg',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Tartare di salmone marinato su cialda di pane bruschettato e burrata pugliese',
                    'description' => 'Cercate una tartare che sia raffinata ma sfiziosa allo stesso tempo? La tartare di salmone e panzanella unisce queste due caratteristiche! I teneri cubetti di salmone fresco crudo fanno da base per una fresca insalatina a base di pomodori, panzanella croccante e profumatissimo basilico! Questo sarà il modo migliore per iniziare una cena romantica in compagnia della vostra anima gemella o una cena a base di pesce per i vostri amici... magari seguita da un primo piatto di pesce ricco e profumato come gli spaghetti allo scoglio! In pochi minuti riuscirete a preparare un antipasto che delizierà la vostre papille gustative con il profumo dei limoni e la nota croccante del pane casereccio! Ultimate la cena con un buon dessert come la bavarese e conquisterete per sempre il cuore e il palato dei vostri ospiti!',
                    'price' => '14.50',
                    'is_published' => '1',
                    'image' => 'https://www.giallozafferano.it/images/178-17887/Tartare-di-salmone-e-panzanella_780x520_wm.jpg',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Baccalà croccante su crema di ceci agli agrumi',
                    'description' => 'Fin da quando iniziò ad essere importato in Italia a metà del XV secolo, il baccalà ha avuto grande fortuna nella nostra cucina tradizionale e regionale: in primo luogo per la versatilità delle sue carni, che ben si prestano a preparazioni in umido, fritte  e con verdure estive o primaverili ma soprattutto perché è economico e si conserva nel tempo. E’ proprio pensando a queste sue qualità che abbiamo voluto realizzare una ricetta povera e sostanziosa, volta a valorizzare il gusto genuino di questo particolare alimento: baccalà con i ceci! Un secondo di mare dai sapori rustici, che viene cotto immerso in un abbondante sugo a base di pomodoro e legumi che stempera la sapidità del pesce senza però sovrastarla. Il baccalà con i ceci, gustato così com’è oppure accompagnato con fragranti crostoni di pane, è la dimostrazione che con ingredienti poveri si può ottenere una pietanza incredibilmente ricca e appetitosa!',
                    'price' => '12.00',
                    'is_published' => '1',
                    'image' => 'https://www.giallozafferano.it/images/184-18481/Baccala-con-i-ceci_780x520_wm.jpg',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Linguine alle vongole veraci',
                    'description' => 'Direttamente dalla tradizione campana gli spaghetti alle vongole sono decisamente uno dei più importanti piatti della cucina italiana e uno dei più amati tra i primi piatti di pesce. Una ricetta semplicissima dal meraviglioso sapore di mare, che nasconde qualche piccolo segreto per una perfetta riuscita. Vongole polpose, spolverata di prezzemolo e la deliziosa cremina che si crea naturalmente con l\'amido della pasta, fanno degli spaghetti alle vongole una vera prelibatezza. E\' la portata perfetta per ogni occasione, dalla cena tra amici al pranzo della domenica fino al cenone di Natale o di Capodanno!',
                    'price' => '13.50',
                    'is_published' => '1',
                    'image' => 'https://www.giallozafferano.it/images/242-24236/Spaghetti-alle-vongole_450x300_sp.jpg',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Fettuccine con finferli, pane croccante su pesto di prezzemolo',
                    'description' => 'Le cose buone non vengono mai sole: come i finferli, che a piccoli gruppi colorano il sottobosco verde di muschio e ricco di mirtilli selvatici. E quando con il cesto pieno siete sulla via di casa potete pensare alle mille prelibatezze che potete preparare con questo prezioso tesoro dei boschi.',
                    'price' => '15.50',
                    'is_published' => '1',
                    'image' => 'https://a-modo-mio.it/wp-content/uploads/2018/07/pappardelle_finferli_3f.jpg',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Spaghetti alla carbonara con riccio di mare',
                    'description' => 'Per chi cerca una cucina di mare aperta tutto l’anno, a pochi metri dal castello di Otranto, c’è una chicca del gusto dove emozioni, cibo e mente trovano la giusta connessione. Qui il Salento che guarda a Oriente e nelle sue ricette ne accoglie da sempre l’influenza, si apre a orizzonti più vasti. Narra di Giappone, viaggia nell’Afganistan, strizza l’occhio all’Africa.',
                    'price' => '14.50',
                    'is_published' => '1',
                    'image' => 'https://d15j9y5wlusr11.cloudfront.net/filer_public_thumbnails/filer_public/1f/c8/1fc8f20f-0236-4881-8f30-3451cd57fbc7/recipe.jpg__1200x1200_q80_ALIAS-extra_large_crop-smart_subsampling-2.jpg?format=webp',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Trancio di tonno rosso al cointreau, arancia e olive taggiasche',
                    'description' => 'Eccoci arrivati ad un secondo sensazionale per la sua semplicità, per i suoi sapori e per la sua leggerezza unica. Stiamo parlando appunto di un taglio pregiato del TONNO. Pensate che già gli antichi praticavano su larga scala la pesca del tonno, soprattutto in Gibilterra e nell’Ellesponto. In Sicilia era praticata lungo le coste del trapanese. La tecnica di pesca varia a seconda del luogo e della stagione.',
                    'price' => '17.50',
                    'is_published' => '1',
                    'image' => 'https://blog.giallozafferano.it/rickynotti/wp-content/uploads/2015/02/DSC_6185-1-720x480.jpg',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'Straccetto di manzo con rughetta e grana a scaglie',
                    'description' => 'Gli straccetti di vitello con rucola e grana sono uno sfizioso secondo piatto semplice e veloce da preparare, Un piatto ideale per chi vuole preparare una cena in poco tempo, senza rinunciare al gusto. Per un piatto davvero eccezionale ricordate di non cuocere troppo la carne, che potrebbe diversamente risultare dura o secca. 
                    Seguitemi in cucina e preparate con me gli straccetti di vitello con rucola e grana.',
                    'price' => '14.00',
                    'is_published' => '1',
                    'image' => 'https://blog.giallozafferano.it/incucinaconmara/wp-content/uploads/2021/09/Straccetti-di-vitello-con-rucola-e-grana-720x477.jpg',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'Abbacchio scottadito',
                    'description' => 'L’abbacchio a scottadito è una ricetta pasquale tipica del Lazio. Le costolette di agnello, risulteranno tenere e saporite grazie ai suggerimenti sulla cottura che vi diamo oggi. Grazie ai vostri commenti abbiamo scoperto che l\'abbacchio a scottadito, anche conosciuto come abbacchio alla romana o abbacchio al forno, è una vera e propria istituzione nelle cucine non soltanto laziali ma di tutta Italia. Ma sapevate come mai vengono chiamate a "scottadito"? Semplicemente perché vanno gustate caldissime per apprezzarne la morbidezza e, da contro, rischiando di scottarsi le dita. Se avete la possibilità di organizzare il barbecue nel giorno di Pasqua, approfittatene per provare l’abbacchio a scottadito alla brace!',
                    'price' => '15.50',
                    'is_published' => '1',
                    'image' => 'https://www.giallozafferano.it/images/3-326/Abbacchio-A-Scottadito_780x520_wm.jpg',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'Tiramisù del tempio DOC',
                    'description' => 'Il tiramisù è uno dei capisaldi della cucina italiana, uno dei dolci al cucchiaio più amati e realizzati in tutto il mondo. Le origini del tiramisù sono molto incerte e diverse città ne rivendicano la paternità. Ciò di cui siamo certi è che dal 1980 in poi, anno in cui questo termine venne inserito nel vocabolario italiano, il tiramisù ha avuto un successo enorme! Ad oggi è tra le parole italiane più conosciute all\'estero. Ma cosa rende il tiramisù così speciale? Sicuramente amiamo il fatto che sia molto semplice da preparare, la sua crema al mascarpone è irresistibile, così gustosa e vellutata, intervellata da strati di savoiardi inzuppati nel caffè! C\'è chi ama aromatizzare la bagna con il marsala e chi invece preferisce utilizzare altri liquori, ma noi lo amiamo così, in purezza e vi proponiamo la versione più classica, perfetta per ogni occasione!',
                    'price' => '7.00',
                    'is_published' => '1',
                    'image' => 'https://www.giallozafferano.it/images/237-23742/Tiramisu_450x300.jpg',
                    'type' => 'Dessert'
                ],
            ],

            // restaurant #2
            [
                [
                    'label' => 'Bruschetta con Burrata e Pomodori Secchi',
                    'description' => 'I crostini con crema di burrata e pomodori secchi sono una vera delizia da portare in tavola. Sono facilissimi e veloci da preparare, ideali come antipasto o per l’aperitivo. Provateli e non resterete delusi… e anche i vostri ospiti ne saranno entusiasti!',
                    'price' => '6.00',
                    'is_published' => '1',
                    'image' => 'https://blog.giallozafferano.it/rafanoecannella/wp-content/uploads/2018/08/Crostini-con-crema-di-burrata-e-pomodori-secchi.jpg',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Bruschetta con Patanegra e Burrata',
                    'description' => 'Le bruschette con burrata e alici sono uno sfiziosissimo piatto, facilissimo da preparare e molto gustoso.
                    Perfetto come antipasto per un pasto a base di pesce, o anche come secondo piatto per una cena leggera e informale, sono semplici da preparare e dal sapore irresistibile.',
                    'price' => '8.00',
                    'is_published' => '1',
                    'image' => 'https://blog.giallozafferano.it/chezbibia/wp-content/uploads/2021/06/bruschette-con-burrata-e-alici-gp.jpg',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Patanegra',
                    'description' => 'Il Jamón ibérico o prosciutto di razza iberica o prosciutto iberico è un tipo di prosciutto proveniente da un maiale di razza iberica, molto apprezzato nella cucina spagnola e nella cucina portoghese, dove è considerato un prodotto di alta cucina. Per la sua produzione e per potersi fregiare di questo nome, le carni devono provenire da esemplari derivanti da un incrocio in cui partecipi, dal punto di vista genetico, almeno per il 50% la razza iberica',
                    'price' => '25.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1609518317991-10acee259279?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1325&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Rancho Burger',
                    'description' => '300g di danese premium, insalata, pomodoro, bacon, cheddar, salsa dello chef servito con pane fatto in casa e patate fritte',
                    'price' => '12.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1550547660-d9450f859349?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=765&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Burratina Burger',
                    'description' => '300g di cachena portoghese, insalata, cheddar, burratina pugliese, pomodori secchi, bacon, salsa dello chef servito con pane fatto in casa e patate fritte',
                    'price' => '18.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1299&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pulled Pork Burger',
                    'description' => 'Maiale speziato e sfilacciato cotto a bassa temperatura, insalata di cavolo rosso, pomodoro, salsa bbq servito con pane fatto in casa e patate fritte',
                    'price' => '16.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1551782450-a2132b4ba21d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pancake con Nutella e Kinder Cereali',
                    'description' => '',
                    'price' => '7.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1555813456-94a3dd418cd3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1326&q=80',
                    'type' => 'Dessert'
                ],
                [
                    'label' => 'Cheesecake Galak e Pistacchio',
                    'description' => 'La Cheesecake al cioccolato bianco e pistacchio è un dessert goloso e semplice da preparare. Il dolce ideale per gli amanti del pistacchio, perfetto sia per chiudere un pasto sia come merenda pomeridiana. Vediamo cosa ci occorre per la preparazione della Cheesecake al cioccolato bianco e pistacchio',
                    'price' => '7.50',
                    'is_published' => '1',
                    'image' => 'https://blog.giallozafferano.it/lebistro/wp-content/uploads/2019/08/IMG_0065.jpg',
                    'type' => 'Dessert'
                ],
                [
                    'label' => 'Happy Hippo Cake',
                    'description' => 'Quante volte sei andato in cerca per i banchi dei supermercati dei Kinder Happy Hippo? Adesso finalmente puoi assaporare di nuovo il tuo snack più amato grazie a Cibo U.S.A.
                    Per i pochi che non conoscono questo fantastico snack Kinder, si tratta di uno snack commercializzato negli inizi anni 2000 e composto da crema di cioccolato bianco e nocciola all\'interno di un wafer a forma di Ippopotamo. Purtroppo dal 2013 la Kinder ha deciso di non commercializzare più in Italia questo prodotto. Ma noi di Cibo U.S.A. ci siamo organizzati andandolo a prendere direttamente dagli Stati Uniti per potervelo fare gustare ancora una volta. Kinder Happy Hippo alla Nocciola - Scatola salva prezzo da 5 pezzi.',
                    'price' => '7.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Dessert'
                ],
                [
                    'label' => 'Oreo Cake',
                    'description' => 'Siete amanti degli Oreo® e sognate un biscottone gigante per festeggiare il vostro compleanno? Vi spieghiamo come prepararlo con pochi e semplici passaggi! La torta Oreo® è una cheesecake fredda, realizzata senza cottura e senza gelatina... perfetta per tutte le occasioni. I biscotti più famosi d\'America si trasformano in una base croccante, mantenendo inalterato il gusto che li contraddistingue. Un sentore leggermente amaro contrasta la morbida e dolce crema a base di panna e formaggio che saprà conquistarvi ad ogni assaggio. Chiamata anche Oreo® dream pie, questa è veramente una torta dei sogni, con la sua decorazione semplice ma allo stesso tempo scenografica che conquisterà a tutti!',
                    'price' => '7.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1596108005029-8b6b02720dfd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Dessert'
                ],
            ],

            // restaurant #3
            [
                [
                    'label' => 'Panino Arbore',
                    'description' => 'Pane, pomodoro di Torre Canne, olio extravergine d\oliva di peranzana e origano del Gargano',
                    'price' => '4.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1561758033-d89a9ad46330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Zalone',
                    'description' => 'Pane, pomodoro, olio extravergine, origano fresco del Gargano, cruore di burrata, pomodori secchi e basilico',
                    'price' => '6.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1530554764233-e79e16c91d08?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Negramaro',
                    'description' => 'Pane, pomodoro, olio extravergine, origano fresco del Gargano, prosciutto di Parma Gold Reserve stagionato 12 mesi, mozzarella fiordilatte di Gioia del Colle e zucchine sott\'olio',
                    'price' => '7.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1594212699903-ec8a3eca50f5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Al Bano',
                    'description' => 'Pane, pomodoro, olio extravergine, origano fresco del Gargano, mortadella Bonfatti, canestrato pugliese DOP, melanzane sott\'olio e granella di pistacchio',
                    'price' => '7.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1596956470007-2bf6095e7e16?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=729&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Caparezza',
                    'description' => 'Pane, pomodoro, olio extravergine, origano fresco del Gargano, capocollo di Martina Franca, caciocavallo podolico del Gargano e valeriana',
                    'price' => '7.00',
                    'is_published' => '1',
                    'image' => 'https://plus.unsplash.com/premium_photo-1668618295303-ebcdca3ca3e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Modugno',
                    'description' => 'Pane, pomodoro, olio extravergine, origano fresco del Gargano, nodini di Gioia del Colle, salsiccia Dauna a punta di coltello e rucola',
                    'price' => '6.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1550317138-10000687a72b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1520&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Pio e Amedeo',
                    'description' => 'Pane, pomodoro, olio extravergine, origano fresco del Gargano cuore di burrata, cipolla rossa di Acquaviva delle Fonti, capperi e alici',
                    'price' => '6.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1572802419224-296b0aeee0d9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1415&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Scamarcio',
                    'description' => 'Pane, pomodoro, olio extravergine, origano fresco del Gargano lampascioni - cipollaccio col fiocco e peperoncino',
                    'price' => '7.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1561758033-7e924f619b47?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Banfi',
                    'description' => 'Pane, pomodoro, olio extravergine, origano fresco del Gargano, salicornia del Gargano, cuore di burrata e noci',
                    'price' => '7.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1585238341267-1cfec2046a55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=874&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Fantasia Pere',
                    'description' => 'Pane, pomodoro, olio extravergine, origano fresco del Gargano, filetto lardellato, cuore di burrata, pere e noci',
                    'price' => '7.90',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1607013251379-e6eecfffe234?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Primo piatto'
                ],
            ],

            // restaurant #4
            [
                [
                    'label' => 'Er Muratore',
                    'description' => '140g di mortadella di Bologna igp, zucchine grigliate e salsa tartufata',
                    'price' => '7.45',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1668446377138-c763c16e99f0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'La Sempliciotta',
                    'description' => '130g di mortadella Igp',
                    'price' => '6.45',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1630940466901-f89d2b6cd8bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Il Contadino',
                    'description' => '130g di salame spianata romana, crema di funghi porcini fatta in casa e melanzane alla bracce',
                    'price' => '7.45',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1668446374917-fb13aa6e92d4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Panino Porcadella 2.0',
                    'description' => '150g di porchetta di Ariccia igp tagliata al coltello, pomodorini secchi e salsa porcadella fatta in casa',
                    'price' => '7.45',
                    'is_published' => '1',
                    'image' => 'https://plus.unsplash.com/premium_photo-1673581152330-77f2f373ce54?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Il Girasole',
                    'description' => '150g di porchetta di Ariccia IGP tagliata al coltello, melanzane sfilettate e maionese extravergine d\'oliva',
                    'price' => '7.45',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1586190848861-99aa4a171e90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Il Secchione',
                    'description' => '150g di porchetta di Ariccia igp tagliata al coltello, carciofini e crema di funghi porcini fatta in casa',
                    'price' => '7.45',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1565299507177-b0ac66763828?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=722&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Piadina Il Dietetico',
                    'description' => '140g di prosciutto crudo, mozzarella, insalata e pesto di basilico',
                    'price' => '8.45',
                    'is_published' => '1',
                    'image' => 'https://plus.unsplash.com/premium_photo-1675382377369-c8f4cd69cfee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'Piadina L’Atleta',
                    'description' => '130g di bresaola, stracciata pugliese e pesto di basilico',
                    'price' => '8.45',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1611599539392-0198d33c4c1e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'Piadina L’Animalista',
                    'description' => 'Mozzarella, zucchine grigliate e melanzane alla brace',
                    'price' => '7.95',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1574448857443-dc1d7e9c4dad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1467&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'Panino Il Sempliciotto',
                    'description' => '150g di porchetta di Ariccia IGP tagliata al coltello',
                    'price' => '9.45',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1611599538311-360e527c1d22?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Secondo piatto'
                ],
            ],

            // restaurant #5
            [
                [
                    'label' => 'Pizburger Original',
                    'description' => 'Burger manzo danese 200g, pancetta, cheddar, insalata e pomodorino secco',
                    'price' => '11.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1552539618-7eec9b4d1796?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=802&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pizburger Carbonara',
                    'description' => 'Burger manzo danese 200g, pancetta croccante, uovo bismark e pecorino',
                    'price' => '14.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1594078187603-215082d5fe23?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pizburger Campagnolo',
                    'description' => 'Burger manzo danese 200g, lardo di colonnata, provola e cipolla caramellata',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1571955320535-b8245f765e0c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pizburger Italiano',
                    'description' => 'Burger manzo danese 200g, parmigiana di melanzane e pesto di basilico',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1619015483078-6abcf9238311?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pizburger Forestale',
                    'description' => 'Burger manzo danese 200g, funghi in piastra, pancetta croccante, cialda di grana padano e maionese al tartufo',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1551360021-0ff7982d13dc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=910&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pizburger Stagionato',
                    'description' => 'Burger manzo danese 200g, verdura ripassate, pancetta croccante, provola e salsa barbecue poco piccante',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1511689660979-10d2b1aada49?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pizburger Doppiopetto',
                    'description' => 'Petto di pollo alla piastra, verdure grigliate, provola, pomodoro e salsa barbecue',
                    'price' => '9.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1619684269649-eaad26766c4e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1476&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'PizBurger PulledPork',
                    'description' => 'Pulled pork, coleslaw e salsa barbecue',
                    'price' => '11.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1619734490039-a68d5c82cf30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'PizBurger Pastrami',
                    'description' => 'Pastrami, cipolla caramellata, melanzane fritte e battuto di prezzemolo',
                    'price' => '9.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1602083566722-8f58f1002fdd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Baronessa',
                    'description' => 'Passata di pomodoro, \'nduja, pancetta, provola e melanzane fritte',
                    'price' => '9.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1594078186512-15efdd233201?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
            ],

            // restaurant #6
            [
                [
                    'label' => 'Bruschetta con Lardo di Colonnata affinato alla frutta secca e passita',
                    'description' => 'Bruschetta with "Lardo di Colonnata" refined with dried frui',
                    'price' => '6.50',
                    'is_published' => '1',
                    'image' => 'https://plus.unsplash.com/premium_photo-1668095398193-58a63a440464?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Bruschetta con Capocollo di Norcia al rosmarino, burrata e granella di pistacchi',
                    'description' => 'Bruschetta with Capocollo of Norcia, Burrata cheese, chopped pistachios',
                    'price' => '7.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1506280754576-f6fa8a873550?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Bruschetta con Bufala DOP, pomodori ciliegini e salsa al basilico',
                    'description' => 'Bruschetta with Buffalo mozzarella DOP, cherry tomatoes , basil cream',
                    'price' => '7.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1572695157366-5e585ab2b69f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Bruschetta con melanzane BIO, cipolla caramellata di Tropea e pomodori secchi',
                    'description' => 'Bruschetta with BIO eggplants, caramelized onions, drie tomatoes',
                    'price' => '7.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1505575967455-40e256f73376?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Pinsa CHIACCHIERONA',
                    'description' => 'Pinsa con Crudo Riserva 24 mesi, burrata di Andria, Rocket salad',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://plus.unsplash.com/premium_photo-1672498294724-dde3b2e41e19?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pinsa EROICA',
                    'description' => 'Mortadella di suino nero, burratina di Andria, granella di pistacchi',
                    'price' => '12.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pinsa GENUINA',
                    'description' => 'Pinsa con mozzarella di Bufala campana DOP, pomodori ciliegini, crema di zucchine',
                    'price' => '12.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1593504049359-74330189a345?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pinsa VEGANA',
                    'description' => 'Pinsa con cipolle rosse di Tropea caramellate, datterini gialli e melanzane Bio',
                    'price' => '12.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1594007654729-407eedc4be65?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=728&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pinsa SOLITARIA',
                    'description' => 'Pinsa con Lardo di Colonnata affinato a frutta secca e passita',
                    'price' => '11.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1571066811602-716837d681de?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=536&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Cheesecake Frutti di Bosco o Nutella',
                    'description' => 'Cheesecake wild berries or Nutella',
                    'price' => '6.50',
                    'is_published' => '1',
                    'image' => 'https://plus.unsplash.com/premium_photo-1667546202654-e7574a20872c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1473&q=80',
                    'type' => 'Dessert'
                ],
            ],

            // restaurant #7
            [
                [
                    'label' => '01. Amatriciana normal',
                    'description' => 'Pomodoro, guanciale, amatrice D.O.P., pecorino romano D.O.P., pepe',
                    'price' => '12.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1544982503-9f984c14501a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => '02. Capricciosa normal',
                    'description' => 'Pomodoro, mozzarella, funghi champignon, olive, carciofi, brace, uovo sodo, prosciutto crudo',
                    'price' => '12.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1601924582970-9238bcb495d9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => '03. Napoli normal',
                    'description' => 'Pomodoro, mozzarella, alici',
                    'price' => '11.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1325&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => '04. Funghi normal',
                    'description' => 'Pomodoro, mozzarella, funghi champignon, prezzemolo, olio evo',
                    'price' => '11.00',
                    'is_published' => '1',
                    'image' => 'https://plus.unsplash.com/premium_photo-1675451537385-e76cd7e78087?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => '05. Peperoni e Salsiccia normal',
                    'description' => 'Pomodoro, mozzarella, peperoni, salsiccia, prezzemolo',
                    'price' => '11.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1595854341625-f33ee10dbf94?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => '06. Hot Chili Pepper normal',
                    'description' => 'Pomodoro, mozzarella, trito di peperoncino, habanero, rondecce di acapeno',
                    'price' => '11.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1579751626657-72bc17010498?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => '07. Diavola normal',
                    'description' => 'Pomodoro, mozzarella, salame, ventriciana',
                    'price' => '11.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1628840042765-356cda07504e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => '08. Calabrese normal',
                    'description' => 'Pomodorino, \'nduja, mozzarella, melanzane fritte, prezzemolo',
                    'price' => '11.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1593246049226-ded77bf90326?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => '09. Parmigiana normal',
                    'description' => 'Pomodoro, mozzarella, melanzane fritte, grana, basilico',
                    'price' => '11.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1581873372796-635b67ca2008?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => '10. Mexico normal',
                    'description' => 'Pomodoro, fagioli, cipolla, bacon, trito di habanero, jalapeno, olio evo',
                    'price' => '11.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1572552635104-daf938e0aa1f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Primo piatto'
                ],
            ],

            // restaurant #8
            [
                [
                    'label' => 'Prosciutto e Melone',
                    'description' => '',
                    'price' => '8.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1598989519542-077da0f51c09?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=685&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Prosciutto di Bassiano e Mozzarella di Bufala',
                    'description' => '',
                    'price' => '10.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1547417079-ef452973a188?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Tagliere per Uno',
                    'description' => 'Tagliere di salumi e formaggi con sottaceti',
                    'price' => '9.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1604597156795-59e680daa6dc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Tagliere per Due',
                    'description' => 'Prosciutto crudo tagliato al coltello.',
                    'price' => '16.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1629567971562-a5242697c783?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Antipasto'
                ],
                [
                    'label' => 'Polpo, Sedano, Patate e Cipolle',
                    'description' => '',
                    'price' => '14.00',
                    'is_published' => '1',
                    'image' => 'https://plus.unsplash.com/premium_photo-1669261880961-ea68f9a2b7f2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'Ribs di Maiale alla Salsa Barbecue',
                    'description' => '',
                    'price' => '14.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1529694157872-4e0c0f3b238b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'Macedonia fragole e mandorle',
                    'description' => '',
                    'price' => '4.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1495147466023-ac5c588e2e94?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Dessert'
                ],
                [
                    'label' => 'Macedonia arancia e fior di loto',
                    'description' => '',
                    'price' => '4.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1530077561647-4c376cd0ee7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Dessert'
                ],
                [
                    'label' => 'Macedonia limone e uvetta',
                    'description' => '',
                    'price' => '4.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1587306433556-18d035a3ed97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Dessert'
                ],
                [
                    'label' => 'Macedonia mele e pere',
                    'description' => '',
                    'price' => '4.50',
                    'is_published' => '1',
                    'image' => 'https://plus.unsplash.com/premium_photo-1668677225829-214d58c7b73f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80',
                    'type' => 'Dessert'
                ],
            ],

            // restaurant #9
            [
                [
                    'label' => 'Panino Polpo al Cuore',
                    'description' => 'Polpo croccante, guacamole, nduja di maialino nero, iceberg e miele al bergamotto di Reggio Calabria',
                    'price' => '13.50',
                    'is_published' => '1',
                    'image' => 'https://plus.unsplash.com/premium_photo-1664478250378-4afecb3f977c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Stupisci Spada',
                    'description' => 'Pesce spada alla griglia, lattughine e salmoriglio',
                    'price' => '12.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1510523717636-709ac1c0ae5d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Calammare',
                    'description' => 'Calamari croccanti, salsa di pomodoro pachino bruciati, melanzane al cartoccio e zizzona di Battipaglia',
                    'price' => '12.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1672078857105-a1229a7033b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Ritonnerai',
                    'description' => 'Salsiccia di tonno alla siciliana con finocchietto selvatico, caciocavallo silano, scarola e patate alla brace',
                    'price' => '11.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1638740531453-9b02a1eeb0c0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=685&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Variante Inglese del Ritonnerai',
                    'description' => 'Roastbeef di tonno, burratina, senape, pomodorino fresco e crema di basilico',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1610971573855-1cdb44d53d34?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Terrone',
                    'description' => 'Bistecca di pesce spada e pesto alla trapanese (pesto a base di pomodori secchi, olio, basilico e mandorle)',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1581339742930-ce01dd18da5a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Innamorata 2.0',
                    'description' => 'Cotoletta di orata panata nel panko e salsa della nonna a base di melanzana e pomodorino pachino',
                    'price' => '12.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1622329041511-619c48e92286?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Panino Polpo di fulmine',
                    'description' => 'Polpo croccante, pure di fave, cicoria ripassata e fonduta di pecorino',
                    'price' => '14.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1540981493580-8ea1113e9968?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Pinsa Tonnara',
                    'description' => 'Pinsa bianca con mozzarella fiordilatte, salsiccia di tonno e patate alla brace',
                    'price' => '12.50',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1460306855393-0410f61241c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1473&q=80',
                    'type' => 'Primo piatto'
                ],
                [
                    'label' => 'Gamberi, Zucchine e Stracciatella',
                    'description' => 'Pinsa bianca con mozzarella fiordilatte, stracciatella, zucchine e gamberi argentini',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1581339742938-f197c2b238d1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Primo piatto'
                ],
            ],

            // restaurant #10
            [
                [
                    'label' => 'RAMÈ',
                    'description' => 'Gambero Rosso di Mazara del Vallo*, Salmone, Mela Scottata
                    con Zucchero di Canna Integrale Bio, Olio Evo Quattrociocchi
                    e Guanciale Norcineria Bomarsi Fiammato',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1579584425555-c3ce17fd4351?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'AUTUNNO',
                    'description' => 'Salmone, Avocado, Guacamole, Riduzione di Soia,
                    Sesamo Biologico, Cipolla Croccante e Anacardi Tostati',
                    'price' => '12.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1615361200141-f45040f367be?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'MEDITERRANEO',
                    'description' => 'Filetto di Tonno Rosso Pinna Blu del Mediterraneo*,
                    Iceberg, Finocchio, Pepe, Sesamo Biologico,
                    Confettura di Peperoncino e Fiocchi di Sale Affumicato',
                    'price' => '14.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1579871494447-9811cf80d66c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'ASSOLUTO DI MARE',
                    'description' => 'Spigola, Ventresca di Tonno Rosso
                    Pinna Blu del Mediterraneo*, Salmone, Sesamo Biologico,
                    Battuta di Gambero Rosso Mazara del Vallo* e Salsa Ramè',
                    'price' => '15.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1615361200098-9e630ec29b4e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'SESSANTOTTO',
                    'description' => 'Gambero Rosso Mazara del Vallo* Marinato e Cotto
                    a Bassa Temperatura con Limone e Zenzero, Carote Marinate,
                    Formaggio Caprino, Riduzione di Soia, Gocce di Miele di Arachidi
                    e Chips di Rapa Rossa',
                    'price' => '14.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1611143669185-af224c5e3252?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'POMMÒ',
                    'description' => 'Pomodori Secchi, Avocado, Rucola, Riduzione di Soia,
                    Salsa al Basilico, Sesamo Biologico e Barbabietola Essiccata',
                    'price' => '10.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1580822184713-fc5400e7fe10?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'TREPPERCENTO',
                    'description' => 'Spigola, Salmone, Alici del Cantabrico, Formaggio Caprino,
                    Riduzione di Soia e Crumble di Amaretto al Limone',
                    'price' => '14.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1553621042-f6e147245754?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1325&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'ORIENTE',
                    'description' => 'Salmone, Avocado, Top di Salmone Scottato a Fiamma,
                    Maionese Orientale, Sesamo Biologico,
                    Riduzione di Soia e Cipolla Croccante',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1582450871972-ab5ca641643d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'BASILICO',
                    'description' => 'Riso Sushi al Pesto con Salmone, Olio Evo Quattrociocchi,
                    Sesamo Biologico, Salsa al Basilico, Caprino e Pinoli',
                    'price' => '13.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1607301405418-780ee5e6dd10?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1583&q=80',
                    'type' => 'Secondo piatto'
                ],
                [
                    'label' => 'PEPERITO',
                    'description' => 'Riso Sushi con Filetto di Tonno Rosso
                    Pinna Blu del Mediterraneo*, Olio Evo Quattrociocchi al Peperoncino,
                    Guacamole, Cipolla di Tropea e Noci',
                    'price' => '14.00',
                    'is_published' => '1',
                    'image' => 'https://images.unsplash.com/photo-1584583570840-0a3d88497593?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80',
                    'type' => 'Secondo piatto'
                ],
            ],
        ];

        // seed the db with the foods array
        foreach ($foods as $key => $menu) {

            foreach ($menu as $food) {
                $new_food = new Food();

                $new_food->restaurant_id = $restaurants[$key];
                $new_food->label = $food['label'];
                $new_food->description = $food['description'];
                $new_food->price = $food['price'];
                $new_food->is_published = $food['is_published'];
                $new_food->image = $food['image'];
                $new_food->type = $food['type'];
                $new_food->slug = Str::slug($food['label'], '-');

                $new_food->save();
            }
        }
    }
}
