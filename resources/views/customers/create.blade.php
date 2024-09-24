<x-layout>
    <x-slot:heading>
        Create a New customer
    </x-slot:heading>
    <form method="POST" action="/customers">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
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
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>