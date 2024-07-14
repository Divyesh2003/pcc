@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Aposittle Show</h5>
                      <table class="table">
                        <tr>
                            <th>Id</th>
                            <td>{{ $apositlle->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $apositlle->name }}</td>
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td>{{ $apositlle->slug }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{!! $apositlle->description !!}</td>
                        </tr>
                        <tr>
                            <th>Meta Title</th>
                            <td>{{ $apositlle->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>Meta Description</th>
                            <td>{{ $apositlle->meta_description }}</td>
                        </tr>
                        <tr>
                            <th>Meta Keyword</th>
                            <td>{{ $apositlle->meta_keyword }}</td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <td>{{ $apositlle->status == '1' ? 'Active' : 'Deactive'}}</td>
                        </tr>
                    </table>
                    </div>
                  </div>
            </div>
          </div>
        </section>
      </main>
@endsection