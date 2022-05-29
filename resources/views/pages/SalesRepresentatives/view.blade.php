<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales Representative') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-end m-3">
                        <a href="{{ route('sales_reps.index') }}" class="btn btn-primary" type="button">Back to list</a>
                    </div>
                    <div class="col-lg-8">
                        <div class="card p-2">
                            <div class="card-body">
                                <h5 class="card-title">Sales Rep : {{ ucwords($rep->name) }}</h5>
                                <div class="row ">
                                    <div class="col-lg-8">
                                        Email  :  <span class="ml-2"> {{ $rep->email?$rep->email:'Not Updated' }}</span>
                                    </div>
                                    <div class="col-lg-8">
                                        Mobile  : <span> {{ $rep->mobile?$rep->mobile:'Not Updated' }}</span>
                                    </div>
                                    <div class="col-lg-8">
                                        Address  : <span> {!! $rep->address?$rep->address:'Not Updated' !!}</span>
                                    </div>
                                    <div class="col-lg-8">
                                        Current Route  : <span> {{ $rep->current_route?$rep->current_route:'Not Updated' }}</span>
                                    </div>
                                    <div class="col-lg-8">
                                        Joined Date  : <span> {{ $rep->joined_date?$rep->joined_date:'Not Updated' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <a href="{{ route('sales_reps.edit',$rep->id) }}" class="btn btn-primary" type="button">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
