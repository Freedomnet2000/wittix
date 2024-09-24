<x-layout>
    <x-slot:heading>
      {{$customer['name']}}
    </x-slot:heading>

    <div>
        <h2>Name: {{ $customer->name }}</h2>
        <h2>Phone: {{ $customer['phone']}}</h2>
        <h2>Email: {{ $customer['email']}}</h2>
        <h2>Birthdate: {{ $customer['birthdate']}}</h2>
    </div>
    <!-- <div>
      TODO
            <x-button href="/customers/{{ $customer->id }}/edit">Edit</x-button>
        </div> -->
</x-layout>