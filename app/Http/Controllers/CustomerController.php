<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate as FacadesGate;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index', [
            'customers' => Customer::where('user_id', Auth::id()) 
                ->latest()
                ->paginate(10)
        ]); 
     }

    public function create()
    {
        return view('customers.create');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', ['customer' => $customer]);
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'phone' => ['required'],
            'email' => ['required', 'email', 'unique:customers,email'],
            'birthdate' => ['required'],
        ]);

        Customer::create($attributes + ['user_id' => Auth::id()]);
        return redirect('/customers');
    }

    public function edit(Customer $customer)
    {

        return view('customers.edit', ['customer' => $customer]);
    }

    public function update(Customer $customer)
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'phone' => ['required'],
            'email' => ['required', 'email', 'unique:customers,email'],
            'birthdate' => ['required'],
        ]);

        $customer->update($attributes);
        return redirect('/customers/' . $customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('/customer');
    }
}
