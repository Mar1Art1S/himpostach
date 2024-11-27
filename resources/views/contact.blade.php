@extends('layouts.base')
@section('title', __('Хімічна сировина'))
@section('meta_description', __('Хімічна сировина для виробництва поліуретану та пінополіуретану, лакофарбових
матеріалів, клеїв і гідроізоляційних покриттів, що застосовується в будівництві, меблевій та автомобільній
промисловості, забезпечуючи стійкість, ізоляцію та довговічність матеріалів'))
@section('meta_keywords', __('хімічна сировина, поліуретан, пінополіуретан, лакофарбові матеріали, клейові матеріали,
гідроізоляція, поліуретанові матеріали, пінополіуретанові продукти, лакофарбові покриття, клеї та герметики, матеріали
для гідроізоляції'))


@section('og_title', __('Хімічна сировина'))
@section('og_description', __('Хімічна сировина для виробництва поліуретану та пінополіуретану, лакофарбових матеріалів,
клеїв і гідроізоляційних покриттів, що застосовується в будівництві, меблевій та автомобільній промисловості,
забезпечуючи стійкість, ізоляцію та довговічність матеріалів'))
@section('og_image', Vite::asset('resources/img/3_main/BGr.jpg'))
@section('content')
<section class="relative text-gray-600 body-font">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" allowfullscreen="" loading="lazy"
      marginwidth="0" title="map" scrolling="no"
      src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d653.0928705077037!2d33.39678326967825!3d49.09858287631153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDnCsDA1JzU0LjkiTiAzM8KwMjMnNTAuNyJF!5e0!3m2!1suk!2sua!4v1724927683320!5m2!1suk!2sua"
      style="border:0;"></iframe>

  </div>
  <div class="container flex px-5 py-24 mx-auto">
    <div class="relative z-10 flex flex-col w-full p-8 mt-10 bg-white opacity-85 rounded-lg shadow-md lg:w-[760px]">

      <div class="">
        <span class="flex justify-center my-2 text-1.5xl tracking-wide text-center text-gray-500 uppercase">
          {{ __('contact.director_reception') }}
        </span>
        <div class="flex flex-row w-full mt-4 mf:flex-col">

          <div class="flex flex-col w-1/2 gap-2 ml-2 mf:w-full">

            <div>{{__('contact.contact_phone')}}</div>

            <a href="tel:+380504756847"
              class="block text-1.5xl text-gray-900 font-r500 hover:opacity-75 sm:text-2xl xs:text-base">
              {{__('contact.contact_phone_number')}}
            </a>
          </div>
          <div class="flex flex-col w-1/2 gap-2 ml-2 mf:w-full">
            <div>{{__('contact.contact_email')}}</div>
            <div>
              <a href="mailto:director@himpost.com"
                class="block text-1.5xl text-gray-900 font-r500 hover:opacity-75 sm:text-2xl xs:text-base">
                {{__('contact.contact_email_adressa')}}
              </a>
            </div>
          </div>
        </div>
        <div class="w-full h-[2px] bg-blue-600"></div>
        <div class="flex flex-row justify-start order-1 my-8 mf:flex-col">

          <div class=" text-gray-900 font-r400 text-start text-1.5xl  xs:text-xl">
            {{ __('contact.contact_work_schedule')}}
          </div>
          <div class="ml-4 text-lg">
            <span class="font-r500 text-1.5xl xs:text-base">
              {{__('contact.contact_mon_fri') }}
            </span>
            {{__('contact.contact_working_hour') }}
            <span class="font-r500 text-1.5xl xs:text-base">
              {{ __('contact.contact_original_dey') }}
            </span>
            {{__('contact.contact_original_text') }}
          </div>
        </div>
        <div class="w-full h-[2px] bg-blue-600"></div>
        <div class="flex flex-col gap-1">
          <div class="order-1 mt-2">
            <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl xs:text-lg">
              {{ __('contact.contact_legal_address') }}
            </div>
            <div class="text-lg xs:text-sm">{{ __('contact.contact_legal_address_one') }} </div>
          </div>
          <div class="order-1 mt-2">
            <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl xs:text-lg">{{ __('contact.contact_actual_address') }}</div>
            <div class="text-lg xs:text-sm">{{ __('contact.contact_actual_address_one') }} </div>
          </div>
          <div class="order-1 mt-2">
            <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl xs:text-lg">{{ __('contact.contact_сomposition') }}</div>
            <div class="text-lg xs:text-sm">{{ __('contact.contact_сomposition_one')}}</div>
            <div class="flex flex-row justify-start">
              <div class="text-lg font-r500 xs:text-lg">{{ __('contact.contact_mobile') }}</div>
              <div class="ml-2 text-lg xs:text-xs">{{ __('contact.contact_mobile_one') }} </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
