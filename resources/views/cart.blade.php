<x-guest-layout>
    <x-guestnav />

    <div class="h-screen bg-gray-900 ">
        <div class="py-12">
            <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg md:max-w-5xl">
                <div class="md:flex ">
                    <div class="w-full p-4 px-5 py-5">
                        <h1 class="text-xl font-medium ">Shopping Cart</h1>
                        <?php $total = 0; ?>
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $prod)
                                <?php $total += $prod['price'] * $prod['quantity']; ?>
                                <div class="flex justify-between items-center mt-6 pt-6">
                                    <div class="flex items-center"> <img src="{{ $prod['photo'] }}" width="60"
                                            class="rounded ">
                                        <div class="flex flex-col ml-3"> <span
                                                class="md:text-md font-medium">{{ $prod['name'] }}</span> <span
                                                class="text-xs font-light text-gray-400"></span>
                                        </div>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <div class="pr-8 flex "> <a class="font-semibold"
                                                href="/cart/removeOne/{{ $id }}">-</a> <input type=" text"
                                                class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2"
                                                value="{{ $prod['quantity'] }}"> <a class="font-semibold"
                                                href="/cart/addOne/{{ $id }}">+</a>
                                        </div>
                                        <div class="pr-8 "> <span
                                                class="text-xs font-medium">£{{ $prod['price'] }}</span>
                                        </div>
                                        <div class="pr-8 "> <a class="text-s font-bold text-red-400"
                                                href="/cart/removeProduct/{{ $id }}"> X </a>
                                        </div>
                                        <div> </div>
                                    </div>
                                </div>

                            @endforeach
                            <div class=" flex justify-between items-center mt-6 pt-6 border-t">
                                <div class="flex items-center"><span class="text-md font-medium text-blue-500">Continue
                                        Shopping</span>
                                </div>
                                <div class="flex justify-center items-end"> <span
                                        class="text-sm font-medium text-gray-400 mr-1">Subtotal:</span>
                                    <span class="text-lg font-bold text-gray-800 "> £{{ $total }}</span>
                                    <form method="POST" action="order/place">
                                        @csrf
                                        <input type="hidden" name="total" value="{{ $total }}" />
                                        <button type="submit" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-4 
                                        focus:outline-none hover:bg-indigo-600 rounded text-lg ml-5"
                                            onclick="return confirm('Are you sure?')">Checkout</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="flex justify-between items-center mt-6 pt-6">
                                <div class="flex items-center">
                                    <div class="w-14 h-14 bg-indigo-500 rounded-full mt-2 mb-4"></div>
                                    <div class="flex flex-col ml-3"> <span class="md:text-md font-medium">No
                                            products in cart</span> <span
                                            class="text-xs font-light text-gray-400">#E001</span>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="pr-8 flex "> <span class="font-semibold">-</span> <input type="text"
                                            class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2"
                                            value="1"> <span class="font-semibold">+</span> </div>
                                    <div class="pr-8 "> <span class="text-xs font-medium">£0.00</span>
                                    </div>
                                    <div> </div>
                                </div>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
