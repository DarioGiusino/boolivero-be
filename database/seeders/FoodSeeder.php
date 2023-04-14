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
            [
                'label' => 'Hamburger vegetale',
                'description' => 'Un hamburger vegetariano o veggie burger è un impasto simile all\'hamburger, ma che non contiene carne. L\'impasto di un veggie burger può contenere proteine vegetali isolate, legumi, cereali, verdure, glutine di frumento, addensanti. Spesso gli hamburger vegetariani commercializzati vengono addizionati di vitamina B12.',
                'price' => '6.99',
                'is_published' => '1',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Primo piatto'
            ],
            [
                'label' => 'Pasta al pesto',
                'description' => 'Il pesto alla genovese è un condimento tradizionale tipico originario della Liguria. Con tale denominazione è inserito tra i Prodotti agroalimentari tradizionali liguri. Il suo ingrediente base è il basilico, e più specificamente il Basilico Genovese.',
                'price' => '12.56',
                'is_published' => '0',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Primo piatto'
            ],
            [
                'label' => 'Riso nero con salmone e rucola',
                'description' => 'Il riso nero integrale con salmone, pomodorini e rucola è un primo piatto estivo. Fresco, gustoso e saporito è perfetto per le giornate calde. Lo possiamo preparare in anticipo ed usarlo come schiscetta al lavoro, oppure lo possiamo portare al mare o in montagna. Ma non solo, è ideale da servire anche a buffet o durante gli aperitivi.',
                'price' => '78.32',
                'is_published' => '1',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Primo piatto'
            ],
            [
                'label' => 'Frittata con prosciutto',
                'description' => 'La frittata è uno di quei piatti che piace proprio a tutti e si può preparare davvero in tanti modi.Al forno o in padella,con verdure o con salumi. A casa mia piace molto la frittata con prosciutto e formaggio,l’avete mai provata?',
                'price' => '15.87',
                'is_published' => '1',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Secondo piatto'
            ],
            [
                'label' => 'Pizza patate e salsiccia',
                'description' => 'Pizza con patate e salsiccia buona e saporita,la pizza non stanca mai in igni modo la si fà è sempre ottima,ma così è sublime',
                'price' => '99.97',
                'is_published' => '0',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Primo piatto'
            ],
            [
                'label' => 'Bruschetta con crema di olive',
                'description' => 'Le bruschette con patè di olive sono un delizioso antipasto che potrete servire prima dei vostri pranzi e cene con amici o parenti, ma sono anche dei perfetti finger food per un aperitivo estivo. Semplici e veloci da preparare, potrete realizzarle anche quando avete poco tempo ma volete comunque preparare un piatto sfizioso. Le olive nere sono l\'ingrediente principale della ricetta, ma per renderla davvero perfetta e gustosa sono importanti gli abbinamenti: in questo caso vi proponiamo di arricchire le bruschette con delle rondelle di porro e del Salame Il Gentile Levoni, sapientemente speziato e stagionato per un\'esperienza inconfondibile al palato. Unitelo alle bruschette infilzandolo con uno stuzzicadenti e impiattate su un vassoio di ardesia o su un tagliere di legno, così da rendere la portata ancor più invitante.',
                'price' => '18.99',
                'is_published' => '1',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Antipasto'
            ],
            [
                'label' => 'Grigliate di verdure',
                'description' => 'Le verdure grigliate sono un contorno salutare, colorato e molto saporito, in quanto la semplice grigliatura ne preserva il gusto e ne esalta tutto il sapore e la bontà. Le verdure vengono mondate, tagliate a rondelle e poi cotte su di una piastra rigata: una volta pronte, potete gustarle al naturale oppure condirle con dell’olio e prezzemolo, a seconda dei gusti. Le verdure grigliate sono un ottimo contorno per accompagnare piatti di pesce e di carne, una pietanza gustosa ideale anche per un pic-nic o per una gita fuori porta. Ma soprattutto è una versione diversa dalle solite verdure in padella.',
                'price' => '25.46',
                'is_published' => '0',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Antipasto'
            ],
            [
                'label' => 'Antipasto all\'italiana',
                'description' => 'e feste si avvicinano e con queste la preoccupazione di come organizzare i menu, di come regolarsi con i tempi di preparazioni lunghe, come paste al forno e arrosti e completare con antipasti vari e contorni; poi ci sono le difficoltà di chi lavora fino all’ultimo e se riescono ad organizzarsi con la preparazione di piatti il giorno prima hanno bisogno di un’idea veloce per l’antipasto. Ecco che l’idea più facile, più veloce, più conosciuta è quella di preparare l’antipasto all’italiana, il classico antipasto coi salumi. C’è poco da dire, ma forse un’idea su come presentarlo può essere utile, associare dei formaggi o almeno delle mozzarelline e poi verdure sott’aceto e sott’olio, grissini oppure crostini o tarallini come accompagnamento. Naturalmente le variazioni sono un milione, dal momento che per un antipasto più ricercato si possono scegliere salumi particolari come la mortadella di pollo oppure il salame di cinghiale o di asino, bresaola o carni salate. Si possono aggiungere tocchetti di formaggi semistagionati e scaglie di formaggi Grana.',
                'price' => '75.23',
                'is_published' => '1',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Antipasto'
            ],
            [
                'label' => 'Pennette al pesto alla Genovese',
                'description' => 'La pasta al pesto è un grande classico della cucina ligure, un primo piatto saporito e profumato ed anche molto veloce da preparare! La ricetta originale ligure prevede che alla pasta, oltre al classico Pesto genovese,  si aggiungano anche patate e fagiolini (Pasta al pesto accomodato). Non vi è trattoria o ristorante, in Liguria, che non vi proponga delle Trofie, Linguine, Bavette o Spaghetti al pesto! Naturalmente, il segreto sta tutto nella qualità del Pesto che, comprato o fatto in casa, deve rispettare la normativa del Consorzio (altrimenti non è pesto genovese!).',
                'price' => '35.57',
                'is_published' => '0',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Primo piatto'
            ],
            [
                'label' => 'Lasagne',
                'description' => 'Le lasagne al forno sono costituite da una sfoglia di pasta all\'uovo tagliata in fogli grossolanamente rettangolari detti lasagne, le quali, una volta bollite e scolate, vengono disposte in una sequenza di strati, separati da una farcitura che varia in relazione alle diverse tradizioni locali.',
                'price' => '68.13',
                'is_published' => '1',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Primo piatto'
            ],
            [
                'label' => 'Bistecca con patate al forno',
                'description' => 'La bistecca con patate? ma scherziamo? che altro c’è da dire?
                Tanto se ad esempio la facciamo al forno. Quindi: Bistecca al Forno con Patate.
                La Bistecca con contorno di Patate resta sempre uno dei secondi piatti più pratici, rapidi e graditi, lo elaboriamo un po’ senza fargli perdere per niente l’aspetto, pertanto fin dal primo assaggio si rimarrà inaspettatamente e piacevolmente impressionati. ',
                'price' => '56.98',
                'is_published' => '0',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Secondo piatto'
            ],
            [
                'label' => 'Scaloppine classiche',
                'description' => 'Per fortuna che esistono le scaloppine! Delicatissime fettine di vitello che rendono speciale ogni cena, anche la più veloce o frugale, purché ogni volta si scelga il condimento adatto che possa stuzzicare il palato. Stavolta ci rivolgiamo a chi adora l\'essenza fresca e acre del limone, che addensandosi diventerà una salsa cremosa e prelibata! Le scaloppine al limone, così come il pollo al limone, vi conquisteranno subito con il loro sapore delicato e il profumo agrumato. Il nostro consiglio? Siate generosi con le dosi, perché le scaloppine al limone sono davvero irresistibili!',
                'price' => '23.76',
                'is_published' => '1',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Secondo piatto'
            ],
            [
                'label' => 'Tiramisù',
                'description' => 'Il tiramisù è un dolce e prodotto agroalimentare tradizionale diffuso in tutto il territorio italiano, le cui origini sono dibattute e attribuite soprattutto al Veneto e al Friuli-Venezia Giulia. È un dessert al cucchiaio a base di savoiardi (oppure altri biscotti di consistenza friabile) inzuppati nel caffè e ricoperti di una crema, composta di mascarpone, uova e zucchero, che in alcune varianti è aromatizzata con il liquore.',
                'price' => '43.76',
                'is_published' => '0',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Dessert'
            ],
            [
                'label' => 'Panna cotta',
                'description' => 'La Panna Cotta è un dolce italiano inventato intorno al 1800-1900, di cui le origini sono poco chiare: si dice infatti sia stato creato all’inizio del ‘900 nelle Langhe piemontesi da una signora di origini ungheresi, ma si hanno testimonianze scritte della metà dell’Ottocento provenienti direttamente da Giacomo Leopardi, che ne descrisse gli ingredienti al padre durante un suo soggiorno a Bologna.',
                'price' => '88.22',
                'is_published' => '1',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Dessert'
            ],
            [
                'label' => 'Amatriciana con mezze maniche',
                'description' => 'Le Mezze maniche all’amatriciana, è una di quelle ricette che tendo a modificare, perché  trovo sia speciale l’abbinamento di sapore, tra guanciale e cipolla: ne sono davvero golosa. Inoltre durante il periodo estivo, al posto del pomodoro in bottiglia, uso i pomodorini freschi. Dulcis in fundo, un pò di guanciale croccante, a decorare il piatto, è d’obbligo. Sono stata criticata davvero tante volte, per voler aggiungere inesorabilmente la cipolla all’interno di questo piatto romano che non la prevede affatto. Però tutti gli avventori che lo hanno fatto, alla fine si sono leccati anche i baffi, quindi malgrado le critiche ricevute e quelle che riceverò, continuerò a fare le mezze maniche all’amatriciana, sempre con una bella cipollina.',
                'price' => '12.55',
                'is_published' => '0',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Primo piatto'
            ],
            [
                'label' => 'Omelette con prosciutto e verdure grigliate',
                'description' => 'L\'omelette rappresenta il piatto ideale da preparare al momento, in occasione di un pranzo o una cena improvvisa o quando le idee per un secondo "quotidiano" scarseggiano. L\'omelette con zucchine è semplicissima da preparare, può risultare un ottimo svuota frigorifero ed essere ancora più gustosa se realizzata con zucchine grigliate, prosciutto cotto Fetta Golosa Galbacotto e Formaggio Fresco Spalmabile Santa Lucia. L\'omelette con zucchine necessita di una doppia cottura, una per la frittata in sé, da fare in padella, e una per amalgamare al meglio gli ingredienti da fare al microonde in maniera rapida. Siete pronti a gustare questa deliziosa bontà? Scopriamo come fare l\'omelette alla perfezione!',
                'price' => '45.78',
                'is_published' => '1',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Secondo piatto'
            ],
            [
                'label' => 'Pesce al cartoccio',
                'description' => 'Le qualità migliori della cottura al cartoccio si sposano appieno con le qualità organolettiche del pesce. Insomma, un metodo di cottura perfetto per quello che è un ingrediente magico per gusto e proprietà.',
                'price' => '78.45',
                'is_published' => '0',
                'image' => 'https://picsum.photos/536/354',
                'type' => 'Secondo piatto'
            ],
        ];

        foreach ($foods as $food) {
            $new_food = new Food();
            $new_food->restaurant_id = Arr::random($restaurants);
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
