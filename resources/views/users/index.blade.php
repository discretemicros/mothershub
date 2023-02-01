@extends('layouts.app')
@section('content')
<!--<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif-->
<div class="card-content">

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Users
            </h1>
        </div>
    </section>
    <div class="card has-table">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                    @endforeach
                    @endif
                </td>
                <td>
                    <a class="button small green" href="{{ route('users.show',$user->id) }}" type="button">
                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </a>
                    <a class="button small blue" href="{{ route('users.edit',$user->id) }} type="button">
                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </a>
                    <a class="button small red" type="button">
                        <!--<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>-->
                        <!--<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>-->
                         <span class="icon">
                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id]]) !!}
                        {!! Form::submit('Delete') !!}
                        {!! Form::close() !!}
                       <i class="mdi mdi-trash-can"></i></span>

                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

{!! $data->render() !!}
<!--    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div>
            <x-table.users :$data/>
        </div>
        <div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>-->

@endsection

