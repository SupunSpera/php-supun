<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales Representatives') }}
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
                                <form action="{{ route('sales_reps.store') }}" method="post">
                                    @csrf
                                    <div class="form-group ">
                                        <label for="name">Name </label><sup class="text-danger">*</sup>
                                        <input id="name" class="form-control  @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter Sales Rep Name">
                                        @error('name') <div class="invalid-feedback">{{ ($message )}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="email">Email</label><sup class="text-danger">*</sup>
                                        <input id="email" class="form-control @error('name') is-invalid @enderror" type="email" name="email" placeholder="Enter Sales Rep Email">
                                        @error('email') <div class="invalid-feedback">{{ ($message )}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="mobile">Telephone</label>
                                        <input id="mobile" class="form-control" type="text" name="mobile" placeholder="Enter Sales Rep Mobile">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="currentRoute">Current Route</label>
                                        <input id="currentRoute" class="form-control" type="text" name="current_route" placeholder="Enter Current Route">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="joinedDate">Joined Date</label>
                                        <input id="joinedDate" class="form-control" type="date" name="joined_date" placeholder="Select Joined Dtae">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="comment">Comment</label>
                                        <textarea class="form-control" name="manager_comment" id="" cols="30" rows="3"></textarea>
                                    </div>
                                    <div class="form-group mt-3 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
