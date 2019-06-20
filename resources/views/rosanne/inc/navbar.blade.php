<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-primary border-bottom box-shadow">
  <h4 class="my-0 mr-md-auto font-weight-normal text-dark"><a class="p-2 text-dark home title" href="/">{{config('app.name')}}</a></h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark title" href="/students/create">REGISTER NEW STUDENTS</a>
      <a class="p-2 text-dark title" href="/fees/create">RECORD FEE PAYMENTS</a>
     
    </nav>
     {{ Form::open(['action'=>'StudentsController@search','method'=>'POST','class'=>'form-inline mt-2 mt-md-0']) }}
                <input name="student_id" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            {{ Form::close() }}
  </div>