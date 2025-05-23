<x-layout>
    <h1>Grocery item details</h1>
    <h2 class="text-3xl bg-blue-500 p-3 rounded-xl mt-4">{{$item['name']}}</h2>
    <h2 class="text-3xl bg-blue-500 p-3 rounded-xl mt-4">{{$item['price']}}</h2>
    <a class="bg-orange-500 p-4 m-4 rounded" href="/grocery">Go back</a>
</x-layout>