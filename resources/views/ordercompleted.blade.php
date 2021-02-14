<x-guest-layout>
    <x-guestnav />

    <div class="h-screen bg-gray-900 ">
        <div class="py-12">
            <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg md:max-w-5xl">
                <div class="md:flex ">
                    <div class="w-full p-4 px-5 py-5">
                        <h1 class="text-xl font-black ">Order Completed</h1>
                        <div class="mt-6 pt-6">
                            <h2>Thank you for your order! </h2>
                            <h2>Your Refrence ID is: <span class="text-indigo-500">{{ $order->id }}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
