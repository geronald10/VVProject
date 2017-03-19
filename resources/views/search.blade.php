<!DOCTYPE html>
<html>
<head>
    <title>VV - Smartphone Automatic Recommendation</title>
</head>
<body>

    <h1>Search Smartphone</h1>
    <p>By Categories</p>
    <form>
        @foreach($categories as $category)
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input">{{ $category->name }}
            </label>
        </div>
        @endforeach
        <div class="form-group">
            <label for="exampleTextarea">Add Description</label>
            <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>