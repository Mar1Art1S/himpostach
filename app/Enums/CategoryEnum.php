<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;

enum CategoryEnum: string implements HasLabel
{
    case PROD_PPU_NAPILENNYA = 'prod_ppu_napilennya';
    case PROD_PPU_SHKARLUPI = 'prod_ppu_shkarlupi';
    case PROD_PPU_TRUB = 'prod_ppu_trub';
    case PROD_PPU_SENDVICH = 'prod_ppu_sendvich';
    case PROD_PPU_VIROBIV = 'prod_ppu_virobiv';
    case PROD_PPU_MASIVU = 'prod_ppu_masivu';
    case PROD_PPU_PROSTORU = 'prod_ppu_prostoru';
    case PROD_PPU_FILTRIV = 'prod_ppu_filtriv';
    case PROD_PU_LIVARNIJ = 'prod_pu_livarnij';
    case PROD_PU_PIDLOGI = 'prod_pu_pidlogi';
    case PROD_PU_ELASTOMIRI = 'prod_pu_elastomiri';
    case PROD_PU_PASTA = 'prod_pu_pasta';
    case PROD_PU_PIGMENT = 'prod_pu_pigment';
    case PROD_KLEJ_KRIHTI = 'prod_klej_krihti';
    case PROD_KLEJ_DEREVA_D4 = 'prod_klej_dereva_d4';
    case PROD_KLEJ_SENDVICH = 'prod_klej_sendvich';
    case PROD_KLEJ_TEKSTILYU = 'prod_klej_tekstilyu';
    case PROD_KLEJ_BUDIVELNIH = 'prod_klej_budivelnih';
    case PROD_KLEJ_PARKETU = 'prod_klej_parketu';
    case PROD_KLEJ_TRAVI = 'prod_klej_travi';
    case PROD_KLEJ_KARTONU = 'prod_klej_kartonu';
    case PROD_LAK_SIKATIVI = 'prod_lak_sikativi';
    case PROD_LAK_KATALIZ = 'prod_lak_kataliz';
    case PROD_LAK_ANTIS = 'prod_lak_antis';
    case PROD_LAK_SMOLI = 'prod_lak_smoli';
    case PROD_LAK_AKRIL = 'prod_lak_akril';
    case PROD_KILIMA = 'py_kilima';
    case PROD_EMK = 'py_emk';
    case PROD_HARYACHO = 'poli_haryacho';
    case PROD_KHOLODNO = 'poli_kholodno';
    case PROD_PY_POKRITTA = 'prod_py_pokritta';
    case PROD_PVH_TERMOSTABILIZATOR = 'prod_pvh_termostabilizator';
    case PROD_PVH_KIKKER = 'prod_pvh_kikker';
    case PROD_PVH_MODIFIKATOR = 'prod_pvh_modifikator';
    case PROD_ANTIPIRENI_PVH = 'prod_antipirenni_pvh';
    case PROD_POLIEFIRNI_SMOLI = 'prod_poliefiri_smoli';
    case PROD_TVERDI_PPY_NEFT = 'prod_tverdi_ppy';
    case PROD_VIROBI_LIT_PY = 'prod_vibrobi_lit_py';
    case PROD_PY_01 = 'prod_py_01';
    case PROD_PY_02 = 'prod_py_02';
    case PROD_PY_03 = 'prod_py_03';
    case PROD_PY_04 = 'prod_py_04';
    case PROD_PY_05 = 'prod_py_05';


    public function getLabel(): string
    {
        return match ($this) {
            self::PROD_PPU_NAPILENNYA =>  __('ППУ для напилення'),
            self::PROD_PPU_SHKARLUPI =>  __('ППУ для шкарлупи'),
            self::PROD_PPU_TRUB =>  __('ППУ для попередньоізольованих труб'),
            self::PROD_PPU_SENDVICH =>  __('ППУ для заливки "Сендвіч-панелей" та торговельного холодильного обладнання'),
            self::PROD_PPU_VIROBIV =>  __('ППУ для декору та негабаритних виробів (вуллів тощо)'),
            self::PROD_PPU_MASIVU =>  __('ППУ для зміцнення вугільного масиву, зміцнення фундаментів'),
            self::PROD_PPU_PROSTORU =>  __('ППУ для заливання міжстінного простору'),
            self::PROD_PPU_FILTRIV =>  __('ППУ для повітряних фільтрів'),
            self::PROD_PU_LIVARNIJ =>  __('Поліуретан ливарний компактний'),
            self::PROD_PU_PIDLOGI =>  __('Поліуретанові сполучні для наливної підлоги'),
            self::PROD_PU_ELASTOMIRI =>  __('Поліуретанові еластоміри'),
            self::PROD_PU_PASTA =>  __('Поліуретанова паста'),
            self::PROD_PU_PIGMENT =>  __('Пігментні пасти для поліуретанів'),
            self::PROD_KLEJ_KRIHTI =>  __('Поліуретанові клеї для гумової та EPDM крихти'),
            self::PROD_KLEJ_DEREVA_D4 =>  __('Поліуретанові клеї однокомпонентні для дерева Д4'),
            self::PROD_KLEJ_SENDVICH =>  __('Поліуретанові клеї однокомпонентні для сендвіч-панелей та клінкерних термопанелей'),
            self::PROD_KLEJ_TEKSTILYU =>  __('Поліуретанові клеї однокомпонентні для поролону, мікрофібри, текстилю'),
            self::PROD_KLEJ_BUDIVELNIH =>  __('Поліуретановий клей двокомпонентний для будівельних матеріалів'),
            self::PROD_KLEJ_PARKETU =>  __('Поліуретановий клей двокомпонентний для паркету та загальнобудівельного призначення'),
            self::PROD_KLEJ_TRAVI =>  __('Поліуретановий клей двокомпонентний для штучної трави'),
            self::PROD_KLEJ_KARTONU =>  __('Водорозчинні клеї для паперу та картону'),
            self::PROD_LAK_SIKATIVI =>  __('Сикативи та диспергатори'),
            self::PROD_LAK_KATALIZ =>  __('Каталізатори'),
            self::PROD_LAK_ANTIS =>  __('Антисептики'),
            self::PROD_LAK_SMOLI =>  __('Смоли алкідно-модифіковані та бутоксильовані'),
            self::PROD_LAK_AKRIL =>  __('Акрилові та акрил-поліуретанові сополімери'),
            self::PROD_KILIMA =>  __('Сировина для поліуретанового кам`яного килима'),
            self::PROD_EMK =>  __('Ефект мокрого каменю'),
            self::PROD_HARYACHO => __('Полимочевина гарячого нанесення'),
            self::PROD_KHOLODNO => __('Полимочевина  холодного нанесення'),
            self::PROD_PY_POKRITTA => __('Захисні поліуретанові покриття'),
            self::PROD_PVH_TERMOSTABILIZATOR => __('Термостабілізатори'),
            self::PROD_PVH_KIKKER => __('Кіккер'),
            self::PROD_PVH_MODIFIKATOR => __('Модифікатор перероблюваності'),
            self::PROD_ANTIPIRENI_PVH => __('Антипірени для ПВХ матеріалів, ЛФМ, поліуретанів'),
            self::PROD_POLIEFIRNI_SMOLI => __('Поліефірні смоли для полімербетонів, склопластиків'),
            self::PROD_TVERDI_PPY_NEFT => __('Тверді піноутворювачі для нафтових і газових свердловин'),
            self::PROD_VIROBI_LIT_PY => __('Вироби з литого поліуретану'),
            self::PROD_PY_01 => __('майбутня продукція 01'),
            self::PROD_PY_02 => __('майбутня продукція 02'),
            self::PROD_PY_03 => __('майбутня продукція 03'),
            self::PROD_PY_04 => __('майбутня продукція 04'),
            self::PROD_PY_05 => __('майбутня продукція 05'),

        };
    }
    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }

}

