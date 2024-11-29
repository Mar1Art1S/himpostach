<div>
    <div class="p-6 bg-white rounded shadow my-4">
        <h3 class="flex justify-center items-center font-r700 text-1.5xl p-2">Калькулятор для розрахунку товщини шару та кількості пінополіуретану при утепленні</h3>
        <form wire:submit.prevent="calculate">
            <div class="w-full flex flex-row mf:flex-col ">
                <!-- Регіони -->
                <div class="mb-4 w-1/3 mx-1 mf:w-full">
                    <label class="block font-bold mb-2">Регіон:</label>
                    <select wire:model="selectedRegion" class="w-full border rounded p-2">
                        @foreach ($regions as $region)
                            <option value="{{ $region['id'] }}">{{ $region['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Тип утеплення -->
                <div class="mb-4 w-1/3 mx-1 mf:w-full">
                    <label class="block font-bold mb-2">Який об'єкт утеплюємо:</label>
                    <select wire:model="selectedInsulatedObject" class="w-full border rounded p-2">
                        @foreach ($insulatedObjectOptions as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Що утеплюємо -->
                <div class="mb-4 w-1/3 mx-1 mf:w-full">
                    <label class="block font-bold mb-2">Що утеплюємо:</label>
                    <select class="w-full border rounded p-2">
                        @foreach ($objectOptions as $option)
                            <option value="{{ $option['name'] }}">{{ $option['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full flex flex-row sf:flex-col">
                <!-- Температура -->
                <div class="mb-4 w-1/2 mx-1 sf:w-full">
                    <label class="block font-bold mb-2">Температура всередині (°C):</label>
                    <input type="number" wire:model="temperatureInside" class="w-full border rounded p-2">
                </div>

                <!-- Площа нанесення -->
                <div class="mb-4 w-1/2 mx-1 sf:w-full">
                    <label class="block font-bold mb-2">Площа нанесення (м²):</label>
                    <input type="number" wire:model="area" class="w-full border rounded p-2">
                </div>
            </div>
            <div class="w-full m-1">
                <div class=" mf:w-1/3">
                    <h3 class="font-bold mb-2">Шари:</h3>
                    @foreach ($layers as $index => $layer)
                        <div class="flex items-center mb-4 w-full">
                            <select wire:model="layers.{{ $index }}.material" class="border rounded p-2 mr-2 mf:max-w-full mf:w-[600px]">
                                @foreach ($materials as $material)
                                    <option value="{{ $material['conductivity'] }}">{{ $material['name'] }}</option>
                                @endforeach
                            </select>
                            <input type="number" step="0.01" wire:model="layers.{{ $index }}.thickness" class="border rounded p-2 mr-2 mf:max-w-full mf:w-[600px]">
                            <button wire:click.prevent="removeLayer({{ $index }})" class="bg-red-500 text-white p-2 rounded font-r900">X</button>
                        </div>
                    @endforeach
                </div>
                <!-- Шари -->


                <button wire:click.prevent="addLayer" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Додати шар</button>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Розрахувати</button>
            </div>

        </form>

        <!-- Результати -->
        @if ($result)
            <div class="mt-4 p-4 bg-blue-100 rounded">
                {!! $result !!}
            </div>
        @endif
    </div>


</div>
