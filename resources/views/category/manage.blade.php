<table>
    <tr>
        <th>Sl No</th>
        <th>Category Name</th>
        <th>Category Description</th>
        <th>Category Image</th>
        <th>Action</th>
    </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <img src="{{asset($category->image)}}" alt="" height="90" width="120">
                </td>
                <td>
                    <a href="" class="btn btn-success btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
</table>
