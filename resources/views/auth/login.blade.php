<x-layout>
    <x-slot:heading>
        Login 
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
 
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-filed>
                        <x-form-label for="id_number">ID Number</x-form-label>

                        <x-form-input name="id_number" id="id_number"  :value="old('id_number')" required />

                        <x-form-error name="id_number" />
                    </x-form-filed>
                    
                    <x-form-filed>
                        <x-form-label for="password">Password</x-form-label>

                        <x-form-input name="password" id="password" type="password" required />

                        <x-form-error name="password" />
                    </x-form-filed>

                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-4">
            <div>
                <a href='/' class="px-4 text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            </div>
            <div>
              <x-form-button>Login</x-form-button>
            </div>
        </div>
    </form>

</x-layout>