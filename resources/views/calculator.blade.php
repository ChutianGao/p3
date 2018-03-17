@extends('layouts.master')

@section('title')
    <h2 class="text-center">{{ $title }}</h2>
@endsection

@section('errors')
    <div class="row">
        <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-3 col-xs-12 col-sm-8 col-md-8 col-lg-6">
        </div>
    </div>
@endsection

@push('body')
    <!-- Calculator Form -->
    <form action="index.php" method="POST">
        <div class="row">
            <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-3 col-xs-12 col-sm-8 col-md-8 col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                    <input type="number"
                           name="charged"
                           class="form-control"
                           placeholder="Total"
                           value=''
                           step="0.01">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="number"
                           name="numberPeople"
                           class="form-control"
                           placeholder="Numer of People"
                           value=''>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span>
                    <select name="tipsRate" class="form-control">
                        <option value="" >Satisfaction</option>
                        <option value="15" >Normal Lunch - 15%</option>
                        <option value="18" >Normal Dinner - 18%</option>
                        <option value="20" >Amazing - 20%</option>
                        <option value="10" >Not Satisfied - 10%</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="text-center">
                <br><label class="checkbox-inline"><input type="checkbox"
                                                          name="roundUp"
                                                          value="yes" 
                                                    >Round Up</label>
                <br>
                <br>
                <input type="submit" class="btn btn-primary" name="submit" value="Calculate">
            </p>
        </div>
    </form>

    <!-- Display Result -->
    <div class="row">
        <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-3 col-xs-12 col-sm-8 col-md-8 col-lg-6">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="well">                        
                        <h4>All Together</h4>
                        <p>
                            <label>Charged:</label> $ <br>
                            <label>Tips:</label> $ <br>
                            <label>Total:</label> $ 
                        </p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="well">                        
                        <h4>Per Person</h4>
                        <p>
                            <label>Charged:</label> $ <br>
                            <label>Tips:</label> $ <br>
                            <label>Owns:</label> $ 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush