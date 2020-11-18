<div class="col-md-4">
    <div class="card mb-4 box-shadow">
    <img src="images/{{ strtolower($recipe->name) }}.jpg" alt="{{ $recipe->name }}" width="75px" length="75px"/>
    <div class="card-body">
        <h2>{{ $recipe->name }}</h2>
        <p class="card-text">{{ $recipe->description }}</p>
        <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
            <a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('recipes/' . $recipe->id) }}" role="button">View</a>
            <a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('recipes/' . $recipe->id) . '/edit' }}" role="button">Edit</a>
            <form action="{{ URL::to('/recipe/destroy/'.$recipe->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-primary btn-sm btn-outline-secondary" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>