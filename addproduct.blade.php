<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=http://127.0.0.1:8000, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="row mt-3" >
        <div class="col-md-6 offset-md-3">
            <form action="{{ Route('productstore') }}" method="post">
                @csrf
                <div class="form-group mt-3 pt-3">
                    <label for="pname">Product Name</label>
                    <input type="text" name="pname" class="form-control mt-2" id="pname">
                </div>
                <div class="form-group">
                    <label for="pdes">Product Description</label>
                    <input type="text" name="pdes" class="form-control mt-2" id="pdes">
                </div>
                <div class="form-group">
                    <label for="status">Product Status</label>
                    <select name="status" class="form-control mt-2" id="status">
                        <option value="0">------Select Status-------</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <button class="btn btn-success form-control mt-3">save</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>
</html>