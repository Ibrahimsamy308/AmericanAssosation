<!DOCTYPE html>
<html >
    <head>
        <title> Import Excel data to database </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    
    </head>
    <body>
       
        <div class="container">
            <div class="card bg-light mt-3">
                <div class="card-header">
                    Show Data
                </div>
                <div class="card-body">

                    @foreach ($alldata as $data)
                    <label type="text" name="fname">first_name: {{$data->fname}}</label>
                    <br>
                    <label type="text" name="lname">last_name: {{$data->lname}}</label>
                    <br>
                    <label type="text" name="pay">last_pay: {{$data->pay}}</label>
                    {{-- <br> --}}

                    {{-- <form action="" method="POST" >
                        @csrf
                        <input type="text" class="form-control" style="width:50%" id="update_payment"  placeholder="{{$data->pay-300}}">
                        <br>
                        <button type="button" class="btn btn-success">Update</button>
			    	</form> --}}
                    <form class="form-inline" action="{{route('update_pay',$data->id)}}" method="POST">
                        <div class="form-group mb-2">
                          <label for="update_paymentmethod" class="sr-only">Update Payment</label>
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Update Payment" >  
                        </div>
                        <div class="form-group mx-sm-3 mb-2" >
                            @csrf
                          <label for="update_payment" class="sr-only">update_payment</label>
                          <input type="text" class="form-control" id="update_payment" value="{{'The Rest=' .(300-$data->pay)}}" >
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Confirm Payment</button>
                    </form>

                    @endforeach
            

                   
                    
                        
                    {{-- <form action="{{ route('import-excel') }}"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file"
                            class="form-control">
                        <br>
                        <button class="btn btn-success">
                            Import User Data
                        </button>
                    </form> --}}
                </div>
            </div>
        </div>
     
  
    </body>
</html>
