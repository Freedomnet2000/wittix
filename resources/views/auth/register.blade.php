<x-layout>
    <x-slot:heading>
        Register 
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
 
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                     <x-form-filed>
                        <x-form-label for="name">ID Number</x-form-label>

                        <x-form-input name="id_number" id="id_number" required />

                        <x-form-error name="id_number" />
                    </x-form-filed> 

                    <x-form-filed>
                        <x-form-label for="name">Name</x-form-label>

                        <x-form-input name="name" id="name" required />

                        <x-form-error name="name" />
                    </x-form-filed>

                    <x-form-filed>
                        <x-form-label for="email">Email</x-form-label>

                        <x-form-input name="email" id="email" type="email" required />

                        <x-form-error name="email" />
                    </x-form-filed>
                    
                    <x-form-filed>
                        <x-form-label for="password">Password</x-form-label>

                        <x-form-input name="password" id="password" type="password" required />

                        <x-form-error name="password" />
                    </x-form-filed>
                    
                    <x-form-filed>
                        <x-form-label for="password_confirmation">Repete Password</x-form-label>

                        <x-form-input name="password_confirmation" id="password_confirmation"  required />

                        <x-form-error name="password_confirmation" />
                    </x-form-filed>


                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-4">
            <div>
                <a href='/' class="px-4 text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            </div>
            <div>
              <x-form-button>Register</x-form-button>
            </div>
        </div>
    </form>

</x-layout>