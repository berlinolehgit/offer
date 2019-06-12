@extends('layouts.welcome')
@section('content')
    <div class="container">
        <div class="users-tables-group">
            <div class="table-users-row">
                <div class="table-user">
                    @foreach($users as $user)
                    <div class="table-header-blue clearfix">
                        <span class="right">
                             <a href="" class=" action" style="color: white">Редагувати оголошення</a>
                              <a href="" class="action" style="color: white; padding-left: 20px;">Видалити</a>
                        </span>
                    </div>
                    <div class="table-user-body clearfix">
                        <table class="user-details">
                            <tbody>
                            <tr>
                                <td>Ім'я</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Електронний адрес</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Контактний телефон</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@stop