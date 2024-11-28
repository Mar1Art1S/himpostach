const t={1:[{name:"Стіна з навісним фасадом (сайдинг, керамограніт та ін.)",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}},{name:"Стіна з облицювальною цеглою",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}},{name:"Дах плоский експлуатований",values:{actual_foam_density:70,layer_building_envelope:.028,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}},{name:"Дах плоский неексплуатований",values:{actual_foam_density:55,layer_building_envelope:.025,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}},{name:"Дах скатний холодний",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:45e-5,thermal_resistance_param_2:1.9}},{name:"Дах скатний теплий",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}},{name:"Фундамент",values:{actual_foam_density:50,layer_building_envelope:.028,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}}],2:[{name:"Стіна з навісним фасадом (сайдинг, керамограніт та ін.)",values:{actual_foam_density:55,layer_building_envelope:.024,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}},{name:"Стіна з облицювальною цеглою",values:{actual_foam_density:45,layer_building_envelope:.025,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}},{name:"Дах плоский експлуатований",values:{actual_foam_density:70,layer_building_envelope:.028,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}},{name:"Дах плоский неексплуатований",values:{actual_foam_density:55,layer_building_envelope:.025,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}},{name:"Дах скатний холодний",values:{actual_foam_density:55,layer_building_envelope:.025,thermal_resistance_param_1:45e-5,thermal_resistance_param_2:1.9}},{name:"Дах скатний теплий",values:{actual_foam_density:55,layer_building_envelope:.025,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}},{name:"Фундамент",values:{actual_foam_density:50,layer_building_envelope:.028,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}}],3:[{name:"Стіна з навісним фасадом (сайдинг, керамограніт та ін.)",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}},{name:"Стіна з облицювальною цеглою",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}},{name:"Дах плоский експлуатований",values:{actual_foam_density:70,layer_building_envelope:.028,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}},{name:"Дах плоский неексплуатований",values:{actual_foam_density:55,layer_building_envelope:.025,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}},{name:"Дах скатний холодний",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:45e-5,thermal_resistance_param_2:1.9}},{name:"Дах скатний теплий",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}},{name:"Фундамент",values:{actual_foam_density:50,layer_building_envelope:.028,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}}],4:[{name:"Стіна",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}},{name:"Дах",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}}],5:[{name:"Стіна з облицювальною цеглою",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}},{name:"Стіна з навісним фасадом (сайдинг, керамограніт та ін.)",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:35e-5,thermal_resistance_param_2:1.4}},{name:"Дах скатний холодний",values:{actual_foam_density:45,layer_building_envelope:.024,thermal_resistance_param_1:45e-5,thermal_resistance_param_2:1.9}},{name:"Дах скатний теплий",values:{actual_foam_density:45,layer_building_envelope:.024}},{name:"Підлога",values:{actual_foam_density:55,layer_building_envelope:.025,thermal_resistance_param_1:5e-4,thermal_resistance_param_2:2.2}}]},C=document.querySelector(".btn-add"),j=document.querySelector(".all-layer"),q=document.getElementById("calculate"),m=document.getElementById("region"),w=document.getElementById("temp");let r=1;const e=document.getElementById("insulated_object"),u=document.getElementById("object"),D=document.getElementById("res"),T=document.getElementById("area-app");let p,c,d,v,o,$=8.7,_=23;q.addEventListener("click",function(l){l.preventDefault();let a=0,n=0,i=t[e.value][e.value-1].values.actual_foam_density,h=t[e.value][e.value-1].values.layer_building_envelope,b=t[e.value][e.value-1].values.thermal_resistance_param_1,f=t[e.value][e.value-1].values.thermal_resistance_param_2,g=w.value;const s=m.options[m.selectedIndex];let x=s.dataset.temperature,E=s.dataset.days,k=T.value;const B=document.querySelectorAll(".material"),L=document.querySelectorAll(".thickness");B.forEach((I,S)=>{d=L[S].value,v=I.value,a+=d/v}),(t[e.value][e.value-1].name=="Стіна з навісним фасадом (сайдинг, керамограніт та ін.)"||t[e.value][e.value-1].name=="Дах скатний холодний")&&(_=12),t[e.value][e.value-1].name=="Підлога"&&(_=17),p=(g-x)*E,c=b*p+f,o=(c-a-1/$-1/_)*h,o=o.toFixed(4),n=i*k*o*100*.01*1.08,D.textContent=`Товщина теплоізоляційного шару огороджувальної конструкції: ${o} м
   Витрата матеріалу: ${n}`});function y(){const l=t[e.value]||[];u.innerHTML="",l.forEach(function(a){const n=document.createElement("option");n.value=a,n.textContent=a.name,u.appendChild(n)})}e.addEventListener("change",y);y();function A(l){l.preventDefault(),r++;const a=document.createElement("div");a.classList.add("border-t","border-orange-500"),a.innerHTML=`
            <div class="border-solid mt-4  border-2 px-3 mb-4 border-gray-400  inline-block rounded-full font-medium">
               <span>${r}</span> шар
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
         `,j.appendChild(a),a.querySelector(".btn-del").addEventListener("click",function(i){i.preventDefault(),a.remove(),r--})}C.addEventListener("click",A);
