<x-app-layout>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container py-4">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Add Admin User</h6>
                        </div>
                    </div>

                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">

                            <form method="POST" action="{{route('add.user')}}" class="p-3">
                                @csrf
                                <div class="input-group input-group-outline mb-3">
                                    <label class="input-group input-group-outline mb-3">Name :</label>
                                    <input value="{{ old('name') }}" type="text" class="form-control border-l-4 @error('name') is-invalid @enderror" name="name"  >
                                    <div class="input-group input-group-outline mb-3">
                                    <span class="text-danger">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                    <label class="input-group input-group-outline mb-3 ">Email :</label>
                                    <input value="{{old('email')}}" type="email"  class="form-control border-l-4 @error('email') is-invalid @enderror" name="email" >
                                    <div class="input-group input-group-outline mb-3">
                                    <span class="text-danger">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                    <label class="input-group input-group-outline mb-3">Password :</label>
                                    <input value="{{old('password')}}" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  >
                                    <div class="input-group input-group-outline mb-3">
                                    <span class="text-danger">
                                        @error('password')
                                        {{ $message }}
                                        @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                    <label class="input-group input-group-outline mb-3">Confirm Password :</label>
                                    <input value="{{old('confirm_password')}}" type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password"  >
                                    <div class="input-group input-group-outline mb-3">
                                    <span class="text-danger">
                                        @error('confirm_password')
                                        {{ $message }}
                                        @enderror
                                        </span>
                                    </div>
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
    </div>
</main>
</x-app-layout>
