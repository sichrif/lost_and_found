@extends('layouts.master')


@section('title')

        Dashboard Admin

@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Post id
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        posttype
                      </th>
                      <th>
                        User id
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>                      
                    </thead>
                    <tbody>
                      @foreach ($post as $row)
                          
                     
                      <tr>
                        <td> {{  $row->id	 }}</td>
                        <td>{{  $row->title	 }}</td>
                        <td>{{  $row->description	 }}</td>
                        <td>{{  $row->posttype	 }}</td>
                        <td>{{  $row->user_id	 }}</td>
                        <td>
                          <a href="/post-edit/{{ $row->id }}" class="btn btn-success">Edit</a>
                          </td>
                           <td>
                             <form action="postdelete/{{ $row->id }}" method="post">
                              {{  csrf_field()  }}
                              {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
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

@section('scripts')


@endsection

