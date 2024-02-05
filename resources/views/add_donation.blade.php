<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container py-4">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Add Donation</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <form method="POST" action="{{ route('add.donation') }}" class="p-3">
                                    @csrf
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3"> Donor Id :</label>
                                        <input value="{{ old('donor_id') }}" type="text" class="form-control border-l-4" name="donor_id"  required="true">
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3"> Donation Date :</label>
                                        <input value="{{old('donation_date')}}" type="date" class="form-control" name="donation_date"  required="true" >
                                    </div>


                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Blood Type Id :</label>
                                        <input value="{{old('blood_type')}}" type="text" class="form-control" name="blood_type"  required="true">
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3 ">Quanitity ML :</label>
                                        <input value="{{old('quantity')}}" type="number"  class="form-control border-l-4" name="quantity"  required="true">
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Status:</label>
                                        <select class="form-control" name="status" >
                                            <option value="Succesfull">Succesfull</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Rejected">Rejected</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
</x-app-layout>
