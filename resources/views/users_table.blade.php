<x-app-layout>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <button  type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="/add-user">Add Admin User</a></button>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Admin Users table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $id => $users)
                            <tr>
                                <td  class="align-middle">
                                    {{ $users->name }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{ $users->email }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{ $users->created_at }}
                                </td>

                                <td class="align-middle text-center text-sm">
                                    <a class="btn btn-link text-dark px-3 mb-0"  href="{{ route('edit.user',$users->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </td>
                                <td class="align-middle text-center text-sm">
                                <a onclick="return confirm('Are you sure you want to delete this User?');" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ route('delete.user',$users->id) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                            </td>
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
