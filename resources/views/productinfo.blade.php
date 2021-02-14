<x-guest-layout>
    <x-guestnav />


    <section class="text-gray-200 body-font overflow-hidden h-screen bg-gray-800">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="object-contain object-center rounded" src="{{ $product->photo }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $product->category }}</h2>
                    <h1 class="text-gray-200 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                    <p class="leading-relaxed">{{ $product->description }}</p>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">

                        <span class="title-font font-medium text-2xl text-gray-200">£{{ $product->price }}</span>
                        <a class="mt-1 text-purple-400 inline-flex items-center ml-auto hover:border-purple-400 hover:border-2 rounded-md mr-4"
                            href="{{ url('cart/addToCart/' . $product->id) }}">Add To Cart
                        </a>
                    </div>
                </div>
            </div>
    </section>


</x-guest-layout>
