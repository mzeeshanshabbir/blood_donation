<x-app-layout>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="/new_blood_type">Add New Blood Type</a></button>
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Blood Types table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Blood Group</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created At</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $id => $blood)
                                    <tr>
                                        <td class="align-middle">
                                            {{ $blood->id }}
                                        </td>

                                        <td  class="align-middle">
                                            {{ $blood->blood_group }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $blood->created_at}}
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
