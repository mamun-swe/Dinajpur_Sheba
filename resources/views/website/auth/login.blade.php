  
@extends('layouts.website')
@section('content')
  
<div class="auth">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 m-auto">
                <div class="card rounded-0">
                    <div class="card-header rounded-0 border-0 p-4 text-center">
                        
                        <div class="d-flex justify-content-between">
                            <div><a href="{{route('home')}}"><img src="{{asset('images/static/back.png')}}" alt=""></a></div>
                            <div><h5 class="mb-0">লগইন</h5></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="card-body pb-5">
                        @if(Session::has('error'))
                            <p class="text-danger">{{Session::get('error')}}</p>
                        @endif
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <!-- Phone -->
                            <div class="form-group mb-4">
                                <p class="mb-2"><i class="fas fa-phone mr-2"></i>মোবাইল</p>
                                <input type="text" name="phone" class="form-control rounded-0 shadow-none" placeholder="মোবাইল নাম্বার লিখুন">
                            </div>

                            <!-- Password -->
                            <div class="form-group mb-4">
                                <p class="mb-2"><i class="fas fa-key mr-2"></i>পাসওয়ার্ড</p>
                                <input type="password" name="password" class="form-control rounded-0 shadow-none" placeholder="পাসওয়ার্ড লিখুন">
                            </div>

                            <button type="submit" class="btn btn-block rounded-0 shadow text-white">লগইন করুন</button>
                        </form>
                        <div class="text-center links mt-4">
                            <p class="mb-0">একাউন্ট নেই ?<a href="{{route('register')}}"> রেজিস্ট্রেশন করুন</a></p>
                            <p class="mb-0">পাসওয়ার্ড ভুলে গেছেন ?<a href="{{route('reset')}}"> পাসওয়ার্ড পরিবর্তন করুন</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      
@endsection