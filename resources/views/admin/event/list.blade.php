@extends('admin.layouts.admin')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Event
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if (session('annoucement'))
                        <div class="alert alert-success">
                            {{session('annoucement')}}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Event Name</th>
                                <th>content</th>
                                <th>Picture</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event as $ev)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$ev->id}}</td>
                                    <td>{{$ev->name}}</td>
                                    <td>{{$ev->body}}</td>
                                    <td> <img style="max-width: 200px;max-height: 200px;" src="{{ asset('home/event/image/' . $ev->image) }}"> </td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="edit/{{$ev->id}}">Edit</a></td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="deleteEvent/{{$ev->id}}" onclick="return confirm('Are you sure you want to delete?');"> Delete</a></td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection