@php
    $hobby = json_decode($person->hobby);
@endphp
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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>update</h3>
        <form action="{{url('update-person/'.$person->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Name</label>
                <input type="text" value="{{$person->name}}" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email"value="{{$person->email}}" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>City</label>
                <select class="form-control" name="city">
                    <option {{ $person -> city == 'Dhaka' ? 'selected' :''}} value="Dhaka">Dhaka</option>
                    <option {{ $person -> city == 'Chattogram' ? 'selected' :''}} value="Chattogram">Chattogram</option>
                    <option {{ $person -> city == 'Sylhet' ? 'selected' :''}} value="Sylhet">Sylhet</option>
                </select>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" value="{{$person->birth_date}}" class="form-control" name="dob">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="number" value="{{$person->salary}}" class="form-control" name="salary">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <br />
                <div class="form-check form-check-inline">
                    <input class="form-check-input" {{ $person -> gender == 'Male' ? 'checked' :''}} type="radio" name="gender" id="inlineRadio1" value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" {{ $person -> gender == 'Female' ? 'checked' :''}} type="radio" name="gender" id="inlineRadio2" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other">
                    <label class="form-check-label" {{ $person -> gender == 'Other' ? 'checked' :''}} for="inlineRadio3">Other</label>
                </div>
            </div>
            <div class="form-group">
                <label>Active Status</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input {{ $person -> active_status == 1 ? 'checked' :''}} type="checkbox" name="active_status" class="form-check-input" value="1">Is_Active
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Choose Your Hobby</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" {{in_array('Music',$hobby)?'checked' :''}} class="form-check-input" name="hobby[]" value="Music">Music
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" {{in_array('Cricket',$hobby)?'checked' :''}} class="form-check-input" name="hobby[]" value="Cricket">Cricket
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" {{in_array('Football',$hobby)?'checked' :''}} class="form-check-input" name="hobby[]" value="Football" >Football
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>