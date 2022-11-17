<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=http://127.0.0.1:8000, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="row">
        <div class="col-md-6 offset-md-3 mt-3">
            <div class="form-group">
            <a href="{{ Route('addproduct') }}" class="btn btn-info">AddProduct</a>
            </div>
      

        <table class="table">
        <tr>
            <th>SL NO</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Status</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $sl=1; ?>

        @foreach ($data as $alldata)
        <tr>
            <td>{{ $sl }}</td>
            <td>{{ $alldata->pname }}</td>
            <td>{{ $alldata->pdes }}</td>
            <td>
            @if($alldata->status==1)
                <a href="{{ Route('status',$alldata->id) }}" class="btn btn-success"><i class="fa-solid fa-check"></i></a>
            @else
                 <a href="{{ Route('status',$alldata->id) }}" class="btn btn-danger"><i class="fa-solid fa-check"></i></a>
            @endif
            </td>
            <td>
                <a href="{{ Route('editproduct',$alldata->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>

                <a href="{{ Route('delete',$alldata->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
           
        </tr>
        <?php $sl++ ?> 
        @endforeach
    </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>
</html>