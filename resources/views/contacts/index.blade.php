@extends('base')

@section('main')
<div class="container">
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3" align="center">Add a contact</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">First Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address"/>
           
              <br>
          <button type="submit" class="btn btn-primary">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection

<h2 class="display-3" align="center">List contact</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">N°</th>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
    </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <th scope="row">1</th>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->address }}</td>
            <td><a href="{{ route('contacts.edit',$contact->id)  }}" type="button" class="btn btn-warning">Edit</a></td>
            <td><a href="{{ route('contacts.delete',$contact->id)  }}" type="button" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

