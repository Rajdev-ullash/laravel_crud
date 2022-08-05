<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Show</title>
</head>
<body>
    <div class="container mt-5">
        <h5>All Person</h5>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Date of Birth</th>
                    <th>Salary</th>
                    <th>Gender</th>
                    <th>Active</th>
                    <th>Hobby</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($persons as $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->city}}</td>
                    <td>{{$p->birth_date}}</td>
                    <td>{{$p->salary}}</td>
                    <td>{{$p->gender}}</td>
                    <td>{{$p->active_status == 1 ? 'Yes' :'No'}}</td>
                    <td>
                        @php
                            $hobby = json_decode($p->hobby);
                        @endphp
                        
                        @foreach($hobby as $h)
                            <span class="badge badge-primary">{{$h}}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ url('edit-person/'.$p->id)}}" class="btn btn-primary">Edit</a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$p->id}}">
                            Delete
                        </a>
                        <!-- The Modal -->
                        <div class="modal" id="myModal{{$p->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Confirmation</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                Are you sure you want to delete <b>{{$p->name}}</b>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <a href="{{url('delete-person/'.$p->id)}}" class="btn btn-success">Yes</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>