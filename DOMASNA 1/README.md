Опис на проектот

Нашиот проект (BankFinder) е веб апликација, со помош на која ќе може да се пребаруваат банки на територијата на град Скопје. Целта на проектот е на брз и едноставен да се прикажат банките во одредена област, како и да се дознаат некои дополнителни информации за секоја од банките.

Најпрвин кога ќе се вклучи веб апликацијата се прикажува мапа со банките во Скопје  означени со соодветни сини ознаки и табела за преглед на податоците за секоја банка. Постои можност на филтрација на податоците, притоа промените кои се случуваат при филтрацијата се ефектираат и на географската мапа и на табелата.
Филтцијата на податоците е можна според следниве критериуми: 
Филтрација според својства - покрај основните податоци за бакната, како името и координатите, се прикажуваат и податоци за: дејноста (Amenity), градот (Addr city), државата (Addr country), број (Addr number), поштенски број (Addr postcode), улица (Addr street), податоци за постоењето на банкомат (ATM), работното време (Opening hours) и др.
Филтрација според маил - ги прикажува само оние банки за кои постои податок за email адреса во базата на податоци. 
Филтрација според телефон - ги прикажува само оние банки за кои постои податок за телефонски број во базата на податоци.  
Филтрација според банкомат - ги прикажува само банките кои имаат банкомат. 
Филтрација според координати - ги прикажува координатите на секоја од банките до нејзиното име.
  
Системот исто така овозможува и сортирање на податоците во расечки или опаѓачки редослед според името на банката со акивација на копчето за сортирање. 
Лимитирање на бројот на прикажани податоци се врши со клик на копчето за лимитирање, притоа можни опции се: приказ на податоците за сите банки, приказ за 10 банки, за 25, за 50 или 100 банки.

Веб апликацијата може да работи само на уред кој е поврзан со интернет и нејзината брзина зависи од квалитетот на интернет што го има корисникот. Оваа веб апликација ќе се развива со користење на front-end јазиците: Vue JS3, Typescript, SCSS, HTML, CSS, JavaScript и back-end јазиците: Laravel, PHP. Исто така има потреба од база на податоци, па за таа цел за база на податоци ќе користиме MySQL.

Спецификација на барањата

Опис на приоритет на барања

Функционални барања

Системот ќе прикажува одредени податоци на географска мапа, па поради тоа се јавува потреба од база на податоци во која ќе бидат запишани сите потребни инфомации. (Приоритет 1)
Системот мора да ги превземе потребните податоци од базата. (Приоритет 1)
Системот мора да биде во постојан контакт со базата. (Приоритет 1)
Базата на податоци ги чува само податоците за бакните кои се однесуваат единствено на градот Скопје. (Приоритет 1)
Главна функционалност на системот е приказ на одредени објекти на географска мапа. (Приоритет 1)
Системот се однесува на сите банки кои се наоѓаат во градот Скопје. (Приоритет 1)
Системот овозможува приказ на сите објекти на географската мапа во Скопје, но ги нагласува само објектите означени како банки на мапа. (Приоритет 1)
Секоја банка на географската мапа системот ќе ја прикажува со соодветна ознака/иконка. (Приоритет 1)
Апликацијата ќе нуди можност за филтрација на објектите за приказ. (Приоритет 1)
Промените кои настануваат при филтрацијата се ефектираат и на географската мапа и на табелата. (Приоритет 1)
Системот прикажува и табела со податоци за секоја банка во посебна редица. (Приоритет 1)
Основните податоци во табелата кои се прикажуваат се името на банката и нејзините координати. (Приоритет 1)
Системот има копче со филтер With Properties со кој се прикажуват дополнителни информации во табелата за секоја банка поединечно, притоа се јавуваат дополнитлни колони со инормации за дејноста (Amenity), градот (Addr city), државата (Addr country), број (Addr number), поштенски број (Addr postcode), улица (Addr street), податоци за постоењето на банкомат (ATM), работното време (Opening hours) и др. (Приоритет 1)
Системот има копче со филтер With Email преку кое се врши филтрација на податоците за банките во табелата и се прикажуваат само банките за кои постои email адреса во базата на податоци. (Приоритет 1)
Системот има копче со филтер With Phone преку кое се врши филтрација на податоците за банките во табелата и се прикажуваат само банките за кои постои телефонски број во базата на податоци. (Приоритет 1)
Системот има копче со филтер With АТМ преку кое се врши филтрација на податоците за банките во табелата и се прикажуваат само банките кои поседуваат банкомат. (Приоритет 1)
Системот има копче со филтер Coordinates only преку чија активација се пркажуваат кординатите на секоја банка, за која постојат податои во базата, и во табелата се прикажува само името на банката и нејзните соодветни координати. (Приоритет 1)
Системот има копче со филтер Sort и 2 можности за филтрација. (Приоритет 1)
Sort: Ascending преку кое податоците во табелата се сортираат во растечки редослед според името, односно најгоре се прикажуваат податоците за банките чие име е со латинична поддршка, притоа запазувајќи го растечкиот редослед, а после нив следат банките чие име е со ќирилична поддршка, сортирани во растечки редослед според името на банката. (Приоритет 1)
Sort: Dеscending преку кое податоците во табелата се сортираат во опаѓачки редослед според името, односно најгоре се прикажуваат податоците за банките чие име е со латинична поддршка, притоа запазувајќи го опаѓачкиот редослед, а после нив следат банките чие име е со ќирилична поддршка, сортирани во опаѓачки редослед според името на банката. (Приоритет 1)
Системот овозможува лимитирање на приказот на податоци со активација на копчето Limit, односно корисникот може да избере колку банки сака да му се прикажат на мапата и во табелата, притоа можни опции се: приказ на сите банки, приказ на 10, 25, 50 или 100 банки. (Приоритет 2)
Системот ќе нуди англиска верзија. (Приоритет 2)

Нефункционални барања

Системот треба да овозможи 1000 корисници истовремено. Приоритет 1
Системот мора да работи без дефект во 95 проценти од случаите на употреба во текот на еден месец. Приоритет 1
Системот не треба да има имплементација само за еден определен веб прелистувач. Приоритет 1
Системот треба да нуди одговор со прикажани информации во рок од 7 секунди. Приоритет 1
Системот треба да овозможи прецизна локација во 99 проценти од случаите. Приоритет 1
Системо требат да има праг на доцнење од 2000ms. Приоритет 1
Системот му овозможува на корисникот избор помеѓу светлосен и темен режим. Приоритет 3
Системот е достапен исклучиво кога корисникот е поврзан на системот. Приоритет 1




