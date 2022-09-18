<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                    <a href="/click">Click</a>
                    @can('isAdmin')
                    <h4>Admin Can access This line</h4>
                    @endcan

                    @can('isEditor')

                    <h4>Editor Can access This line</h4>
                    @endcan

                    @php
                        $products = \App\Models\Product::with('user')->get();
                    @endphp

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full">
            <thead class="border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  SL
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Name
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Admin
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)

                <tr class="border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $product->id }}</td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $product->name }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $product->user->name }}
                  </td>
                  <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
                    @can('view',$product)

                    <a href="{{ route('product',$product->id) }}">View</a>
                    @endcan
                    @can('delete',$product)

                    <button class="p-2 text-white " style="background: red">Delete</button>
                    @endcan
                  </td>
                </tr>
                @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
