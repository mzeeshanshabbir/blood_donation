<x-app-layout>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-outline-primary btn-sm mb-0">Add Admin User</button>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Admin Users table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
{{--                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>--}}
{{--                                <th class="text-secondary opacity-7"></th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $id => $users)
                            <tr>
                                <td class="align-middle">
                                    {{ $users->id }}
                                </td>

                                <td  class="align-middle">
                                    {{ $users->name }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{ $users->email }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{ $users->created_at }}
                                </td>

{{--                                <td  class="align-middle text-center text-sm">--}}
{{--                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">--}}
{{--                                        Edit--}}
{{--                                    </a>--}}
{{--                                </td>--}}
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
