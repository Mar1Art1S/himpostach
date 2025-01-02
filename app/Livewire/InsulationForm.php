<?php

namespace App\Livewire;

use Livewire\Component;

class InsulationForm extends Component
{
  public $regions = [];
  public $insulatedObjectOptions = [];
  public $insulateData = [];
  public $materials = [];

  public function updateRegions()
  {
    $this->regions = [
      ['id' => 1, 'name' => __('calc.region_kyiv'), 'temperature' => -3.2, 'days' => 190],
      ['id' => 2, 'name' => __('calc.region_vinnytsia'), 'temperature' => -3.4, 'days' => 195],
      ['id' => 3, 'name' => __('calc.region_volynska'), 'temperature' => -2.8, 'days' => 185],
      ['id' => 4, 'name' => __('calc.region_dnipropetrovska'), 'temperature' => -4.8, 'days' => 210],
      ['id' => 5, 'name' => __('calc.region_donetsk'), 'temperature' => -5.0, 'days' => 215],
      ['id' => 6, 'name' => __('calc.region_zhytomyrska'), 'temperature' => -3.9, 'days' => 202],
      ['id' => 7, 'name' => __('calc.region_transcarpathian'), 'temperature' => -2.6, 'days' => 185],
      ['id' => 8, 'name' => __('calc.region_zaporizhzhya'), 'temperature' => -4.5, 'days' => 208],
      ['id' => 9, 'name' => __('calc.region_ivanofrankivsk'), 'temperature' => -3.8, 'days' => 198],
      ['id' => 10, 'name' => __('calc.region_kirovohradska'), 'temperature' => -4.9, 'days' => 209],
      ['id' => 11, 'name' => __('calc.region_krim'), 'temperature' => -1.5, 'days' => 170],
      ['id' => 12, 'name' => __('calc.region_luhansk'), 'temperature' => -5.3, 'days' => 213],
      ['id' => 13, 'name' => __('calc.region_lviv'), 'temperature' => -3.6, 'days' => 200],
      ['id' => 14, 'name' => __('calc.region_mykolaivska'), 'temperature' => -2.2, 'days' => 180],
      ['id' => 15, 'name' => __('calc.region_odesa'), 'temperature' => -1.8, 'days' => 178],
      ['id' => 16, 'name' => __('calc.region_poltava'), 'temperature' => -4.3, 'days' => 205],
      ['id' => 17, 'name' => __('calc.region_rivne'), 'temperature' => -3.5, 'days' => 197],
      ['id' => 18, 'name' => __('calc.region_sumy'), 'temperature' => -4.4, 'days' => 204],
      ['id' => 19, 'name' => __('calc.region_ternopilska'), 'temperature' => -3.0, 'days' => 192],
      ['id' => 20, 'name' => __('calc.region_kharkivska'), 'temperature' => -4.0, 'days' => 205],
      ['id' => 21, 'name' => __('calc.region_kherson'), 'temperature' => -1.7, 'days' => 182],
      ['id' => 22, 'name' => __('calc.region_khmelnytska'), 'temperature' => -3.1, 'days' => 194],
      ['id' => 23, 'name' => __('calc.region_cherkassy'), 'temperature' => -5.2, 'days' => 210],
      ['id' => 24, 'name' => __('calc.region_chernivetska'), 'temperature' => -3.7, 'days' => 198],
      ['id' => 25, 'name' => __('calc.region_chernihivska'), 'temperature' => -4.1, 'days' => 206],
    ];
  }

  public function updateinsulatedObjectOptions()
  {
    $this->insulatedObjectOptions = [
      1 => __('calc.op_hotel'),
      2 => __('calc.op_vologim'),
      3 => __('calc.op_dry'),
      4 => __('calc.op_hangars'),
      5 => __('calc.op_frame'),
    ];
  }

  public function updateinsulateData()
  {
    $this->insulateData = [
      1 => [
        [
          'name' => __('calc.data_siding'),
          'values' => [
            'actual_foam_density' => 45,
            'calc_e11' => 0.024,
            'calc_e7_param_1' => 0.00035,
            'calc_e7_param_2' => 1.4
          ]
        ],
      [
        'name' => __('calc.data_facing_bricks'),
        'values' => [
          'actual_foam_density' => 45,
          'calc_e11' => 0.024,
          'calc_e7_param_1' => 0.00035,
          'calc_e7_param_2' => 1.4
        ]
      ],
      [
        'name' => __('calc.data_dach_flat_ekspluatovanii'),
        'values' => [
          'actual_foam_density' => 70,
          'calc_e11' => 0.028,
          'calc_e7_param_1' => 0.0005,
          'calc_e7_param_2' => 2.2
        ]
      ],
      [
        'name' => __('calc.data_dach_flat_unexploited'),
        'values' => [
          'actual_foam_density' => 55,
          'calc_e11' => 0.025,
          'calc_e7_param_1' => 0.0005,
          'calc_e7_param_2' => 2.2
        ]
      ],
      [
        'name' => __('calc.data_dach_rolling_cold'),
        'values' => [
          'actual_foam_density' => 45,
          'calc_e11' => 0.024,
          'calc_e7_param_1' => 0.00045,
          'calc_e7_param_2' => 1.9
        ]
      ],
      [
        'name' => __('calc.data_dach_skatny_warmly'),
        'values' => [
          'actual_foam_density' => 45,
          'calc_e11' => 0.024,
          'calc_e7_param_1' => 0.0005,
          'calc_e7_param_2' => 2.2
        ]
      ],
      [
        'name' => __('calc.data_foundation'), 'values' => [
        'actual_foam_density' => 50, 'calc_e11' => 0.028, 'calc_e7_param_1' => 0.00035, 'calc_e7_param_2' => 1.4
      ]
      ],
    ],
      2 => [
    [
      'name' => __('calc.data_siding'), 'values' => [
      'actual_foam_density' => 55, 'calc_e11' => 0.024, 'calc_e7_param_1' => 0.00035, 'calc_e7_param_2' => 1.4
    ]
    ],
    [
      'name' => __('calc.data_facing_bricks'), 'values' => [
      'actual_foam_density' => 45, 'calc_e11' => 0.025, 'calc_e7_param_1' => 0.00035, 'calc_e7_param_2' => 1.4
    ]
    ],
    [
      'name' => __('calc.data_dach_flat_ekspluatovanii'), 'values' => [
      'actual_foam_density' => 70, 'calc_e11' => 0.028, 'calc_e7_param_1' => 0.0005, 'calc_e7_param_2' => 2.2
    ]
    ],
    [
      'name' => __('calc.data_dach_flat_unexploited'), 'values' => [
      'actual_foam_density' => 55, 'calc_e11' => 0.025, 'calc_e7_param_1' => 0.0005, 'calc_e7_param_2' => 2.2
    ]
    ],
    [
      'name' => __('calc.data_dach_rolling_cold'), 'values' => [
      'actual_foam_density' => 55, 'calc_e11' => 0.025, 'calc_e7_param_1' => 0.00045, 'calc_e7_param_2' => 1.9
    ]
    ],
    [
      'name' => __('calc.data_dach_skatny_warmly'), 'values' => [
      'actual_foam_density' => 55, 'calc_e11' => 0.025, 'calc_e7_param_1' => 0.0005, 'calc_e7_param_2' => 2.2
    ]
    ],
    [
      'name' => __('calc.data_foundation'), 'values' => [
      'actual_foam_density' => 50, 'calc_e11' => 0.028, 'calc_e7_param_1' => 0.00035, 'calc_e7_param_2' => 1.4
    ]
    ],
  ],
      3 => [
    [
      'name' => __('calc.data_siding'), 'values' => [
      'actual_foam_density' => 45, 'calc_e11' => 0.024, 'calc_e7_param_1' => 0.00035, 'calc_e7_param_2' => 1.4
    ]
    ],
    [
      'name' => __('calc.data_facing_bricks'), 'values' => [
      'actual_foam_density' => 45, 'calc_e11' => 0.024, 'calc_e7_param_1' => 0.00035, 'calc_e7_param_2' => 1.4
    ]
    ],
    [
      'name' => __('calc.data_dach_flat_ekspluatovanii'), 'values' => [
      'actual_foam_density' => 70, 'calc_e11' => 0.028, 'calc_e7_param_1' => 0.0005, 'calc_e7_param_2' => 2.2
    ]
    ],
    [
      'name' => __('calc.data_dach_flat_unexploited'), 'values' => [
      'actual_foam_density' => 55, 'calc_e11' => 0.025, 'calc_e7_param_1' => 0.0005, 'calc_e7_param_2' => 2.2
    ]
    ],
    [
      'name' => __('calc.data_dach_rolling_cold'), 'values' => [
      'actual_foam_density' => 45, 'calc_e11' => 0.024, 'calc_e7_param_1' => 0.00045, 'calc_e7_param_2' => 1.9
    ]
    ],
    [
      'name' => __('calc.data_dach_skatny_warmly'), 'values' => [
      'actual_foam_density' => 45, 'calc_e11' => 0.024, 'calc_e7_param_1' => 0.0005, 'calc_e7_param_2' => 2.2
    ]
    ],
    [
      'name' => __('calc.data_foundation'), 'values' => [
      'actual_foam_density' => 50, 'calc_e11' => 0.028, 'calc_e7_param_1' => 0.00035, 'calc_e7_param_2' => 1.4
    ]
    ],
  ],
      4 => [
    [
      'name' => __('calc.data_wall'), 'values' => [
      'actual_foam_density' => 45, 'calc_e11' => 0.024, 'calc_e7_param_1' => 0.00035, 'calc_e7_param_2' => 1.4
    ]
    ],
    [
      'name' => __('calc.data_dach'), 'values' => [
      'actual_foam_density' => 45, 'calc_e11' => 0.024, 'calc_e7_param_1' => 0.0005, 'calc_e7_param_2' => 2.2
    ]
    ],
  ],
      5 => [
    [
      'name' => __('calc.data_facing_bricks'), 'values' => [
      'actual_foam_density' => 45, 'calc_e11' => 0.024, 'calc_e7_param_1' => 0.00035, 'calc_e7_param_2' => 1.4
    ]
    ],
    [
      'name' => __('calc.data_siding'), 'values' => [
      'actual_foam_density' => 45, 'calc_e11' => 0.024, 'calc_e7_param_1' => 0.00035, 'calc_e7_param_2' => 1.4
    ]
    ],
    [
      'name' => __('calc.data_dach_rolling_cold'), 'values' => [
      'actual_foam_density' => 45, 'calc_e11' => 0.024, 'calc_e7_param_1' => 0.00045, 'calc_e7_param_2' => 1.9
    ]
    ],
    ['name' => __('calc.data_dach_skatny_warmly'), 'values' => ['actual_foam_density' => 45, 'calc_e11' => 0.024]],
    [
      'name' => __('calc.data_floor'), 'values' => [
      'actual_foam_density' => 55, 'calc_e11' => 0.025, 'calc_e7_param_1' => 0.0005, 'calc_e7_param_2' => 2.2
    ]
    ],
  ],
    ];
  }

  public function updateMaterial()
  {
    $this->materials = [
      ['name' => __('calc.mat_clay_1800'), 'conductivity' => 0.8],
      ['name' => __('calc.mat_clay_1600'), 'conductivity' => 0.67],
      ['name' => __('calc.mat_clay_1400'), 'conductivity' => 0.56],
      ['name' => __('calc.mat_clay_1200'), 'conductivity' => 0.44],
      ['name' => __('calc.mat_clay_1000'), 'conductivity' => 0.33],
      ['name' => __('calc.mat_clay_800'), 'conductivity' => 0.24],
      ['name' => __('calc.mat_clay_600'), 'conductivity' => 0.2],
      ['name' => __('calc.mat_clay_500'), 'conductivity' => 0.17],
      ['name' => __('calc.mat_cement_600'), 'conductivity' => 0.175],
      ['name' => __('calc.mat_cement_500'), 'conductivity' => 0.14],
      ['name' => __('calc.mat_cement_400'), 'conductivity' => 0.12],
      ['name' => __('calc.mat_cement_350'), 'conductivity' => 0.11],
      ['name' => __('calc.mat_cement_300'), 'conductivity' => 0.09],
      ['name' => __('calc.mat_cement_250'), 'conductivity' => 0.085],
      ['name' => __('calc.mat_cement_200'), 'conductivity' => 0.07],
      ['name' => __('calc.mat_cement_150'), 'conductivity' => 0.057],
      ['name' => __('calc.mat_foam_1000'), 'conductivity' => 0.38],
      ['name' => __('calc.mat_foam_800'), 'conductivity' => 0.33],
      ['name' => __('calc.mat_foam_600'), 'conductivity' => 0.22],
      ['name' => __('calc.mat_foam_400'), 'conductivity' => 0.14],
      ['name' => __('calc.mat_clay_strainer'), 'conductivity' => 0.7],
      ['name' => __('calc.mat_silicate_brick'), 'conductivity' => 0.76],
      ['name' => __('calc.mat_ceramic_1400'), 'conductivity' => 0.58],
      ['name' => __('calc.mat_ceramic_1300'), 'conductivity' => 0.52],
      ['name' => __('calc.mat_ceramic_1000'), 'conductivity' => 0.47],
      ['name' => __('calc.mat_smirk_across'), 'conductivity' => 0.14],
      ['name' => __('calc.mat_spruce_along'), 'conductivity' => 0.29],
      ['name' => __('calc.mat_oak_across'), 'conductivity' => 0.18],
      ['name' => __('calc.mat_oak_along'), 'conductivity' => 0.35],
      ['name' => __('calc.mat_glued_plywood'), 'conductivity' => 0.15],
      ['name' => __('calc.mat_reinforced_concrete'), 'conductivity' => 1.92],
      ['name' => __('calc.mat_cement_sand_mortar'), 'conductivity' => 0.76],
      ['name' => __('calc.mat_bitumen_1400'), 'conductivity' => 0.27],
      ['name' => __('calc.mat_bitumen_1200'), 'conductivity' => 0.22],
      ['name' => __('calc.mat_bitumen_1000'), 'conductivity' => 0.17],
      ['name' => __('calc.mat_asphalt_concrete'), 'conductivity' => 1.05],
      ['name' => __('calc.mat_ruberoid'), 'conductivity' => 0.17],
      ['name' => __('calc.mat_polyethylene_foam_26'), 'conductivity' => 0.049],
      ['name' => __('calc.mat_polyethylene_foam_30'), 'conductivity' => 0.05],
      ['name' => __('calc.mat_steel'), 'conductivity' => 58],
      ['name' => __('calc.mat_cast_iron'), 'conductivity' => 50],
      ['name' => __('calc.mat_aluminium'), 'conductivity' => 221],
      ['name' => __('calc.mat_copper'), 'conductivity' => 407],
    ];
  }




  public $selectedInsulatedObject = 1;
  public $selectedRegion = 1;
  public $temperatureInside = 20;
  public $area = 0; // Площа конструкції
  public $layers = []; // Дані про шари
  public $objectOptions = []; // Опції вибраного типу конструкції
  public $result = ''; // Результат розрахунків

  public function mount()
  {

    $this->updateinsulateData();
    $this->updateinsulatedObjectOptions();
    $this->updateMaterial();
    $this->updateRegions();
    $this->updateObjectOptions();
    $this->addLayer();
  }

  public function updatedSelectedInsulatedObject()
  {
    $this->updateObjectOptions();
  }

  public function updateObjectOptions()
  {
    $this->objectOptions = $this->insulateData[$this->selectedInsulatedObject] ?? [];
  }

  public function addLayer()
  {
    $this->layers[] = [
      'material' => $this->materials[0]['conductivity'], // За замовчуванням перший матеріал
      'thickness' => 0.1, // Товщина шару (в метрах)
    ];
  }

  public function removeLayer($index)
  {
    unset($this->layers[$index]);
    $this->layers = array_values($this->layers); // Перенумерація індексів
  }

  public function calculate()
  {
    $region = collect($this->regions)->firstWhere('id', $this->selectedRegion);

    // Перевірка введених даних
    if (!$region || $this->area <= 0) {
      $this->result = __('calc.ca_correct_data');
      return;
    }

    // Розрахунок градусо-днів
    $degreeDays = ($this->temperatureInside - $region['temperature']) * $region['days'];

    // Тепловий опір, необхідний для конструкції
    $requiredThermalResistance = 0.00035 * $degreeDays + 1.4;

    // Розрахунок теплового опору існуючих шарів
    $existingLayersResistance = array_reduce($this->layers, function ($carry, $layer) {
      return $carry + ($layer['thickness'] / $layer['material']);
    }, 0.0);

    // Тепловий опір повітряних шарів
    $airResistance = (1 / 8.7) + (1 / 23);

    // Розрахунок товщини теплоізоляції
    $foamThermalConductivity = 0.024; // Теплопровідність пінополіуретану
    $insulationThickness = ($requiredThermalResistance - $existingLayersResistance - $airResistance) * $foamThermalConductivity;

    if ($insulationThickness < 0) {
      $this->result = __('calc.ca_deficiency_parameters');
      return;
    }

    $insulationThickness = round($insulationThickness, 4); // Округлення до 4 знаків

    // Розрахунок витрати пінополіуретану
    $foamDensity = $this->getFoamDensity();
    $materialConsumption = $foamDensity * $this->area * $insulationThickness * 1.08;

    $materialConsumption = round($materialConsumption, 2); // Округлення до 2 знаків

    // Формування результату
    $this->result = __('calc.ca_insulation_layer', [
      'thickness' => $insulationThickness,
      'consumption' => $materialConsumption,
    ]);
  }

  private function getFoamDensity()
  {
    $object = $this->insulateData[$this->selectedInsulatedObject][0]['values'] ?? null;
    return $object ? $object['actual_foam_density'] : 45; // Значення за замовчуванням
  }

  public function render()
  {
    return view('livewire.insulation-form');
  }
}