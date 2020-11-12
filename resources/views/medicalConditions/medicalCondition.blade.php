<tr>
    <th scope="row">{{ $medicalCondition-> id }}</th>
    <td>{{ $medicalCondition-> name }}</td>
    <td>{{ $medicalCondition-> description }}</td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('medicalConditions/' . $medicalCondition->id) }}" role="button">View</a></td>
    <td><a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('medicalConditions/' . $medicalCondition->id) . '/edit' }}" role="button">Edit</a></td>
</tr>