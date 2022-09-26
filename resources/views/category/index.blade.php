<from action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><textarea name="description" required></textarea></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="image" required></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Create New Category"/></td>
        </tr>
    </table>
</from>
