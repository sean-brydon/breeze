<x-guest-layout>
    <x-guestnav />

    <section class="text-gray-400 bg-gray-900 body-font h-screen">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach ($products as $product)
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="{{ $product->name }}" class="object-cover object-center w-full h-full block"
                                src="{{ $product->photo }}">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $product->category }}
                            </h3>
                            <h2 class="text-white title-font text-lg font-medium">{{ $product->name }}</h2>
                            <div class="flex">
                                <p class="mt-1">£{{ $product->price }}</p>
                                <a class="mt-1 text-purple-400 inline-flex items-center ml-auto hover:border-purple-400 hover:border-2 rounded-md mr-4"
                                    href="{{ url('cart/addToCart/' . $product->id) }}">Add To Cart

                                </a>
                                <a href=" {{ url('product/' . $product->id) }}"
                                    class="flex text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
