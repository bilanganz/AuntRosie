<tr>
    <th scope="row">{{ $inventory->id }}</th>
    <td>{{ $inventory->recipes->name }}</td>
    <td>{{ $inventory->quantity }}</td>
    <td>{{ $inventory->price }}</td>
    <td>{{ $inventory->production_date }}</td>
</tr>