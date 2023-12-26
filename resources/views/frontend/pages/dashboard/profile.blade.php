@extends('frontend.layouts.main')

@section('content')

<main class="profile">
    <div class="container">
        <!-- Search bar -->
        <div class="profile-container">
            <div class="search-bar d-none d-md-flex">
                <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                <button class="search-bar__submit">
                    <img src="site/assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                </button>
            </div>
        </div>

        <!-- Profile content -->
        <div class="profile-container">
            <div class="row gy-md-3">
             @include('frontend.pages.dashboard.sidebar')
                <div class="col-9 col-xl-8 col-lg-12">
                    <div class="cart-info">
                        <div class="row gy-3">
                            <div class="col-12">
                                <h2 class="cart-info__heading">
                                    Cài đặt tài khoản
                                </h2>

                                <form action="{{route('home.profile.post')}}" method="POST" class="form form-card">
                                    @csrf
                                    <!-- Form row 1 -->
                                    <div class="form__row">
                                        <div class="form__group">
                                            <label for="first-name" class="form__label form-card__label">
                                                First Name
                                            </label>
                                            <div class="form__text-input">
                                                <input
                                                    type="text"
                                                    name="first_name"
                                                    value="{{$user->first_name}}"
                                                    id="first-name"
                                                    placeholder="First name"
                                                    class="form__input"
                                                    required
                                                    autofocus
                                                />
                                                <img
                                                    src="site/assets/icons/form-error.svg"
                                                    alt=""
                                                    class="form__input-icon-error"
                                                />
                                            </div>
                                            <p class="form__error">Please enter your first name</p>
                                        </div>
                                        <div class="form__group">
                                            <label for="last-name" class="form__label form-card__label">
                                                Last Name
                                            </label>
                                            <div class="form__text-input">
                                                <input
                                                    type="text"
                                                    name="last_name"
                                                    value="{{$user->last_name}}"
                                                    id="last-name"
                                                    placeholder="Last name"
                                                    class="form__input"
                                                    required
                                                />
                                                <img
                                                    src="site/assets/icons/form-error.svg"
                                                    alt=""
                                                    class="form__input-icon-error"
                                                />
                                            </div>
                                       
                                        </div>
                                    </div>

                                    <!-- Form row 2 -->
                                    <div class="form__row">
                                        <div class="form__group">
                                            <label for="card-number" class="form__label form-card__label">
                                                Phone Number
                                            </label>
                                            <div class="form__text-input">
                                                <input
                                                    type="number"
                                                    name="phone"
                                                    value="{{old('phone',$user->phone)}}"
                                                    placeholder="Phone Number"
                                                    class="form__input"
                                                />
                                            </div>
                                            @error('phone')
                                            <span class="form__error fr-error d-block mt-2"><i class="fas fa-exclamation-circle"></i>{{$errors->first('phone')}}</span>
                                            @enderror
                                        </div>
                                        <div class="form__group">
                                            <label for="expiration-date" class="form__label form-card__label">
                                                Email address
                                            </label>
                                            <div class="form__text-input">
                                                <input
                                                    type="text"
                                                    name="email"
                                                    value="{{old('email',$user->email)}}"
                                                    id="expiration-date"
                                                    placeholder="Email address"
                                                    class="form__input"
                                                    required
                                                />
                                       
                                            </div>
                                            @error('email')
                                            <span class="form__error fr-error d-block mt-2"><i class="fas fa-exclamation-circle"></i>{{$errors->first('email')}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-card__bottom">
                                        <button class="btn btn--primary btn--rounded">Save</button>
                                    </div>
                                </form>

                                @if (@$user->confirm == 1)
                                    <form action="{{route('home.profile.password.post')}}" method="POST" class="form form-card">
                                        @csrf

                                        <div class="form__group">
                                            <label for="set-default-card" class="form__label form-card__label">
                                                Đổi mật khẩu
                                            </label>
                                            <div class="form__text-input mb-5">
                                                <input
                                                    type="password"
                                                    name="password"
                                                    id="phone-number"
                                                    placeholder="Password"
                                                    class="form__input"
                                                />
                                            </div>
                                            @error('password')
                                            <span class="form__error fr-error d-block mt-2"><i class="fas fa-exclamation-circle"></i>{{$errors->first('password')}}</span>
                                            @enderror
                                        </div>

                                        <div class="form__group">
                                            <div class="form__text-input mb-5">
                                                <input
                                                    type="password"
                                                    name="repassword"
                                                    id="phone-number"
                                                    placeholder="Confirm password"
                                                    class="form__input"
                                                />
                                            </div>
                                            @error('repassword')
                                            <span class="form__error fr-error d-block mt-2"><i class="fas fa-exclamation-circle"></i>{{$errors->first('repassword')}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-card__bottom">
                                            <button class="btn btn--primary btn--rounded">Save</button>
                                        </div>
                                    </form>
                                @else
                                    <form action="{{route('home.sendMail.password')}}" class="form form-card" method="POST">
                                        @csrf
                                        <div class="form__group">
                                            <label for="set-default-card" class="form__label form-card__label">
                                                Đổi mật khẩu
                                            </label>
                                        </div>
                                        <div class="form-card__bottom">
                                            <button class="btn btn--primary btn--rounded">Change Password</button>
                                        </div>
                                    </form>
                                @endif
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@stop();

