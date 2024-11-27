<section class="bg-gray-200">
    <div class="p-4 md:p-12 lg:px-16 lg:py-16">
        <div class="w-full mx-auto text-center">
            <h2 class="text-4xl text-gray-900 font-r700 md:text-3xl">
                {{__('subscription.sub_news')}}
            </h2>
        </div>

        <div class="max-w-xl mx-auto mt-4">
            <form action="#" class="sm:flex sm:gap-4 sm:flex-col sm:justify-center ">
                <div class="sm:flex sm:justify-center">
                    <label class="sr-only"> {{__('subscription.sub_email')}}</label>
                    <input type="email" placeholder="Email address"
                        class="w-full p-3 text-gray-300 transition bg-white border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-amber-400" />
                </div>

                <button type="submit"
                    class="flex items-center justify-center w-full gap-2 px-5 py-3 mt-4 text-white transition rounded-md group bg-amber-400 focus:outline-none focus:ring focus:ring-blue-800 sm:justify-center ">
                    <span class="text-sm font-r500 ">{{__('subscription.sub_subscribe')}}</span>

                    <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</section>