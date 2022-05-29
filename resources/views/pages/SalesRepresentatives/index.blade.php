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
                        <a href="{{ route('sales_reps.create') }}" class="btn btn-primary" type="button">Add New</a>
                    </div>
                    <div class="col-lg-8">
                        <div class="card p-2">
                            <div class="card-body">
                                <h5 class="card-title">Sales Team</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>Current Route</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($salesReps as $rep)

                                        <tr>
                                            <td scope="row">{{ $rep->id }}</td>
                                            <td>{{ $rep->name }}</td>
                                            <td>{{ $rep->email }}</td>
                                            <td>{{ $rep->mobile }}</td>
                                            <td>{{ $rep->current_route }}</td>
                                            <td>
                                                <a href="{{ route('sales_reps.show',$rep->id) }}">  View</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('sales_reps.edit',$rep->id) }}">  Edit</a>
                                                </td>
                                            <td>
                                                <a href="javascript:void(0);"  onclick="decline('{{ route('rep.delete',$rep->id) }}') ">Delete</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="8" class="text-center"> No any Sales Rep</td>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <script>

            function decline(url, title = "Do You Want To Delete This Representative ", btnText = "Yes, Delete") {
                    $.confirm({
                        title: 'Are you sure,',
                        content: title,
                        autoClose: 'cancel|8000',
                        type: 'red',
                        theme: 'material',
                        backgroundDismiss: false,
                        backgroundDismissAnimation: 'glow',
                        buttons: {
                            tryAgain: {
                                text: btnText,
                                action: function () {
                                    window.location.href = url;
                                    confirmButton: "Yes";
                                    cancelButton: "Cancel";
                                }
                            },
                            cancel: function () {

                            },

                        }
                    });
                }

        </script>
    </div>
</x-app-layout>
