<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
composer install  
yarn install  
yarn build
php artisan migrate:fresh
php artisan migrate  
php artisan make:filament-user  
Вказати будь-які дані користувача _(пошту вказати ту, якою потрібно буде авторизовуватись для входу в панель керування)_

За необхідністю, для наповнення бази даних тестовими даними, виконати:  
php artisan db:seed

## Кеш
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

## Використання іконок

Компонент іконок використовується Lucide
mallardduck/blade-lucide-icons
**Сайт для вибору https://lucide.dev**
Щоб викликати потрібну іконку необхідно зайти на вищевказаний сайт та обрати назву потрібної іконки.
Потім в шаблоні викликати: **<x-lucide-назва-іконки class="size-5" />**

## Ось список основних команд php artisan make у Laravel:

    Модель: php artisan make:model ModelName
    Контролер: php artisan make:controller ControllerName
    Міграція: php artisan make:migration MigrationName
    Сідер: php artisan make:seeder SeederName
    Запит: php artisan make:request RequestName
    Команда: php artisan make:command CommandName
    Подія: php artisan make:event EventName
    Слухач: php artisan make:listener ListenerName
    Політика: php artisan make:policy PolicyName
    Тест: php artisan make:test TestName
    Шаблон: php artisan make:mail MailName
    Бродкаст: php artisan make:broadcast BroadcastName

php artisan make:model Customer --migration --factory --seed

php artisan make:component \_\_ --view
Це створить компонент з шаблоном, готовим для використання.
Якщо вам потрібна додаткова допомога, дайте знати!

### створити в папці компонент

php artisan make:component Menu/About --view
визвати <x-menu.about>
php artisan make:view view-name

### сторінки

    sirovina-dlya-pinopoliuretana - ppy_serovine
    sirovina-dlya-poliuretanu - py_serovine
    sirovina-dlya-poliuretanovogo-kamyanogo-kilima - py_kilima - продукт
    poliuretanovi-klei - py_klei
    sirovina-dlya-lakofarbovoi-promislovosti - py_lak_prom
    virobi-z-livarnogo-poliuretanu - py_pol
    efekt-mokrogo-kamenyu - py_emk - продукт

### сторінки на клей

### 006 - ПУСТЕ

### 007 ЕФЕКТ МОКРОГО КАМЕНЮ

    efekt-mokrogo-kamenyu - pu_emk

### Продукти

    ppu-dlya-napilennya                                     prod_ppu_napilennya
    ppu-dlya-shkarlupi                                      prod_ppu_shkarlupi
    ppu-poperedno-izolovanih-trub                           prod_ppu_trub
    ppu-dlya-zalivki-sendvich-panelej                       prod_ppu_sendvich
    ppu-dlya-dekoru-ta-negabaritnih-virobiv                 prod_ppu_virobiv
    ppu-dlya-zmicznennya-vugilnogo-masivu                   prod_ppu_masivu
    ppu-dlya-zalivannya-mizhstinnogo-prostoru               prod_ppu_prostoru
    ppu-dlya-povitryanih-filtriv                            prod_ppu_filtriv

    poliuretan-livarnij-kompaktnij                          prod_pu_livarnij
    poliuretanovi-spoluchni-dlya-nalivnoї-pidlogi           prod_pu_pidlogi
    poliuretanovi-elastomiri                                prod_pu_elastomiri
    poliuretanova-pasta                                     prod_pu_pasta
    pigmentni-pasti-dlya-poliuretaniv                       prod_pu_pigment

    poliuretanovi-klej-dlya-gumovoї-ta-epdm-krihti                                              prod_klej_krihti
    poliuretanovi-klej-odnokomponentni-dlya-dereva-d4                                           prod_klej_dereva_d4
    poliuretanovi-klej-odnokomponentni-dlya-sendvich-panelej-ta-klinkernih-termopanelej         prod_klej_sendvich
    poliuretanovi-klej-odnokomponentni-dlya-porolonu-mikrofibri-tekstilyu                       prod_klej_tekstilyu
    poliuretanovij-klej-dvokomponentnij-dlya-budivelnih-materialiv                              prod_klej_budivelnih
    poliuretanovij-klej-dvokomponentnij-dlya-parketu-ta-zagalno-budivelnogo-priznachennya       prod_klej_parketu
    poliuretanovij-klej-dvokomponentnij-dlya-shtuchnoї-travi                                    prod_klej_travi
    vodorozchinni-kleї-dlya-paperu-ta-kartonu                                                   prod_klej_kartonu


    sikativi-ta-dispergatori                                prod_lak_sikativi
    katalizatori                                            prod_lak_kataliz
    antiseptiki                                             prod_lak_antis
    smoli-alkidno-modifikovani-ta-butoksilovani             prod_lak_smoli
    akrilovi-ta-akril-poliuretanovi-sopolimeri              prod_lak_akril
