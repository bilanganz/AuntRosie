<tr>
    <th scope="row">{{ $medicalCondition-> id }}</th>
    <td>{{ $medicalCondition-> name }}</td>
    <td>{{ $medicalCondition-> description }}</td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('medicalConditions/' . $medicalCondition->id) }}" role="button">View</a></td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('medicalConditions/' . $medicalCondition->id) . '/edit' }}" role="button">Edit</a></td>
    <td>
        <form action="{{ URL::to('/medicalConditions/destroy/'.$medicalCondition->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-primary btn-sm btn-outline-secondary" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
        </form>
    </td>
</tr>