<x-layout>
    <x-slot:heading>
        Customers Page
    </x-slot:heading>
    This is the Customers page

    <div class="space-y-4">
        @foreach($customers as $customers)
            
                <a href="/customers/{{ $customers['id'] }}" class="hover:underline block px-4 py-6 border border-gray-200">
                    <div>
                        <span class="font-bold text-blue-500 "> {{ $customers->name }} </span> 

                    </div>
                    <div>
                      <span class="font-bold text-blue-500 "> {{ $customers->phone }} </span> 
                    </div>
                    <div>
                      <span class="font-bold text-blue-500 "> {{ $customers->email }} </span> 
                    </div>
                    <div>
                      <span class="font-bold text-blue-500 "> {{ $customers->birthdate }} </span> 
                    </div>
                </a>
        @endforeach
    </div>
    <div>
    </div>
</x-layout>