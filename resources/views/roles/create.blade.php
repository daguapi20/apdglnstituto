@extends('layouts.layout')
@section('title', ' Roles |')
@section('content')

<main class="c-main">
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">

              <div class="col-sm-6">
                <div class="card card c-callout c-callout-primary shadow-lg">
                    <div class="card-header">
                        <h4><i class="fas fa-user-shield mr-4"></i>Roles</h4>
                    </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-sm-12">
                            
                            <form method="POST"  action="{{ route('roles.store')}} ">
                                @csrf 
                                
                                @include('roles.form') 
                                     
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 mt-2 offset-md-3">
                                        <button type="submit" class="btn  btn-block btn-primary">
                                            Agregar 
                                        </button>
                                    </div>
                                </div>
                            </form>
                          </div>
                          
                      </div>
                  </div>
                </div>
              </div>


            
        </div>    
    </div>    
</div> 
</main>  
@endsection