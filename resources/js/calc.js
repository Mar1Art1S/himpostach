
const insulateData = {
   '1': [
       { name: 'Стіна з навісним фасадом (сайдинг, керамограніт та ін.)',  values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4 } },
       { name: 'Стіна з облицювальною цеглою',  values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4 } },
       { name: 'Дах плоский експлуатований',  values: { actual_foam_density:70, layer_building_envelope: 0.028, thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2 } },
       { name: 'Дах плоский неексплуатований',  values: { actual_foam_density:55, layer_building_envelope: 0.025, thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2 } },
       { name: 'Дах скатний холодний',  values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.00045, thermal_resistance_param_2:1.9 } },
       { name: 'Дах скатний теплий',  values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2 } },
       { name: 'Фундамент',  values: { actual_foam_density:50, layer_building_envelope: 0.028, thermal_resistance_param_1:0.00035, thermal_resistance_param_2: 1.4 }}
   ],
   '2': [                 
       { name: 'Стіна з навісним фасадом (сайдинг, керамограніт та ін.)',  values: { actual_foam_density:55, layer_building_envelope: 0.024, thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4 } },
       { name: 'Стіна з облицювальною цеглою',  values: { actual_foam_density:45, layer_building_envelope: 0.025, thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4 } },
       { name: 'Дах плоский експлуатований',  values: { actual_foam_density:70, layer_building_envelope: 0.028, thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2 } },
       { name: 'Дах плоский неексплуатований',  values: { actual_foam_density:55, layer_building_envelope: 0.025, thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2 } },
       { name: 'Дах скатний холодний',  values: { actual_foam_density:55, layer_building_envelope: 0.025, thermal_resistance_param_1:0.00045, thermal_resistance_param_2:1.9 } },
       { name: 'Дах скатний теплий',  values: { actual_foam_density:55, layer_building_envelope: 0.025, thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2 } },
       { name: 'Фундамент',  values: { actual_foam_density:50, layer_building_envelope: 0.028, thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4 } }
   ],
   '3': [
       { name: 'Стіна з навісним фасадом (сайдинг, керамограніт та ін.)',  values: { actual_foam_density:45, layer_building_envelope: 0.024 , thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4} },
       { name: 'Стіна з облицювальною цеглою',  values: { actual_foam_density:45, layer_building_envelope: 0.024 , thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4} },
       { name: 'Дах плоский експлуатований',  values: { actual_foam_density:70, layer_building_envelope: 0.028, thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2} },
       { name: 'Дах плоский неексплуатований',  values: { actual_foam_density:55, layer_building_envelope: 0.025, thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2} },
       { name: 'Дах скатний холодний',  values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.00045, thermal_resistance_param_2:1.9 } },
       { name: 'Дах скатний теплий',   values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2}},
       { name: 'Фундамент',  values: { actual_foam_density:50, layer_building_envelope: 0.028 , thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4} }
   ],
   '4': [
       { name: 'Стіна',  values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4 }},
       { name: 'Дах',  values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2 }}
   ],
   '5': [
       { name: 'Стіна з облицювальною цеглою',  values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4 }},
       { name: 'Стіна з навісним фасадом (сайдинг, керамограніт та ін.)',  values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.00035, thermal_resistance_param_2:1.4 }},
       { name: 'Дах скатний холодний',  values: { actual_foam_density:45, layer_building_envelope: 0.024, thermal_resistance_param_1:0.00045, thermal_resistance_param_2:1.9 }},
       { name: 'Дах скатний теплий',  values: { actual_foam_density:45, layer_building_envelope: 0.024 }},
       { name: 'Підлога',  values: { actual_foam_density:55, layer_building_envelope: 0.025,thermal_resistance_param_1:0.0005, thermal_resistance_param_2:2.2 }}
   ],
};


 const addButton = document.querySelector('.btn-add');
 const layersContainer = document.querySelector('.all-layer');
 const btnCalculate = document.getElementById('calculate');
 const regionSelect = document.getElementById('region');
 const temper = document.getElementById('temp'); //Температура всередині об'єкта 
 let layerCount = 1;
 const insulatSel = document.getElementById('insulated_object');
 const objSel = document.getElementById('object');
 const result = document.getElementById('res');
 const app_area = document.getElementById('area-app'); //площа нанесення


 let degree_days ;
 let thermal_resistance;
 let layer_thickness; //товщина слоя 
 let thermal_conductivity;// теплопровідність обраного шару
 let layer_account =0; //розрахунок шарів
 let Thickness_of_insulation;

 let transfer_coefficient  = 8.7; //Коефіцієнт тепловіддачі внутрішньої поверхні огороджувальної конструкції
 let external_heat_transfer = 23; //Коефіцієнт тепловіддачі зовнішньої поверхні огороджувальної конструкції

 ///РОЗРАХУНОК
 btnCalculate.addEventListener('click',function(e){
   e.preventDefault();

      let layer_account =0;
      let real_material_consumption=0;

      let actual_foam_density=(insulateData[insulatSel.value][insulatSel.value-1].values.actual_foam_density);
      let layer_building_envelope=(insulateData[insulatSel.value][insulatSel.value-1].values.layer_building_envelope);
      let thermal_resistance_param_1=(insulateData[insulatSel.value][insulatSel.value-1].values.thermal_resistance_param_1);
      let thermal_resistance_param_2=(insulateData[insulatSel.value][insulatSel.value-1].values.thermal_resistance_param_2);

      
      let temperature_inside = temper.value; //Температура всередині об'єкта 

      ////зчитуємо значення з регіонів
      const selectedOption = regionSelect.options[regionSelect.selectedIndex];
      let average_temperature = selectedOption.dataset.temperature;
      let heating_period = selectedOption.dataset.days;
         
      
      let cacl_area_of_application =app_area.value; //полоща нанесення 
      const materials = document.querySelectorAll('.material');//матеріали 
      const thicknesses = document.querySelectorAll('.thickness');//товщина

      //отримання кожного елемента зі Шарів огороджувальної конструкції
      materials.forEach((material, index) => {
         layer_thickness = thicknesses[index].value; 
         thermal_conductivity = material.value;
          //(розразовуємо суму всіх слоїв)
          layer_account  += (layer_thickness / thermal_conductivity);
      });

      if(insulateData[insulatSel.value][insulatSel.value-1].name=='Стіна з навісним фасадом (сайдинг, керамограніт та ін.)'||insulateData[insulatSel.value][insulatSel.value-1].name=='Дах скатний холодний')
         {
            external_heat_transfer = 12;
         }

      if(insulateData[insulatSel.value][insulatSel.value-1].name=='Підлога')
         {
            external_heat_transfer = 17;
         }
      
   degree_days  = (temperature_inside - average_temperature) * heating_period;
   thermal_resistance = thermal_resistance_param_1 * degree_days  + thermal_resistance_param_2;

   Thickness_of_insulation = (thermal_resistance - layer_account  - 1 / transfer_coefficient  - 1 / external_heat_transfer) * layer_building_envelope;
   Thickness_of_insulation = Thickness_of_insulation.toFixed(4); 

   real_material_consumption = actual_foam_density * cacl_area_of_application * Thickness_of_insulation * 100 * 0.01 * 1.08;

   result.textContent=`Товщина теплоізоляційного шару огороджувальної конструкції: ${Thickness_of_insulation} м
   Витрата матеріалу: ${real_material_consumption}`;
})
                                   
//////////////////////////////Зміна селекта відносно іншого
 function updateObj() {
   const obj = insulateData[insulatSel.value] || [];
   objSel.innerHTML = '';

   obj.forEach(function(ob) {
     const option = document.createElement('option');
     option.value = ob;
     option.textContent = ob.name;
     objSel.appendChild(option);
   });
 }
 insulatSel.addEventListener('change', updateObj);
 updateObj();
 /////////////////////////////////////////


/////////////////////////Додавання нового шару
      function createLayer(e) {
         e.preventDefault();
         layerCount++; 

         const newLayer = document.createElement('div');
         newLayer.classList.add('border-t', 'border-orange-500');


         newLayer.innerHTML = `
            <div class="border-solid mt-4  border-2 px-3 mb-4 border-gray-400  inline-block rounded-full font-medium">
               <span>${layerCount}</span> шар
            </div>
            <div class="mb-4">
               <select id="material" class="material block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="0.8">Керамзитобетон на керамзитовому піску щільністю 1800 кг/м3</option>
            <option value="0.67">Керамзитобетон на керамзитовому піску щільністю 1600 кг/м3</option>
            <option value="0.56">Керамзитобетон на керамзитовому піску щільністю 1400 кг/м3</option>
            <option value="0.44">Керамзитобетон на керамзитовому піску щільністю 1200 кг/м3</option>
            <option value="0.33">Керамзитобетон на керамзитовому піску щільністю 1000 кг/м3</option>
            <option value="0.24">Керамзитобетон на керамзитовому піску щільністю 800 кг/м3</option>
            <option value="0.2">Керамзитобетон на керамзитовому піску щільністю 600 кг/м3</option>
            <option value="0.17">Керамзитобетон на керамзитовому піску щільністю 500 кг/м3</option>
            <option value="0.175">Полістиролбетон на портландцементі щільністю 600 кг/м3</option>
            <option value="0.14">Полістиролбетон на портландцементі щільністю 500 кг/м3</option>
            <option value="0.12">Полістиролбетон на портландцементі щільністю 400 кг/м3</option>
            <option value="0.11">Полістиролбетон на портландцементі щільністю 350 кг/м3</option>
            <option value="0.09">Полістиролбетон на портландцементі щільністю 300 кг/м3</option>
            <option value="0.085">Полістиролбетон на портландцементі щільністю 250 кг/м3</option>
            <option value="0.07">Полістиролбетон на портландцементі щільністю 200 кг/м3</option>
            <option value="0.057">Полістиролбетон на портландцементі щільністю 150 кг/м3</option>
            <option value="0.38">Газо- і пінобетон на цементному в'яжучому щільністю 1000 кг/м3</option>
            <option value="0.33">Газо- і пінобетон на цементному в'яжучому щільністю 800 кг/м3</option>
            <option value="0.22">Газо- і пінобетон на цементному в'яжучому щільністю 600 кг/м3</option>
            <option value="0.14">Газо- і пінобетон на цементному в'яжучому щільністю 400 кг/м3</option>
            <option value="0.7">Суцільна глиняна цегла на цементно-піщаному розчині</option>
            <option value="0.76">суцільна силікатна цегла на цементно-піщаному розчині</option>
            <option value="0.58">Пустотна керамічна цегла щільністю 1400 кг/м3</option>
            <option value="0.52">Пустотна керамічна цегла щільністю 1300 кг/м3</option>
            <option value="0.47">Пустотна керамічна цегла щільністю 1000 кг/м3</option>
            <option value="0.14">Сосна та смерека поперек волокон</option>
            <option value="0.29">Сосна та смерека вздовж волокон</option>
            <option value="0.18">Дуб поперек волокон</option>
            <option value="0.35">Дуб уздовж волокон</option>
            <option value="0.15">Фанера клеєна</option>
            <option value="1.92">Залізобетон</option> 
            <option value="0.76">Розчин цементно-піщаний</option>
            <option value="0.27">Бітуми нафтові будівельні та покрівельні щільністю 1400 кг/м3</option>
            <option value="0.22">Бітуми нафтові будівельні та покрівельні щільністю 1200 кг/м3</option>
            <option value="0.17">Бітуми нафтові будівельні та покрівельні щільністю 1000 кг/м3</option>
            <option value="1.05">Асфальтобетон</option>
            <option value="0.17">Руберойд, пергамін, толь</option>
            <option value="0.049">Пенополіетилен щільністю 26 кг/м3</option>
            <option value="0.05">Пінополіетилен щільністю 30 кг/м3</option>
            <option value="58">Сталь</option>
            <option value="50">Чугун</option>
            <option value="221">Алюміній</option>
            <option value="407">Мідь</option>
               </select>
            </div>
               <label class="block text-lg font-bold mb-2" for="thickness">  
                  Товщина, (м):
               </label>
               <input id="thickness" type="number" value="0.1" min="0" max="50" step="0.1" class=" thickness w-full mb-4 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            <div class="flex justify-end">
            <button class="btn-del mb-4 ibg-red-100 text-red-600 px-4 py-1 rounded-md font-semibold text-lg border-2 border-red-500 hover:bg-red-200 transition duration-200">Видалити</button> </div>
         `;
         layersContainer.appendChild(newLayer);

              
      const delButton = newLayer.querySelector('.btn-del');

      delButton.addEventListener('click', function(e) {
         e.preventDefault();
         newLayer.remove(); 
         layerCount--;
      });
      }

      addButton.addEventListener('click', createLayer);
 
    
