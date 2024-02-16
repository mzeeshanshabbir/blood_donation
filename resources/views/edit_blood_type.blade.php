<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container py-4">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Add New Blood Type</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <form method="POST" action="" class="p-3">
                                    @csrf
                                    <br>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Blood Group :</label>
                                        <select class="form-control" name="blood_group" >
                                            <option value="{{ $blood_type->blood_group }}">A Positive </option>
                                            <option value="A Negative">A Negative </option>
                                            <option value="B Positive">B Positive</option>
                                            <option value="B Negative">B Negative</option>
                                            <option value="AB Positive">AB Positive</option>
                                            <option value="AB Negative">AB Negative</option>
                                            <option value="O Positive">O Positive</option>
                                            <option value="O Negative">O Negative</option>
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
        </main></x-app-layout>
