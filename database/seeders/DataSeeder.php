<?php

namespace Database\Seeders;

use App\Models\Data;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    // public $faker2 = Faker\Factory::create();
    public $Abia = [
        "Aba North", "Aba South", "Isiala-Ngwa North", "Isiala-Ngwa South", "Ukwa West", "Ukwa East", "Obingwa", "Ikwuano", "Bende", "Arochukwu", "Ohafia", "Isiukwuato", "Umuahia", "Ugwunagbo", "Osisioma", "Umuahia South", "Umu-Nneochi"
    ];
    public $Adamawa = ["Fufore", "Ganye", "Gombi", "Guyuk", "Jada", "Hong", "Demsa", "Shelleng", "Maiha", "Madagali", "Michika", "Mubi", "Mayo-Belwa", "Song", "Numan", "Jimeta", "Augusto-Belwa", "Mubi-South", "Yola", "Toungo", "Girei", "Lamurde"];
    public $Anambra = ["Anaocha", "Njikoka", "Nnewi North", "Nnewi South", "Onitsha North", "Onitsha South", "Anambra", "Oyi", "Ihiala", "Akwa North", "Akwa South", "Aguata", "Orumba North", "Orumba South", "Ogbaru", "Idemili", "Idemili South", "Ayamelum", "Ekwusigo", "Anambra West", "Dunukofia"];
    public $AkwaIbom = ["Eket", "Atai Essien Udim", "Etinan", "Etim Ekpo", "Iko Abasi", "Ini", "Ikono", "Itu", "Mbo", "Mkpat Enin", "Nsit Ibom", "Nsit Ubium", "Okobo", "Onna", "Oron", "Oruk Anam", "Ukanafun", "Ikot Ekpene", "Uquo Ibeno", "Abak", "Uruan", "Ibeno", "Urue Offong/Oruko", "Ekpe", "Uyo", "Obot Akara", "Ibesikpo Asutan", "Ibiono Ibom", "Eastern Obolo", "Udung Uko", "Ika"];
    public $Bauchi = ["Bauchi Bogoro", "Giade", "Darazo", "Dass", "Ningi", "Shira", "Gamawa", "Itas Gadau", "arji", "Katagum", "Missau", "Hira", "Toro", "TafawaBalewa", "Jama’are", "Zaki", "Alkaleri", "Dambam", "Kirfi", "Ganjuwa"];
    public $Bayelsa = ["Brass", "Ekeremor", "Ogbia", "Sagbama", "Southern Ijaw", "Kolokuma/Opokuma", "Nembe", "Yenagoa"];
    public $Benue = ["Buruku", "Ador", "Gboko", "Agatu", "Apa", "Gwer East", "Gwer West", "Guma", "Konshisha", "Kwande", "Kastina-Ala", "Makurdii", "Logo", "Ogbadibo", "Obi", "Oju", "Ohimini", "Oturkpo", "Okpokwu", "Ukum", "Tarka", "Vandekya", "Asira/Uba", "Monguno", "Marte", "Ngala", "Dikwa", "Mafa", "Biu", "Maiduguri", "Kwanga-Kusar", "Guzamala", "Kale/ Balge", "Mobbar", "Hawul"];
    public $Borno = ["Abadam", " Chibok", " Bayo", " Gubio", " Jere", "Nganzai", " Gwoza", " Shani", " Bama", " Konduga", "Damboa", "Kaga", " Magumeri", " Kukawa"];
    public $CrossRiver = ["Obubra", "Akpabuyo", "Yala", "Abi", "Odukpani", "Akamkpa", "Biase", "Ikom", "Yarkur", "Boki", "Ogoja", "Obanliku", "Bakassi", "Obudu", "Calabar South", "Etung", "Bekwara", "Calabar Municipal"];
    public $Delta = ["Oshimili", "Aniocha", "Aniocha South", "Ika South", "Ika North-East", "Ndokwa West", "Ndokwa East", "Isoko South", "Isoko North", "Bomadi", "Burutu", "Ughelli South", "Ughelli North", "Ethiope West", "Ethiope East", "Sapele", "Okpe", "Warri North", "Warri South", "Uvwie", "Udu", "Warri Central", "Ukwani", "Oshimili North", "Patani"];
    public $Ebonyi = ["Oniocha", "Afikpo South", "Ohaozara", "Afikpo North", "Izzi", "Abakaliki", "Ishielu", "Ohaukwu", "Ikwo", "Ezza South", "Ebonyi", "Ivo", "Ezza"];
    public $Enugu = ["Enugu South", " Aninri", " Udenu", " Nssuka", " Igbo-Eze South", " Enugu North", " Agwu", " Nkanu West", " Udi", " Oji-River", " Igbo-Ekiti", "Ezeagu", " Igbo-Eze North", " Isi-Uzo", " Uzo-Uwani", " Enugu East", " Nkanu East"];
    public $Edo = ["Esan North-East", " Orhionwon", " Esan Central", " Esan West", " Egor", " Ikpoba-Okha", " Owan East", " Owan West", " Etsako Central", " Etsako West", " Igueben", " Oredo", " Ovia South-West", " Ovia South-East", " Uhunmwonde", " Etsako East", "Etsako South-East", " Akoko Edo"];
    public $Ekiti = ["Ado", " Ekiti-East", " Ikere", " Ekiti-West", " Emure", " Irepodun", " Ekiti South-West", " Ijero", " Ido/Osi", " Oye", " Ikole", " Moba", " Aiyedire", " Efon", " Ise/Orun", " Ilejemeje"];
    public $FCT = ["Gwagalada", " Kuje", " Abaji", " Abuja Municipal", " Bwari", " Kwali"];
    public $Gombe = ["Balanga", " Funakaye", " Shomgom", " Kaltungo", " Billiri", " Kwami", " Gombe", " Nafada/Bajoga", " Akko", " Yamaltu/Deba", " Dukku"];
    public $Imo = ["Ahiazu-Mbaise", " Ezinihite", " Ideato South", " Ihitte/Uboma", " Mbaitoli", " Obowo", " Nkwerre", " Orsu", " Orlu", " Oguta", " Ngor Okpala", " Ohaji Egbema", " Okigwe", " Isiala-Mbano", " Owerri Municipal", " Oru", " Owerri West", " Owerri North", " Oru West", " Isu", " Onuimo", " Nwangele", " Njaba", " Ehime-Mbano", " Ideato North", " Aboh-Mbaise", " Ikeduru"];
    public $Jigawa = ["Dutse", " Birni-Kudu", " Gwaram", " Hadejia", " Kiyawa", " Biriniwa", " Malam Madori", " Jahun", " Kafin Hausa", " Kazaure", " Roni", " Ringim", " Garki", " Babura", " Kaugama", " Sule-Tankarkar", " Taura", " Gwiwa", " Gumel", " Maigatari", " Kiwi Kasama", " Guri", " Gagarawa", " Auyo", " Yankwashi", " Buji", " Miga"];
    public $Kaduna = ["Kaduna North", " Kajuru", " Kaduna South", " Kachia", " Jaba", " Zangon-Kataf", " Kaura", " Jema’a", " Lerea", " Ikara", " Makarfi", " Sabon-Gari", " Zaria", " Giwa", " Birnin-Gwari", " Igbabi", " Soba", " Chikun", " Kudan", " Kubau", " Sanga", " Kagarko", " Kauru"];
    public $Kano = ["Rimin Gado", " Doguwa", " Tudun Wada", " Sumaila", " Wudil", " Takali", " Albasu", " Bebeji", " Rano", " Bunkure", " Karaye", " Kiru", " Kabo", " Kura", "Madobi", " Gwarzo", " Shanono", " Dawakin", " Makoda", " Kudu", " Tsanyawa", " Bichi", " Dawakin Tofa", " Dambatta", " Minjibir", " Ungogo", " Gezawa", " Gebasawa", " Bagwai", " Gaya Tofa", " Warawa", " Fagge", " Kano Municipal", " Nassarawa", " Gwale", " Tarauni", " Ajingi", " Garko", " Dala", " Garum Mallam", " Kumbotso", " Makoda", " Rogo", " Kunchi", " Kibiya"];
    public $Katsina = ["Katsina", " Zango", " Daura", " Mai-Adua", " Mashi", " Kaita", " Ingawa", " Kankiya", " Dustin-Ma", " Matazu", " Safana", " Musawa", " Kankara", " Malumfashi", " Kafur", " Danja", " Funtua", " Bakori", " Faskari", " Sandamu", " Dandume", " Kusada", " Baure", " Dan-Musa", " Dutse", " Charanchi", " Sabuwa", " Batsari", " Jibiya", " Kurafi", " Rimi", " Batagarawa", " Mani", " Bindawa"];
    public $Kebbi = ["Birnin-Kebbi", " Ngaski", " Yauri", " Sakaba", " Wasugu", " Danko", " Zuru", " Koko-Besse", " Bagudo", " Arewa Dandi", " Suru", " Maiyama", " Jega", " Bunza", " Gwandu", " Argungu", " Augie", " Fakai", " Aliero", " Kalgo", " Shanga"];
    public $Kogi = ["Adavi", " Olamabolo", " Ajaokuta", " Ijumu", " Bassa", " Dekina", " Idaho", " Ankpa", " Yagba East", " Kogi", " Ofu", " Okehi", " Okene", " Yagba West", " Omala", " Igalamela-Odolu", " Ibaji", " Lokoja", " Ogori/Magongo", " Mopa-Muro", " Kabba/Bunu"];
    public $Kwara = ["Asa", " Ifelodun", " Baruten", " Edu", " Ekiti", " Ilorin-East", " Ilorin West", " Kaiama", " Moro", " Offa", " Oyun", " Pategi", " Osin", " Oke-Ero", " Irepodun", " IlorinSouth"];
    public $Lagos = ["Shomolu", " Agege", " Alimosho", " Lagos Island", " Lagos Mainland", " Mushin", " Oshodi-Isolo", " Surulere", " Ikorodu", " Eti-Osa", " Ibeju-Lekki", " Epe", " Ojo", " Badagry", " Ikeja", " Kosofe", " Amuwo Odofin", " Ajeromi/Ifelodun", " Ifako/Ijaiye", " Apapa"];
    public $Nasarawa = ["Wamba", " Kokona", " Keana", " Nassarawa/Eggon", " Toto", " Awe", " Akwanga", " Keff", " Karu", " Lafia", " Obi", " Doma", " Nassarawa"];
    public $Niger = ["Agaie", " Bosso", " Agwara Bida", " Lavun", " Borgu", " Chanchaga", " Edati", " Gurara", " Katcha", " Gbako", " Kontagora", " Lapai", " Magama", " Shiroro", " Mashegu", " Muya", " Mokwa", " Pailoro", " Mariga", " Rijau", " Suleja", " Wushishi", " Tafa"];
    public $Ogun = ["Abeokuta North", " Abeokuta South", " Ogun Water-Side", " Ijebu-Ode", " Ijebu North", " Ijebu North East", " Ijebu East", " Odogbolu", " Ikenne", " Sagamu", " Odeda", " Iffo", " Obafemi Owode", " Egbado North", " Ado-Odo/Ota", " Imeko-Afon", " Egbado South", " Ipokia", " Ewekoro", " Idarapo"];
    public $Ondo = ["Ondo", " Odigbo", " Okitipupa", " Ilaje", " Irele", " Akure South", " Akoko North East", " Akoko South West", " Idanre", " Ile-Oluji/Oke-Igbo", " Ose", " Ifedore", " Akoko North-West", " Akure North", " Owo", " Ondo East", " Ilaje West", " Akoko South East"];
    public $Osun = ["Ayedade", " Aiyedire", " Atakunmosa West", " Atakunmosa East", " Boripe", " Boluwaduro", " Ede South", " Ede North", " Egbedore", " Ejigbo", " Ifedayo", " Ife East", " Ife Central", " Ife North", " Ife South", " Ifelodun", " Irepodun", " Ila", " Irewole", " Ilesha East", " Isokan", " Ilesha West", " Iwo", " Obokun", " Ola-Oluwa", " Odo-Otin", " Olorunda", " Oriade", " Oshogbo", " Orolu"];
    public $Oyo = ["Afijo", " Akinyele", " Egbeda", " Ibadan Central", " Ibadan North-East", " Ibadan South-West", " Ibadan South-East", " Ibarapa", " Ido", " Ifedapo", " Ifeloju", " Irepo", " Iseyin", " Kajola", " Lagelu", " Ogbomosho North", " Oyo West", " Ogbomosho South", " Atiba", " Saki East", " Atisbo", " Saki West", " Itesiwaju", " Ibarapa North", " Iwajowa", " Olorunsogo", " Surulere", " Oluloye", " Orelope", " Ogo-Oluwa", " Orire", " Oyo East", " Ona-Ara"];
    public $Plateau = ["Jos North", " Bassa", " Jos South", " Barakin Ladi", " Bokkos", " Mangu", " Pankshin", " Kanam", " Langtang North", " Wase", " Langtang South", " Qua’an pan", " Jos East", " Riyom", " Mikang", " Kanke"];
    public $Rivers = ["Ogba/Egbema/Ndoni", " Ahoada East", " Ikwerre", " Etche", " Andoni/Opobo", " Bonny", " Okrika", " Oyigbo", " Khana", " Gokana Tai", " Eleme", " Obia/Akpor", " Emohua", " Degema", " Asari Toru", " Akuku-Toru", " Abua/Odual", " Omumma", " Opobo/Nkoro", " Ogu/Bolo", " Ahaoda West", " Eleme Port Harcourt"];
    public $Sokoto = ["Tangaza", " Binji", " Illela", " Gada", " Sabon Birni", " Gawabawa", " Kware", " Goronyo", " Wurno", " Rabah", " Wamako", " Silame", " Isa", " Yabo", " Bodinga", " Tambulwal", " Dange-Shinsi", " Gudu", " Kebbe", " Sokoto North", " Shagari", " Sokoto South", " Tureta"];
    public $Taraba = ["Jalingo", " Sardauna", " Takum", " Wukari", " Gashaka", " Bali", " Zing", " Yorro", " Donga", " Ibi", " Lau", " Ussa", " Ardo-Kola", " Gassol", " Kurmi", " KarinLamido"];
    public $Yobe = ["Gujba", " Fika", " Nangere", " Giedam", " Yunusari", " Yusufari", " Jakusko", " Barde", " Bosari", " Nguru", " Machina", " Damaturu", " Potiskum", " Tarmua", " Karasuwa", " Gulani"];
    public $Zamfara = ["Tsafe", " Zurmi", " Maradun", " Talata-Marafa", " Kaura-Namoda", " Bungudu", " Gussau", " Maru", " Anka", " Kiyawa", " Bukkuyum", " Bakura", " Gummi", " Shinkafi"];
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function clean($data)
    {
        $data = ltrim($data);
        $data = rtrim($data);
        return $data;
    }

    public function run()
    {
        $sex = ['male', 'female'];
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < random_int(30, 400); $i++) {
            Data::create([
                'area_id' => 1,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Abia[array_rand($this->Abia)]),
                'date_occurred' => Carbon::now()->subYears(random_int(2, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 200); $i++) {
            Data::create([
                'area_id' => 2,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Adamawa[array_rand($this->Adamawa)]),
                'date_occurred' => Carbon::now()->subYears(random_int(2, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 3,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Anambra[array_rand($this->Anambra)]),
                'date_occurred' => Carbon::now()->subYears(random_int(2, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 4,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->AkwaIbom[array_rand($this->AkwaIbom)]),
                'date_occurred' => Carbon::now()->subYears(random_int(2, 60))
            ]);
        }
        // bauchi
        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 5,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Bauchi[array_rand($this->Bauchi)]),
                'date_occurred' => Carbon::now()->subYears(random_int(2, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 6,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Bayelsa[array_rand($this->Bayelsa)]),
                'date_occurred' => Carbon::now()->subYears(random_int(2, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 7,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Benue[array_rand($this->Benue)]),
                'date_occurred' => Carbon::now()->subYears(random_int(2, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 8,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Borno[array_rand($this->Borno)]),
                'date_occurred' => Carbon::now()->subYears(random_int(2, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 9,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->CrossRiver[array_rand($this->CrossRiver)]),
                'date_occurred' => Carbon::now()->subYears(random_int(2, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 10,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Delta[array_rand($this->Delta)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 11,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Ebonyi[array_rand($this->Ebonyi)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 12,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Enugu[array_rand($this->Enugu)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 60))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 13,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Edo[array_rand($this->Edo)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 20))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 14,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Ekiti[array_rand($this->Ekiti)]),
                'date_occurred' => Carbon::now()->subYears(random_int(3, 20))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 15,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->FCT[array_rand($this->FCT)]),
                'date_occurred' => Carbon::now()->subYears(random_int(3, 20))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 16,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Gombe[array_rand($this->Gombe)]),
                'date_occurred' => Carbon::now()->subYears(random_int(3, 20))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 17,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Imo[array_rand($this->Imo)]),
                'date_occurred' => Carbon::now()->subYears(random_int(3, 20))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 18,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Jigawa[array_rand($this->Jigawa)]),
                'date_occurred' => Carbon::now()->subYears(random_int(3, 20))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 19,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Kaduna[array_rand($this->Kaduna)]),
                'date_occurred' => Carbon::now()->subYears(random_int(3, 20))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 20,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Kano[array_rand($this->Kano)]),
                'date_occurred' => Carbon::now()->subYears(random_int(3, 20))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 21,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Katsina[array_rand($this->Katsina)]),
                'date_occurred' => Carbon::now()->subYears(random_int(3, 20))
            ]);
        }

        for ($i = 0; $i < random_int(30, 258); $i++) {
            Data::create([
                'area_id' => 22,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Kebbi[array_rand($this->Kebbi)]),
                'date_occurred' => Carbon::now()->subYears(random_int(3, 20))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 23,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Kogi[array_rand($this->Kogi)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 24,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Kwara[array_rand($this->Kwara)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 25,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Lagos[array_rand($this->Lagos)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 26,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Nasarawa[array_rand($this->Nasarawa)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 27,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Niger[array_rand($this->Niger)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 28,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Ogun[array_rand($this->Ogun)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 29,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Ondo[array_rand($this->Ondo)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 30,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Osun[array_rand($this->Osun)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 31,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Oyo[array_rand($this->Oyo)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 32,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Plateau[array_rand($this->Plateau)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 33,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Rivers[array_rand($this->Rivers)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 34,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Sokoto[array_rand($this->Sokoto)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 35,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Taraba[array_rand($this->Taraba)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 36,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Yobe[array_rand($this->Yobe)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

        for ($i = 0; $i < random_int(58, 800); $i++) {
            Data::create([
                'area_id' => 37,
                'name' => $faker->firstName . " " . $faker->lastName,
                'age' => random_int(1, 17),
                'sex' => $sex[array_rand($sex)],
                'lga' => $this->clean($this->Zamfara[array_rand($this->Zamfara)]),
                'date_occurred' => Carbon::now()->subYears(random_int(1, 30))
            ]);
        }

    }
}
