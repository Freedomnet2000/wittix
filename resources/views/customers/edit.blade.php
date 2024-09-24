<x-layout>
    <x-slot:heading>
        Edit Customer {{ $Customer->name}}
    </x-slot:heading>
        <form method="POST" action="/customers/{{ $customer->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Updaet a  Customer</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-filed>
                        <x-form-label for="title">Name</x-form-label>

                        <x-form-input name="name" id="name" required />

                        <x-form-error name="name" />
                    </x-form-filed>

                    <x-form-filed>
                        <x-form-label for="phone">Phone</x-form-label>

                        <x-form-input name="phone" id="phone" required />

                        <x-form-error name="phone" />
                    </x-form-filed>

                    <x-form-filed>
                        <x-form-label for="email">Email</x-form-label>

                        <x-form-input name="email" id="email" required />

                        <x-form-error name="email" />
                    </x-form-filed>

                    <x-form-filed>
                        <x-form-label for="birthdate">Birthdate</x-form-label>

                        <x-form-input name="birthdate" id="birthdate" required />

                        <x-form-error name="birthdate" />
                    </x-form-filed>

        </div>

        <div class="mt-6 flex items-center justify-between gap-x-8">
            <div class="flex items-center">
            <button type="submit" form="delete-customer" class="text-sm font-semibold leading-6 text-red-900 ">Delete</button>

            </div>
        <div class="flex items-center gap-x-6">
           <div>
                <a href="/customers/{{ $customer->id }}" class="text-sm font-semibold leading-6 text-gray-900 ">Cancel</button>
            </div>
            <div>
              <button type="submit" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </div>

        </div>
        </form>
        <form method="POST" action="/customers/{{ $customer->id }}" hidden id="delete-customer">
            @csrf
            @method('DELETE')
        </form>

</x-layout>