@extends('app')
      
    @section('content')
        <div class="col-md-8">
            <h4>Members Table</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Firstname</th>
                    <th>email</th>
                </thead>
                <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td>{{$member->firstname}}</td>
                            <td>{{$member->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection