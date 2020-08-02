@extends('dashboard.layaout.home')
@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('admin.admin')}}</div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('admin.name')}}</th>
                                <th scope="col">{{__('admin.email')}}</th>
                                <th scope="col">{{__('admin.role')}}</th>
                                <th scope="col">{{__('admin.action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
  <!--  you can use pluck()method of Laravel collections to extract selected part of data.-->
 <!--The implode() function returns a string from the elements of an array.-->

                                    <td>{{implode(' , ',$user->roles()->get()->pluck('name')->toArray())}}</td>
                                    <td>
                                        @can('edit.users')
                                        <a href="{{route('admin.users.edit',$user->id)}}">
                                        <button type="submit" class="btn btn-info float-left">{{__('admin.edit')}}</button>
                                        </a>
                                        @endcan
                                        @can('delete.users')
                                        <form  action="{{route('admin.users.destroy',$user)}}" method="POST" class="float-left">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">{{__('admin.delete')}}</button>
                                        </form>
                                         @endcan
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
@endsection
