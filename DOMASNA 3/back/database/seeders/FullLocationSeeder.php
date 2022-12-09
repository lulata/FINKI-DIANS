<?php

namespace Database\Seeders;

use App\Models\Node;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FullLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = json_decode('{
        "type": "FeatureCollection",
        "generator": "overpass-ide",
        "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
        "timestamp": "2022-11-05T23:43:09Z",
        "features": [
          {
            "type": "Feature",
            "properties": {
              "@id": "relation/5360059",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:postcode": "1000",
              "amenity": "bank",
              "building": "commercial",
              "name": "Capital Bank",
              "name:en": "UNIBank",
              "office": "company",
              "type": "multipolygon",
              "website": "http://www.unibank.com.mk/",
              "wheelchair": "no",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4296333,
                41.9961168
              ]
            },
            "id": "relation/5360059"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/32653114",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:housenumber": "1",
              "addr:postcode": "1000",
              "addr:street": "Булевар Мајка Тереза",
              "amenity": "bank",
              "atm": "yes",
              "brand": "Тутунска Банка",
              "building": "commercial",
              "name": "NBL Банка",
              "name:en": "NBL Bank",
              "office": "administrative",
              "operator": "Тутунска Банка",
              "wheelchair": "yes",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.425328,
                41.9926528
              ]
            },
            "id": "way/32653114"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/37997011",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:housenumber": "2",
              "addr:postcode": "1000",
              "addr:street": "Јани Лукровски",
              "amenity": "bank",
              "building": "residential",
              "int_name": "NLB Tutunska Banka",
              "name": "НЛБ Тутунска Банка",
              "name:en": "NLB Tutunska Banka",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4607214,
                42.0014888
              ]
            },
            "id": "way/37997011"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/175160538",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:postcode": "1000",
              "amenity": "bank",
              "atm": "yes",
              "building": "residential",
              "int_name": "Komercijalna Banka",
              "name": "Комерцијална банка",
              "name:en": "Komercijalna Banka",
              "operator": "Комерцијална банка АД Скопје",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4607801,
                42.0027257
              ]
            },
            "id": "way/175160538"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/175160543",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:postcode": "1000",
              "amenity": "bank",
              "building": "residential",
              "int_name": "TTK Banka",
              "name": "ТТК Банка",
              "name:en": "TTK Bank",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4602777,
                42.0028867
              ]
            },
            "id": "way/175160543"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/175277490",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:housenumber": "3",
              "addr:postcode": "1000",
              "addr:street": "Васил Иљоски",
              "amenity": "bank",
              "atm": "yes",
              "building": "commercial",
              "building:levels": "5",
              "int_name": "Komercijalna Banka",
              "name": "Комерцијална Банка",
              "name:en": "Komercijalna Bank",
              "office": "company",
              "opening_hours": "Mo-Fr 07:30-19:00; Sa 07:30-13:30",
              "operator": "Комерцијална Банка АД Скопје",
              "surveillance": "indoor;outdoor",
              "surveillance:type": "camera",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4299312,
                41.9967392
              ]
            },
            "id": "way/175277490"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/175277501",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:postcode": "1000",
              "addr:street": "Васил Иљоски",
              "amenity": "bank",
              "building": "commercial",
              "building:levels": "8",
              "int_name": "Komercijalna Banka",
              "name": "Комерцијална банка",
              "name:en": "Komercijalna Bank",
              "office": "company",
              "opening_hours": "Mo-Fr 08:00-16:00",
              "operator": "Комерцијална Банка АД Скопје",
              "surveillance": "indoor;outdoor",
              "surveillance:type": "camera",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4303789,
                41.996512
              ]
            },
            "id": "way/175277501"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/175280566",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:housenumber": "ББ",
              "addr:postcode": "1000",
              "addr:street": "27 Март",
              "amenity": "bank",
              "building": "office",
              "building:levels": "4",
              "contact:website": "http://eurostandard.com.mk",
              "name": "Еуростандард Банка",
              "name:en": "Eurostandard Bank",
              "name:mk": "Еуростандард Банка",
              "surveillance": "indoor;outdoor",
              "surveillance:type": "camera",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4297982,
                41.9963512
              ]
            },
            "id": "way/175280566"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/175280569",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:housenumber": "bb",
              "addr:postcode": "1000",
              "addr:street": "27 Март",
              "amenity": "bank",
              "atm": "yes",
              "building": "commercial",
              "name": "Поштенска Банка",
              "office": "company",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4295154,
                41.9967642
              ]
            },
            "id": "way/175280569"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/175479502",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:housenumber": "72",
              "addr:postcode": "1000",
              "addr:street": "Булевар Илинден",
              "amenity": "bank",
              "building": "yes",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4239811,
                42.0020869
              ]
            },
            "id": "way/175479502"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/176168735",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:postcode": "1000",
              "amenity": "bank",
              "building": "commercial",
              "int_name": "Komercijalna Banka",
              "name": "Комерцијална Банка",
              "name:en": "Komercijalna Banka",
              "office": "company",
              "operator": "Комерцијална Банка АД Скопје",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4348873,
                41.9970742
              ]
            },
            "id": "way/176168735"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/305533449",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:postcode": "1000",
              "amenity": "bank",
              "atm": "yes",
              "building": "yes",
              "name": "Halkbank",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4374661,
                41.999585
              ]
            },
            "id": "way/305533449"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/371129575",
              "amenity": "bank",
              "name": "НБРМ",
              "operator": "Народна банка на Македонија (НРБМ)",
              "wikidata": "Q2598067"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4428736,
                41.9936657
              ]
            },
            "id": "node/371129575"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/379878803",
              "amenity": "bank",
              "atm": "yes",
              "building": "yes",
              "int_name": "Stopanska Banka",
              "name": "Стопанска банка",
              "name:en": "Stopanska Banka",
              "operator": "Стопанска Банка АД - Скопје",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4396214,
                42.0012336
              ]
            },
            "id": "way/379878803"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/416030019",
              "amenity": "bank",
              "int_name": "Stopanska Banka",
              "name": "Стопанска Банка",
              "name:en": "Stopanska Banka",
              "operator": "Стопанска Банка АД - Скопје"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4552843,
                41.9881468
              ]
            },
            "id": "node/416030019"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/416030021",
              "addr:housenumber": "12",
              "addr:street": "Булевар Јане Сандански",
              "amenity": "bank",
              "name": "Охридска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.45507,
                41.9881141
              ]
            },
            "id": "node/416030021"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/459670407",
              "amenity": "bank",
              "operator": "Уни Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4335756,
                41.9947783
              ]
            },
            "id": "node/459670407"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/459670746",
              "amenity": "bank",
              "int_name": "Stopanska Banka",
              "name": "Стопанска банка",
              "name:en": "Stopanska Banka",
              "operator": "Стопанска Банка АД - Скопје"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4332758,
                41.9957098
              ]
            },
            "id": "node/459670746"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/547985718",
              "addr:housenumber": "20",
              "addr:street": "3та Македонска Бригада бр.1",
              "amenity": "bank",
              "name": "Тутунска Банка",
              "operator": "Тутунска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4428016,
                41.9860412
              ]
            },
            "id": "node/547985718"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/552769113",
              "amenity": "bank",
              "name": "Халкбанк"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4447847,
                42.0311804
              ]
            },
            "id": "node/552769113"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/580969927",
              "addr:city": "Cкoпje",
              "addr:housenumber": "7",
              "addr:postcode": "1000",
              "addr:street": "Манапо",
              "amenity": "bank",
              "atm": "yes",
              "building": "yes",
              "building:levels": "5",
              "email": "mkd.info@procredit-group.com",
              "name": "ПроКредит банка",
              "name:en": "Procredit Bank",
              "name:sq": "Banka \"Procredit\"",
              "phone": "+38922446000",
              "website": "https://www.pcb.mk/",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3929597,
                42.0072675
              ]
            },
            "id": "way/580969927"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "way/670610274",
              "amenity": "bank",
              "brand": "Halkbank",
              "brand:wikidata": "Q3593818",
              "brand:wikipedia": "en:Halkbank a.d.",
              "building": "yes",
              "fixme": "missing street address",
              "name": "Halkbank",
              "operator": "Halkbank a.d.",
              "@geometry": "center"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3260136,
                41.9974656
              ]
            },
            "id": "way/670610274"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/1307183572",
              "amenity": "bank",
              "atm": "yes",
              "name": "Тутунска Банка Карпош 4",
              "operator": "НЛБ - Тутунска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3833142,
                42.005028
              ]
            },
            "id": "node/1307183572"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/1475404508",
              "amenity": "bank",
              "atm": "yes",
              "name": "Stopanska banka"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3682515,
                42.0073792
              ]
            },
            "id": "node/1475404508"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/1475404523",
              "amenity": "bank",
              "atm": "yes",
              "name": "Тутунска банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3681939,
                42.0063452
              ]
            },
            "id": "node/1475404523"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/1475404526",
              "amenity": "bank",
              "atm": "yes",
              "name": "Komercijalna banka"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3683899,
                42.0075172
              ]
            },
            "id": "node/1475404526"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/1475404533",
              "amenity": "bank",
              "atm": "yes",
              "name": "Komercijalna banka"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3650349,
                42.0069351
              ]
            },
            "id": "node/1475404533"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/1615760049",
              "amenity": "bank",
              "name": "НЛБ Тутунска Банка",
              "name:en": "NLB Tutunska Banka"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3970663,
                42.0036469
              ]
            },
            "id": "node/1615760049"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/1618605216",
              "addr:street": "Железничка",
              "amenity": "bank",
              "brand": "Halkbank",
              "name": "Зират Банка",
              "name:en": "Zirat Bank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4244409,
                41.9916695
              ]
            },
            "id": "node/1618605216"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/1747986348",
              "amenity": "bank",
              "operator": "Стопанска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4327574,
                41.9876902
              ]
            },
            "id": "node/1747986348"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/1851476148",
              "amenity": "bank",
              "name": "Централен Регистер на РМ"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4425119,
                41.9941727
              ]
            },
            "id": "node/1851476148"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/1860283429",
              "amenity": "bank",
              "atm": "yes",
              "int_name": "Stopanska Banka",
              "name": "Стопанска банка",
              "name:en": "Stopanska banka",
              "operator": "Стопанска банка АД - Скопје"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4641508,
                42.0029983
              ]
            },
            "id": "node/1860283429"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2276499906",
              "amenity": "bank",
              "atm": "yes",
              "int_name": "Komercijalna Banka",
              "name": "Комерцијална Банка",
              "name:en": "Komercijalna Banka",
              "operator": "Комерцијална Банка АД Скопје"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4100251,
                41.9947725
              ]
            },
            "id": "node/2276499906"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2335276894",
              "addr:postcode": "1000",
              "amenity": "bank",
              "int_name": "Šparkase",
              "name": "Шпаркасе",
              "name:en": "Sparkasse",
              "name:mk": "Шпаркасе Банка-Ѓорче Петров",
              "opening_hours": "Mo-Fr 08:30-16:30",
              "phone": "+389 2 2050514",
              "website": "https://sparkasse.mk"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.357664,
                42.0064278
              ]
            },
            "id": "node/2335276894"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2335276905",
              "addr:housenumber": "1",
              "addr:postcode": "1000",
              "addr:street": "Мице Козар",
              "amenity": "bank",
              "name": "Sparkasse",
              "opening_hours": "Mo-Fr 08:30-16:30",
              "phone": "+389 02 2050260",
              "website": "http://www.ob.com.mk"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3596919,
                42.0065755
              ]
            },
            "id": "node/2335276905"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2335304828",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:postcode": "1000",
              "amenity": "bank",
              "atm": "yes",
              "int_name": "Šparkase",
              "name": "Шпаркасе",
              "name:en": "Sparkasse",
              "operator": "Шпаркасе Банка Македонија АД Скопје"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4400132,
                41.9818419
              ]
            },
            "id": "node/2335304828"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2335304834",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:postcode": "1000",
              "addr:street": "Булевар Цветан Димов",
              "amenity": "bank",
              "int_name": "Šparkase",
              "name": "Шпаркасе",
              "name:en": "Sparkasse",
              "operator": "Шпаркасе Банка Македонија АД Скопје"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4452794,
                42.0136832
              ]
            },
            "id": "node/2335304834"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2365723919",
              "amenity": "bank",
              "name": "Комерцијална Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4998637,
                41.9967666
              ]
            },
            "id": "node/2365723919"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2882119234",
              "amenity": "bank",
              "name": "Комерцијална Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4723253,
                41.980457
              ]
            },
            "id": "node/2882119234"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2884502160",
              "amenity": "bank",
              "name": "Стопанска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4752946,
                41.9810724
              ]
            },
            "id": "node/2884502160"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2884502162",
              "amenity": "bank",
              "name": "Централна Кооперативна Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4724684,
                41.982843
              ]
            },
            "id": "node/2884502162"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2884502163",
              "amenity": "bank",
              "name": "Комерцијална Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4724627,
                41.9741156
              ]
            },
            "id": "node/2884502163"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2884502164",
              "amenity": "bank",
              "name": "Прокредит Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4681788,
                41.9847822
              ]
            },
            "id": "node/2884502164"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2884502165",
              "amenity": "bank",
              "name": "ТТК Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4637512,
                41.9862724
              ]
            },
            "id": "node/2884502165"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2884502166",
              "amenity": "bank",
              "name": "Стопанска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4629871,
                41.9867167
              ]
            },
            "id": "node/2884502166"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2884502167",
              "amenity": "bank",
              "atm": "yes",
              "name": "NLB Тутунска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4600367,
                41.9894468
              ]
            },
            "id": "node/2884502167"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2884502183",
              "amenity": "bank",
              "atm": "yes",
              "name": "Komercijalna Banka"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4502163,
                41.9892067
              ]
            },
            "id": "node/2884502183"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2886274890",
              "amenity": "bank",
              "atm": "yes",
              "name": "NLB Тутунска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4390666,
                41.9846465
              ]
            },
            "id": "node/2886274890"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/2887575838",
              "amenity": "bank",
              "name": "Охридска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4624841,
                41.9870236
              ]
            },
            "id": "node/2887575838"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/3026549094",
              "amenity": "bank",
              "atm": "yes",
              "int_name": "Komercijalna Banka",
              "name": "Комерцијална Банка",
              "name:en": "Komercijalna Banka",
              "operator": "Комерцијална Банка АД Скопје"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4011278,
                42.0028422
              ]
            },
            "id": "node/3026549094"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/3101725381",
              "amenity": "bank",
              "name": "Stopanska Banka"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4423152,
                41.9940162
              ]
            },
            "id": "node/3101725381"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/3341289787",
              "addr:city": "Скопје",
              "addr:postcode": "1000",
              "addr:street": "Македонија",
              "amenity": "bank",
              "atm": "yes",
              "int_name": "Komercijalna Banka",
              "name": "Комерцијална Банка",
              "name:en": "Komercijalna Bank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4299102,
                41.9928192
              ]
            },
            "id": "node/3341289787"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/3787600182",
              "amenity": "bank",
              "name": "Стопанска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4405306,
                41.9809376
              ]
            },
            "id": "node/3787600182"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4012028345",
              "amenity": "bank",
              "atm": "yes",
              "int_name": "Stopanska Banka",
              "name": "Стопанска Банка",
              "name:en": "Stopanska Banka",
              "operator": "Стопанска Банка АД - Скопје"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4205887,
                41.998869
              ]
            },
            "id": "node/4012028345"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4012028346",
              "amenity": "bank",
              "atm": "yes",
              "name": "Комерцијална Банка",
              "name:en": "Komercijalna Bank",
              "opening_hours": "Mo-Fr 07:30-18:00; Sa 08:00-13:00",
              "operator": "Комерцијална Банка АД Скопје"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4214196,
                41.9987428
              ]
            },
            "id": "node/4012028346"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4059895435",
              "amenity": "bank",
              "name": "Шпаркасе Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4177179,
                41.9937486
              ]
            },
            "id": "node/4059895435"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4059895436",
              "amenity": "bank",
              "name": "Охридска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4172424,
                41.9938028
              ]
            },
            "id": "node/4059895436"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4144098451",
              "amenity": "bank",
              "atm": "yes",
              "int_name": "Komercijalna Banka",
              "level": "0",
              "name": "Комерцијална Банка",
              "name:en": "Komercijalna Banka",
              "operator": "Комерцијална Банка АД Скопје",
              "wheelchair": "yes"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3909854,
                42.0046642
              ]
            },
            "id": "node/4144098451"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4266034097",
              "amenity": "bank",
              "name": "Комерцијална Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4387451,
                41.9846955
              ]
            },
            "id": "node/4266034097"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4448978289",
              "amenity": "bank",
              "name": "Уни Банка - Кисела Вода",
              "name:mk": "Уни Банка - Кисела Вода"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4392671,
                41.9833896
              ]
            },
            "id": "node/4448978289"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4459578970",
              "addr:city": "Cкoпje",
              "addr:city:en": "Skopje",
              "addr:country": "MK",
              "addr:housenumber": "28",
              "addr:postcode": "1000",
              "addr:street": "Кеј 13 Ноември",
              "addr:street:en": "Kay 13th November",
              "amenity": "bank",
              "atm": "yes",
              "int_name": "NLB Tutunska banka",
              "name": "НЛБ Тутунска банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4345705,
                41.9952945
              ]
            },
            "id": "node/4459578970"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4502199191",
              "amenity": "bank",
              "name": "ПроКредит",
              "name:mk": "procredit"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4296796,
                41.9952676
              ]
            },
            "id": "node/4502199191"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4573205007",
              "amenity": "bank",
              "atm": "yes",
              "level": "0",
              "name": "Halkbank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3964504,
                42.0034052
              ]
            },
            "id": "node/4573205007"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4573205016",
              "amenity": "bank",
              "atm": "yes",
              "level": "0",
              "name": "Шпаркасе",
              "name:en": "Sparkasse"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3966968,
                42.0033742
              ]
            },
            "id": "node/4573205016"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4594432367",
              "amenity": "bank",
              "int_name": "Stopanska Banka",
              "name": "Стопанска банка",
              "name:en": "Stopanska Banka",
              "operator": "Стопанска Банка АД - Скопје"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4336687,
                41.9955887
              ]
            },
            "id": "node/4594432367"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4740732822",
              "amenity": "bank",
              "name": "Sparkasse",
              "name:en": "Ohridska Banka",
              "name:mk": "Охридска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3975443,
                42.0024666
              ]
            },
            "id": "node/4740732822"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/4742916122",
              "addr:housenumber": "1",
              "addr:street": "Франклин Рузвелт",
              "amenity": "bank",
              "email": "tb.kapistec@nlb.mk",
              "name": "НЛБ Тутунска Банка",
              "opening_hours": "Mo-Su 08:00-17:00",
              "phone": "+38923089090",
              "website": "http://www.nlb.mk"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4109915,
                41.993632
              ]
            },
            "id": "node/4742916122"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/5054709626",
              "amenity": "bank",
              "atm": "yes",
              "drive_through": "no",
              "name": "НЛБ Тутунска Банка",
              "website": "http://www.nlbtb.com.mk/"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.5041694,
                42.0035989
              ]
            },
            "id": "node/5054709626"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/5131823434",
              "amenity": "bank",
              "name": "TTK"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4276102,
                41.9948876
              ]
            },
            "id": "node/5131823434"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/5333318375",
              "amenity": "bank",
              "name": "УНИБанка",
              "name:en": "UNIBank",
              "website": "http://www.unibank.com.mk/"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4004646,
                42.0029303
              ]
            },
            "id": "node/5333318375"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/5333318378",
              "amenity": "bank",
              "name": "TTK Bank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4008798,
                42.0028742
              ]
            },
            "id": "node/5333318378"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/5731830652",
              "amenity": "bank",
              "name": "Halkbank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4326259,
                41.9934567
              ]
            },
            "id": "node/5731830652"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6054036209",
              "amenity": "bank",
              "atm": "yes",
              "drive_through": "no",
              "name": "НЛБ Банка",
              "name:en": "NLB Bank",
              "opening_hours": "Mo-Fr 08:00-17:00; Sa 09:00-13:00",
              "operator": "НЛБ Банка АД Скопје",
              "website": "https://nlb.mk/"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4276726,
                41.9963482
              ]
            },
            "id": "node/6054036209"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6054037094",
              "amenity": "bank",
              "name": "Sparkasse"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4275923,
                41.9937523
              ]
            },
            "id": "node/6054037094"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6054048502",
              "amenity": "bank",
              "name": "Стопанска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.356997,
                42.0067272
              ]
            },
            "id": "node/6054048502"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6054048711",
              "amenity": "bank",
              "atm": "yes",
              "name": "Komercijalna Banka"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3658492,
                42.0069917
              ]
            },
            "id": "node/6054048711"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6054048715",
              "amenity": "bank",
              "name": "Silk road"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4225838,
                41.9984708
              ]
            },
            "id": "node/6054048715"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6054048723",
              "amenity": "bank",
              "atm": "yes",
              "name": "Sparkasse"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4184814,
                41.9993025
              ]
            },
            "id": "node/6054048723"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6054049799",
              "amenity": "bank",
              "atm": "yes",
              "name": "Silkroad Bank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3687237,
                42.0080679
              ]
            },
            "id": "node/6054049799"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6054050096",
              "amenity": "bank",
              "name": "Halbank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4189624,
                41.9991977
              ]
            },
            "id": "node/6054050096"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6137491236",
              "amenity": "bank",
              "name": "Стопанска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4327865,
                41.9876789
              ]
            },
            "id": "node/6137491236"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6275107313",
              "addr:street": "Булевар Гоце Делчев",
              "amenity": "bank",
              "name": "Western Union"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4391635,
                41.999175
              ]
            },
            "id": "node/6275107313"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6277304326",
              "addr:street": "Булевар Христијан Тодоровски Карпош",
              "amenity": "bank",
              "atm": "yes",
              "name": "Halkbank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4457121,
                42.0142495
              ]
            },
            "id": "node/6277304326"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6279058422",
              "amenity": "bank",
              "atm": "yes",
              "name": "НЛБ Тутунска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4447546,
                42.0304003
              ]
            },
            "id": "node/6279058422"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6279225885",
              "addr:housenumber": "27",
              "addr:street": "Булевар Ѓорче Петров",
              "amenity": "bank",
              "name": "Halkbank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3590935,
                42.0065882
              ]
            },
            "id": "node/6279225885"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6281492651",
              "addr:street": "Булевар Крсте Мисирков",
              "amenity": "bank",
              "name": "Стопанска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4401439,
                42.0022117
              ]
            },
            "id": "node/6281492651"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6281672845",
              "amenity": "bank",
              "name": "NLB Banka"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3318349,
                42.0037315
              ]
            },
            "id": "node/6281672845"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6281993277",
              "addr:street": "Џон Кенеди",
              "amenity": "bank",
              "name": "Охридска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4426424,
                42.0134893
              ]
            },
            "id": "node/6281993277"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6287292136",
              "addr:street": "Булевар Јане Сандански",
              "amenity": "bank",
              "atm": "yes",
              "name": "Шпаркасе",
              "name:en": "Sparkasse"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4701282,
                41.9837535
              ]
            },
            "id": "node/6287292136"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6812641691",
              "amenity": "bank",
              "name": "NLB"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4260008,
                41.9995612
              ]
            },
            "id": "node/6812641691"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6814246720",
              "amenity": "bank",
              "name": "NLB"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4373437,
                41.9994143
              ]
            },
            "id": "node/6814246720"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6814246721",
              "amenity": "bank",
              "name": "Halk"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4374802,
                41.9994185
              ]
            },
            "id": "node/6814246721"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6815559785",
              "amenity": "bank",
              "name": "NLB"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4175894,
                41.9995003
              ]
            },
            "id": "node/6815559785"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6815931290",
              "amenity": "bank",
              "name": "Стопанска банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4330782,
                41.9951941
              ]
            },
            "id": "node/6815931290"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6821158391",
              "amenity": "bank",
              "name": "NLB"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4254378,
                41.992781
              ]
            },
            "id": "node/6821158391"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6821158785",
              "amenity": "bank",
              "name": "Komerz"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4310477,
                41.9940018
              ]
            },
            "id": "node/6821158785"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6913357685",
              "amenity": "bank",
              "name": "Hallbank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4294687,
                42.024698
              ]
            },
            "id": "node/6913357685"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/6968735785",
              "amenity": "bank",
              "name:en": "Unibank ATM"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4386821,
                41.9754854
              ]
            },
            "id": "node/6968735785"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/7133065641",
              "amenity": "bank",
              "name": "Уни Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.3575237,
                42.006762
              ]
            },
            "id": "node/7133065641"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/7136180068",
              "amenity": "bank",
              "name": "Охридска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4699551,
                41.9838482
              ]
            },
            "id": "node/7136180068"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/7136914207",
              "amenity": "bank",
              "name": "Силк Роуд Банка",
              "name:en": "Silk Road Bank"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4616919,
                42.0026806
              ]
            },
            "id": "node/7136914207"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/7876582715",
              "amenity": "bank",
              "name": "Silk Road"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4390846,
                41.9839565
              ]
            },
            "id": "node/7876582715"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/9200216063",
              "amenity": "bank",
              "name": "Komerz"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4317942,
                41.9903066
              ]
            },
            "id": "node/9200216063"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/9200216159",
              "amenity": "bank",
              "name": "Iute credit"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4250567,
                41.9984702
              ]
            },
            "id": "node/9200216159"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/9200216160",
              "amenity": "bank",
              "name": "Sparkasse"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4293563,
                41.9978983
              ]
            },
            "id": "node/9200216160"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/9200216441",
              "amenity": "bank",
              "name": "Sto"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4316452,
                41.9903752
              ]
            },
            "id": "node/9200216441"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/9200216722",
              "amenity": "bank",
              "name": "Sparkasse"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4352972,
                41.9899741
              ]
            },
            "id": "node/9200216722"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/9233459229",
              "amenity": "bank",
              "atm": "yes",
              "drive_through": "no",
              "name": "Стопанска Банка",
              "name:en": "Stopanska Banka - STB"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.502468,
                42.0064539
              ]
            },
            "id": "node/9233459229"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/9249325904",
              "amenity": "bank",
              "name": "НЛБ Тутунска Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.46331,
                41.9866482
              ]
            },
            "id": "node/9249325904"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/9249326272",
              "amenity": "bank",
              "name": "Комерцијална Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4633707,
                41.9866114
              ]
            },
            "id": "node/9249326272"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/9959079921",
              "amenity": "bank",
              "atm": "yes",
              "name": "Шпаркасе Банка",
              "operator": "Шпаркасе Банка"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.459307,
                42.000144
              ]
            },
            "id": "node/9959079921"
          },
          {
            "type": "Feature",
            "properties": {
              "@id": "node/10074558295",
              "addr:city": "Cкoпje",
              "addr:housenumber": "12",
              "addr:street": "Македонская улица",
              "amenity": "bank",
              "name": "ВТБ"
            },
            "geometry": {
              "type": "Point",
              "coordinates": [
                21.4144902,
                41.9811471
              ]
            },
            "id": "node/10074558295"
          }
        ]
      }');

      foreach($data->features as $feature) {
         $node = new Node();
         $node->openstreetmap_url = $feature->id;
         $node->longitude = $feature->geometry->coordinates[1];
         $node->latitude = $feature->geometry->coordinates[0];
         if(isset($feature->properties->name)) {
          $node->name = $feature->properties->name;
          unset($feature->properties->name);
         }
         $node->save();

         foreach($feature->properties as $key => $value) {
            $node->properties()->create([
              'type' => $key,
              'data' => $value
            ]);
         }
      }
    }
}
